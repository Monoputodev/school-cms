<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Content;
use App\Models\Courses;
use App\Models\Hero;
use App\Models\Notice;
use App\Models\Package;
use App\Models\Team;

class PublicController extends Controller
{
    public function index()
    {
        $courses = Courses::all();
        $sliders = Hero::all();
        $notices = Notice::all();
        $blogs = Blog::all();
        $teams = Team::all();
        return view('web.pages.index', compact('sliders', 'notices', 'blogs', 'teams', 'courses'));
    }

    public function dashboard()
    {
        return view('admin.pages.index');
    }

    public function demo()
    {
        # code...
    }

    public function allteacher()
    {
        $teams = Team::where('status', 1)->orderBy('id', 'DESC')->get();
        return view('web.pages.teacher.index', compact('teams'));
    }
    public function teacher($teacher)
    {
        $teacher = Team::find($teacher);
        return view('web.pages.teacher.details', compact('teacher'));
    }


    public function allNews()
    {
        $blogs = Blog::where('status', 1)->orderBy('id', 'DESC')->get();
        return view('web.pages.news.index', compact('blogs'));
    }
    public function news($news)
    {
        $news = Blog::find($news);
        return view('web.pages.news.details', compact('news'));
    }


    public function allCourse()
    {
        $courses = Courses::where('status', 1)->orderBy('id', 'DESC')->get();
        return view('web.pages.course.index', compact('courses'));
    }
    public function course($course)
    {
        $courses = Courses::where('status', 1)->orderBy('id', 'DESC')->get();
        $course = Courses::find($course);
        return view('web.pages.course.details', compact('course','courses'));
    }




    public function allnotice()
    {
        $notices = Notice::where('status', 1)->orderBy('id', 'DESC')->get();
        return view('web.pages.notice.index', compact('notices'));
    }
    public function notice($notice)
    {
        $notice = Notice::find($notice);
        return view('web.pages.notice.index', compact('notice'));
    }
}
