<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;
use Illuminate\Auth\Passwords\CanResetPassword;

class User extends Authenticatable implements MustVerifyEmail, CanResetPasswordContract
{
    use Notifiable, CanResetPassword;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'phone',
        'status',
        'image',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    public function lessons()
    {
    	return $this->hasMany(Lesson::class);
    }

    public function exams()
    {
    	return $this->hasMany(Exam::class);
    }

    public function tasks()
    {
    	return $this->hasMany(Task::class);
    }

    public function classes()
    {
    	return $this->hasMany(Class::class);
    }

    public function roleUsers()
    {
    	return $this->hasMany(RoleUser::class);
    }
}
