<?php

namespace App\Http\Controllers;

use App\Models\Type;
use Illuminate\Http\Request;

class TypeController extends Controller
{
    public function index()
    {
        $types = Type::all();
        return view('admin.pages.type.index', compact('types'));
    }

    public function create()
    {
        return view('admin.pages.type.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
        ]);

        Type::create($validatedData);

        return redirect()->route('types.index')
            ->with('success', 'Type created successfully.');
    }

    public function edit(Type $type)
    {
        return view('admin.pages.type.edit', compact('type'));
    }

    public function update(Request $request, Type $type)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $type->update($validatedData);

        return redirect()->route('types.index')
            ->with('success', 'Type updated successfully.');
    }

    public function destroy(Type $type)
    {
        $type->delete();

        return redirect()->route('types.index')
            ->with('success', 'Type deleted successfully.');
    }

         /**
     * Active the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Type  $type
     * @return \Illuminate\Http\Response
     */
    public function Active(Type $type)
    {

        $type->status = '1';
        if ($type->save()) {
            return redirect()->route('types.index')->with('success', 'type Activated successfully.');
        } else {
            return back()->with('error', 'type Activation Unsuccessfull');
        }
    }
    /**
     * Inactive  the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Type  $type
     * @return \Illuminate\Http\Response
     */
    public function Inactive(Type $type)

    {
        // dd($type->status);
        $type->status = '0';
        if ($type->save()) {
            return redirect()->route('types.index')->with('success', 'type Deactivated successfully.');
        } else {
            return back()->with('error', 'type Dactivation Unsuccessfull.');
        }
    }
}
