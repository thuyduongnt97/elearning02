<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Class extends Model
{
    protected $fillable = [
        'class_name',
        'content',
        'status',
        'create_time',
        'user_id',
    ];

    public $timestamps = false; 

    public function users()
    {
        return $this->hasMany(User::class);
    }

    public function lessons()
    {
        return $this->hasMany(Lesson::class);
    }
}
