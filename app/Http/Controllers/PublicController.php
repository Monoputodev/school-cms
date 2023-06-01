<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Content;
use App\Models\Courses;
use App\Models\Hero;
use App\Models\Notice;
use App\Models\Package;
use App\Models\Photo;
use App\Models\Result;
use App\Models\Rutine;
use App\Models\Team;
use App\Models\Type;

class PublicController extends Controller
{
    public function index()
    {
        $courses = Courses::all()->take(8);
        $sliders = Hero::all();
        $notices = Notice::all()->take(5);
        $blogs = Blog::all()->take(3);
        $teams = Team::all()->take(4);
        $photos = Photo::all()->take(6);
        $rutines = Rutine::all()->take(4);
        $results = Result::all()->take(4);
        return view('web.pages.index', compact('sliders', 'notices', 'blogs', 'teams', 'courses','photos','rutines','results'));
    }

    public function dashboard()
    {
        return view('admin.pages.index');
    }

    public function demo()
    {
        # code...
    }
    public function admission()
    {$courses = Courses::all();

        return view('web.pages.admission',compact('courses'));
    }

    public function allphoto()
    {
        $photos = Photo::where('status', 1)->orderBy('id', 'DESC')->get();
        return view('web.pages.gallery', compact('photos'));
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
        $title = "সকল নোটিশ";
        $notices = Notice::where('status', 1)->orderBy('id', 'DESC')->paginate(10);
        return view('web.pages.notice.index', compact('notices','title'));
    }
    public function notice($type)
    {
        $cat = Type::find($type);
        $notices = Notice::where('type',$type)->get();
        // dd($notice);
        return view('web.pages.notice.details', compact('notices','cat'));
    }

    public function allresult()
    {
        $results = Result::where('status',1)->orderBy('id', 'DESC')->paginate(10);
        $title = "চলমান ফলাফল";
        return view('web.pages.notice.result',compact('results','title'));
    }
    public function result($id)
    {
        $courseName = Courses::find($id)->name;
        $results = Result::where('status',1)->orderBy('id', 'DESC')->where('course_id',$id)->paginate(10);
        $title = $courseName;
        return view('web.pages.notice.result',compact('results','title'));
    }


    public function allrutine()
    {
        $rutines = Rutine::where('status',1)->orderBy('id', 'DESC')->paginate(10);
        $title = "ক্লাস রুটিন";
        return view('web.pages.notice.rutine',compact('rutines','title'));
    }
    public function rutine($id)
    {

        $courseName = Courses::find($id)->name;
        $rutines = Rutine::where('status',1)->orderBy('id', 'DESC')->where('course_id',$id)->paginate(10);
        $title =  $courseName;
        return view('web.pages.notice.rutine',compact('rutines','title'));
    }
}
