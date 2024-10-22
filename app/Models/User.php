<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $guard = 'web';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'email_verified_at'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function otpVerification(){
        return $this->hasOne(OtpVerification::class);
    }

    public function profile(){
        return $this->hasOne(Profile::class);
    }

    public function salary(){
        return $this->hasOne(Salary::class);
    }

    public function educations(){
        return $this->hasMany(Education::class);
    }

    public function skills(){
        return $this->hasMany(Skill::class);
    }

    public function userSkills(){
        return $this->hasOne(UserSkill::class);
    }
}
