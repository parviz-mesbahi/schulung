<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    protected $fillable = [
        'number',
        'title',
        'description',
        'content',
    ];

    public function tasks()
    {
        return $this->hasMany(Task::class);
    }
}
