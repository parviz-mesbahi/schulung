<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    use HasFactory;
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
