<?php

namespace App\Http\Controllers;

use App\Models\PackageQuerry;
use Illuminate\Http\Request;

class PackageQuerryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $queries = PackageQuerry::orderBy('ranking', 'DESC')->get();

        return view('admin.pages.querry.index', compact('queries'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //  dd($request->all());
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'phone' => 'required|string|max:20',
            'messege' => 'nullable|string',
            'package_id' => 'required|integer',
        ]);
        // dd($data);
        PackageQuerry::create($data);

        return redirect()
            ->back()
            ->with('success', 'Your query has been submitted successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PackageQuerry  $packageQuerry
     * @return \Illuminate\Http\Response
     */
    public function show(PackageQuerry $packageQuerry)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PackageQuerry  $packageQuerry
     * @return \Illuminate\Http\Response
     */
    public function edit(PackageQuerry $packageQuerry)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PackageQuerry  $packageQuerry
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PackageQuerry $packageQuerry)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PackageQuerry  $packageQuerry
     * @return \Illuminate\Http\Response
     */
    public function destroy(PackageQuerry $packageQuerry)
    {
        //
    }
}
