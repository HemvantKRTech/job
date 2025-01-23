<?php

namespace App\Http\Controllers\Company\Auth;

use App\Models\Company;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use log;

class CompanyRegisterController extends Controller
{
    protected $redirectTo = '/company/dashboard';

    public function registrationForm()
    {
        return view('company.auth.registration');
    }

    public function registration(Request $request)
    {
        if (Auth::guard('company')->check()) {
            return response()->json([
                'class' => 'bg-warning',
                'message' => 'You have already logged in.',
                'call_back' => route('company.dashboard.index'),
                'error' => true
            ]); 
        }

        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:companies'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
        ]);

        $company = new Company;
        $company->name = $request->name;
        $company->email = $request->email;
        $company->password = Hash::make($request->password);
        
        if ($company->save()) {
            try {
                $company->sendEmailVerificationNotification();
                \Log::info('Email sent successfully to ' . $company->email);
            } catch (\Exception $e) {
                Log::error('Error sending email to ' . $company->email . ': ' . $e->getMessage());
                dd($e->getMessage()); // Debugging - stops execution to show the error
            }

        return response()->json([
            'class' => 'bg-success',
            'message' => 'Successfully Registered. Please check your email to verify your account.',
            'call_back' => null,
            'error' => false
        ]);
        }

        return response()->json([
            'class' => 'bg-danger',
            'message' => 'Registration failed. Please try again.',
            'error' => true
        ]);
    }


    public function redirectToGoogle(){
        config([
            'services.google.client_id' => env('COMPANY_GOOGLE_CLIENT_ID'),
            'services.google.client_secret' => env('COMPANY_GOOGLE_CLIENT_SECRET'),
            'services.google.redirect' => env('COMPANY_GOOGLE_REDIRECT_URI'),
        ]);

        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback(){
        try {
            config([
                'services.google.client_id' => env('COMPANY_GOOGLE_CLIENT_ID'),
                'services.google.client_secret' => env('COMPANY_GOOGLE_CLIENT_SECRET'),
                'services.google.redirect' => env('COMPANY_GOOGLE_REDIRECT_URI'),
            ]);

            $googleUser = Socialite::driver('google')->stateless()->user();

            $company = Company::firstOrCreate(
                ['email' => $googleUser->getEmail()],
                [
                    'name' => $googleUser->getName(),
                    'google_id' => $googleUser->getId(),
                    'avatar' => $googleUser->getAvatar(),
                    'password' => bcrypt('default_password'),
                    'email_verified_at' => Carbon::now(),
                ]
            );

            Auth::guard('company')->login($company);

            return redirect()->intended('company/dashboard');
        } catch (\Exception $e) {
            return redirect('/company/login')->withErrors(['msg' => 'Unable to login.']);
        }
    }

    protected function guard()
    {
        return Auth::guard('company');
    }
}
