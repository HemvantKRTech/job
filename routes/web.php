<?php
use App\Http\Controllers\Web\ComingSoonController;
use App\Http\Controllers\Web\PageController;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;
use Illuminate\Auth\Events\Verified;
use App\Models\Company;
use App\Models\Candidate;

Route::controller(ComingSoonController::class)->name('web.')->group(function () {
    Route::get('coming-soon', 'comingSoon')->name('coming-soon');
    Route::post('coming-soon/password', 'comingSoonPassword')->name('coming-soon.password');
});

Route::middleware(['web', 'coming_soon'])->controller(PageController::class)->name('web.')->group(function () {
    Route::get('/', 'home')->name('home');
});
Route::get('/{guard}/email/verify/{id}/{hash}', function (EmailVerificationRequest $request, $guard) {
   
    if ($guard == 'company') {
        $user = Company::find($request->id);

    } elseif ($guard == 'candidate') {
        $user = Candidate::find($request->id); 
    }
    if (! hash_equals((string) $request->id, (string) $user->getKey())) {
        return redirect()->route('home')->withErrors(['error' => 'Invalid verification link.']);
    }
    if ($user->markEmailAsVerified()) {
        event(new Verified($user)); 
        return redirect()->route("{$guard}.dashboard.index"); 
    }

    return redirect()->to("/$guard/dashboard"); // Redirect to the respective dashboard
})->name('verification.verify');
