<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    protected $fillable = [
        'title',
        'content',
        'file',
        'create_time',
    ];

    public function users()
    {
        return $this->belongsTo(User::class);
    }

    public function classes()
    {
        return $this->belongsTo(Class::class);
    }

    public function subjects()
    {
        return $this->belongsTo(Subject::class);
    }
}
