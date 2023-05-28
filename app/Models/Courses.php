<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Courses extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'image',
        'details',
        'description',
        'status',
    ];
    public function admissions()
    {
        return $this->hasMany(Admission::class, 'reservation_course');
    }
}
