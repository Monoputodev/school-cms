<?php

namespace App\Http\Controllers;

use App\Models\Courses;
use App\Models\Result;
use Illuminate\Http\Request;

class ResultController extends Controller
{
    public function index()
    {
        $results = Result::all();

        return view('admin.pages.results.index', compact('results'));
    }

    public function create()
    {

        // Show the form to create a new result
        return view('admin.pages.results.create');
    }

    public function store(Request $request)
    {
        // Validate the input data
        $data = $request->validate([
            'title' => 'required',
            'file' => 'required|file',
            'course_id' => 'required',
        ]);
        $file = $request->file('file');
        $file_name = $file->getClientOriginalName();
        $file->move(base_path('/uploads/files'), $file_name);

        $data['file'] = $file_name;

        // Store the result in the database
        Result::create($data);

        // Redirect back to the index page or a specific route
        return redirect()->route('results.index')->with('success', 'Result created successfully.');
    }

    public function edit(Result $result)
    {
        // Show the form to edit the specified result
        return view('admin.pages.results.edit', compact('result'));
    }

    public function update(Request $request, Result $result)
    {
        // Validate the input data
        $data = $request->validate([
            'title' => 'required',
            'course_id' => 'required',
        ]);
        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $file_name = $file->getClientOriginalName();
            $file_path = $file->save(base_path('/uploads/files'), $file_name);
            $data['file'] = $file_path;
        }

        // Update the result in the database
        $result->update($data);

        // Redirect back to the index page or a specific route
        return redirect()->route('results.index')->with('success', 'Result updated successfully.');
    }

    public function destroy(Result $result)
    {
        // Delete the result from the database
        $result->delete();

        // Redirect back to the index page or a specific route
        return redirect()->route('results.index')->with('success', 'Result deleted successfully.');
    }
    public function Active(Result $result)
    {

        $result->status = '1';
        if ($result->save()) {
            return redirect()->route('results.index')->with('success', 'result Activated successfully.');
        } else {
            return back()->with('error', 'result Activation Unsuccessfull');
        }
    }

    public function Inactive(Result $result)

    {
        // dd($result->status);
        $result->status = '0';
        if ($result->save()) {
            return redirect()->route('results.index')->with('success', 'result Deactivated successfully.');
        } else {
            return back()->with('error', 'result Dactivation Unsuccessfull.');
        }
    }
}
