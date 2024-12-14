<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = [
        'lesson_id',
        'category',
        'question',
        'answer',
    ];


    public function lesson()
    {
        return $this->belongsTo(Lesson::class);
    }
}
