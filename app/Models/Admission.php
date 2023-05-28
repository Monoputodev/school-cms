<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admission extends Model
{
    use HasFactory;
        protected $fillable = [
        'reservation_name',
        'reservation_email',
        'reservation_phone',
        'reservation_course',
        'reservation_message',
    ];


    public function course()
    {
        return $this->belongsTo(Courses::class, 'reservation_course');
    }
}
