<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Result extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'file',
        'course_id',
        'status',
    ];

    public function course()
    {
        return $this->belongsTo(Course::class);
    }
}
