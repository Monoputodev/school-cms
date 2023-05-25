<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PackageQuerry extends Model
{
    use HasFactory;
    protected $table = 'package_queries';
    protected $fillable = ['name', 'email', 'phone', 'messege', 'package_id'];

    public function package()
    {
        return $this->belongsTo(Package::class);
    }
}
