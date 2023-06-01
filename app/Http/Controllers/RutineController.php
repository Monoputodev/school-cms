<?php

namespace App\Http\Controllers;

use App\Models\Courses;
use App\Models\Rutine;
use Illuminate\Http\Request;

class RutineController extends Controller
{
    public function index()
    {
        $rutines = Rutine::all();

        return view('admin.pages.rutines.index', compact('rutines'));
    }

    public function create()
    {

        // Show the form to create a new rutine
        return view('admin.pages.rutines.create');
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

        // Store the rutine in the database
        Rutine::create($data);

        // Redirect back to the index page or a specific route
        return redirect()->route('rutines.index')->with('success', 'Rutine created successfully.');
    }

    public function edit(Rutine $rutine)
    {
        // Show the form to edit the specified rutine
        return view('admin.pages.rutines.edit', compact('rutine'));
    }

    public function update(Request $request, Rutine $rutine)
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

        // Update the rutine in the database
        $rutine->update($data);

        // Redirect back to the index page or a specific route
        return redirect()->route('rutines.index')->with('success', 'Rutine updated successfully.');
    }

    public function destroy(Rutine $rutine)
    {
        // Delete the rutine from the database
        $rutine->delete();

        // Redirect back to the index page or a specific route
        return redirect()->route('rutines.index')->with('success', 'Rutine deleted successfully.');
    }
    public function Active(Rutine $rutine)
    {

        $rutine->status = '1';
        if ($rutine->save()) {
            return redirect()->route('rutines.index')->with('success', 'rutine Activated successfully.');
        } else {
            return back()->with('error', 'rutine Activation Unsuccessfull');
        }
    }

    public function Inactive(Rutine $rutine)

    {
        // dd($rutine->status);
        $rutine->status = '0';
        if ($rutine->save()) {
            return redirect()->route('rutines.index')->with('success', 'rutine Deactivated successfully.');
        } else {
            return back()->with('error', 'rutine Dactivation Unsuccessfull.');
        }
    }
}
