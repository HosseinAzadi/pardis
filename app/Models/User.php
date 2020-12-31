<?php

namespace App\Models;

use App\Notifications\Email\ResetPassword as ResetPasswordNotification;
use App\Notifications\Email\VerifyEmail as VerifyEmailNotification;
use App\Services\Searches\Configurators\UserConfigurator;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laratrust\Traits\LaratrustUserTrait;
use Modules\PardisCore\Models\Company;
use ScoutElastic\Searchable;

class User extends Authenticatable implements MustVerifyEmail
{
    use Notifiable, SoftDeletes, LaratrustUserTrait/*, Searchable*/;

    protected $indexConfigurator = UserConfigurator::class;

    protected $searchRules = [
        //
    ];

    // Here you can specify a mapping for model fields
    protected $mapping = [
        'properties' => [
            //
        ]
    ];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name', 'last_name', 'password', 'email', 'nid', 'mobile', 'gender', 'username', 'province_id', 'city', 'address', 'postal_code', 'parent_id', 'is_banned', 'two_factor_status',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    protected $appends = [
        'full_name'
    ];

    /**
     * @return mixed
     */
    public function isSuperUser()
    {
        return $this->is_supperuser;
    }

    /**
     * @return mixed
     */
    public function isBanned()
    {
        return $this->is_banned;
    }

    /**
     * Send the password reset notification.
     *
     * @param string $token
     * @return void
     */
    public function sendPasswordResetNotification($token)
    {
        $this->notify(new ResetPasswordNotification($token));
    }

    /**
     * Send the email verification notification.
     *
     * @return void
     */
    public function sendEmailVerificationNotification()
    {
        $this->notify(new VerifyEmailNotification);
    }

    public function province()
    {
        return $this->belongsTo(Province::class);
    }

    public function getFullNameAttribute()
    {
        return $this->first_name . ' ' . $this->last_name;
    }

    public function company()
    {
        return $this->belongsTo(Company::class);
    }
}
