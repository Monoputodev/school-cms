<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    protected $table = 'contents';
    protected $fillable = [
        'website_name',
        'website_logo',
        'website_favicon',
        'website_email',
        'website_phone',
        'website_address',
        'about_content',
        'about_image',
        'banner_hero',
        'banner_top',
        'banner_hero_status',
        'banner_top_status',
        'blog_background',
    ];
}
