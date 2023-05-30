<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notice extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'subtitle',
        'pdf_file',
        'status',
        'type',
    ];

    public function types()
{
    return $this->belongsTo(Type::class,'type');
}
}
