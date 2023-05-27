<?php

namespace App\Http\Controllers;

use App\Models\Courses;
use Illuminate\Http\Request;

class CoursesController extends Controller
{
    public function index()
    {
        $courses = Courses::all();
        return view('courses.index', compact('courses'));
    }

    public function create()
    {
        return view('courses.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'nullable',
            'status' => 'nullable',
        ]);

        Courses::create($request->all());

        return redirect()->route('courses.index')->with('success', 'Courses created successfully.');
    }

    public function show(Courses $courses)
    {
        return view('courses.show', compact('courses'));
    }

    public function edit(Courses $courses)
    {
        return view('courses.edit', compact('courses'));
    }

    public function update(Request $request, Courses $courses)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'nullable',
            'status' => 'nullable',
        ]);

        $courses->update($request->all());

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
     * @param  \App\Models\Hero  $hero
     * @return \Illuminate\Http\Response
     */
    public function Active(Hero $hero)
    {

        $hero->status = '1';
        if ($hero->save()) {
            return redirect()->route('hero.index')->with('success', 'hero Activated successfully.');
        } else {
            return back()->with('error', 'hero Activation Unsuccessfull');
        }
    }
    /**
     * Inactive  the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Hero  $hero
     * @return \Illuminate\Http\Response
     */
    public function Inactive(Hero $hero)

    {

        $hero->status = '0';
        if ($hero->save()) {
            return redirect()->route('hero.index')->with('success', 'hero Deactivated successfully.');
        } else {
            return back()->with('error', 'hero Dactivation Unsuccessfull.');
        }
    }
   
}
