<?php

namespace App\Models;

use App\Notifications\CompanyResetPasswordNotification;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Contracts\Auth\MustVerifyEmail;

class Company extends Authenticatable implements MustVerifyEmail
{
    use Notifiable, HasFactory, SoftDeletes;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guard = 'company';
    protected $fillable = [
        'name', 'email', 'google_id', 'avatar', 'password',
    ];


    protected $hidden = [
        'password', 'remember_token',
    ];


    public function sendEmailVerificationNotification()
    {
        $this->notify(new \App\Notifications\CustomVerifyEmail('company'));
    }

}
