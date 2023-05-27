<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Content;

use App\Models\Hero;
use App\Models\Notice;
use App\Models\Package;
use App\Models\Team;

class PublicController extends Controller
{
    public function index()
    {
$sliders = Hero::all();
$notices = Notice::all();
$blogs = Blog::all();
 $teams = Team::all();
        return view('web.pages.index',compact('sliders','notices','blogs','teams'));
    }

    public function dashboard()
    {
        return view('admin.pages.index');
    }

}