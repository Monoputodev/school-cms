<?php

namespace App\Http\Controllers;

use App\Models\Courses;
use Illuminate\Http\Request;
use Intervention\Image\ImageManagerStatic as Image;
class CoursesController extends Controller
{
    public function index()
    {
        $courses = Courses::all();
        return view('admin.pages.courses.index', compact('courses'));
    }

    public function create()
    {
        return view('admin.pages.courses.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'image' => 'nullable',
            'details' => 'nullable',
            'description' => 'nullable',
            'status' => 'nullable',
        ]);
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->extension();

            $img = Image::make($image->path());
            $img->fit(380, 310); // resize the image to fit within 380x310 while preserving aspect ratio
            $img->encode('jpg', 80); // convert image to JPEG format with 80% quality and reduce file size to 80kb
            $img->save(base_path('/uploads/blogs/') . $imageName);

            $data['image'] = $imageName;
        }
        Courses::create($data);

        return redirect()->route('courses.index')->with('success', 'Courses created successfully.');
    }

    public function show(Courses $courses)
    {
        return view('admin.pages.courses.show', compact('courses'));
    }

    public function edit(Courses $courses)
    {
        return view('admin.pages.courses.edit', compact('courses'));
    }

    public function update(Request $request, Courses $courses)
    {
        $data= $request->validate([
            'name' => 'required',
            'description' => 'nullable',
            'status' => 'nullable',
        ]);
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->extension();

            $img = Image::make($image->path());
            $img->fit(380, 310); // resize the image to fit within 380x310 while preserving aspect ratio
            $img->encode('jpg', 80); // convert image to JPEG format with 80% quality and reduce file size to 80kb
            $img->save(base_path('/uploads/blogs/') . $imageName);

            $data['image'] = $imageName;
        }
        $courses->update($data);

        return redirect()->route('courses.index')->with('success', 'Courses updated successfully.');
    }

    public function destroy(Courses $courses)
    {
        $courses->delete();

        return redirect()->route('courses.index')->with('success', 'Courses deleted successfully.');
    }




     /**
     * Active the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Courses  $courses
     * @return \Illuminate\Http\Response
     */
    public function Active(Courses $courses)
    {

        $courses->status = '1';
        if ($courses->save()) {
            return redirect()->route('courses.index')->with('success', 'courses Activated successfully.');
        } else {
            return back()->with('error', 'courses Activation Unsuccessfull');
        }
    }
    /**
     * Inactive  the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Courses  $courses
     * @return \Illuminate\Http\Response
     */
    public function Inactive(Courses $courses)

    {

        $courses->status = '0';
        if ($courses->save()) {
            return redirect()->route('courses.index')->with('success', 'courses Deactivated successfully.');
        } else {
            return back()->with('error', 'courses Dactivation Unsuccessfull.');
        }
    }

}
