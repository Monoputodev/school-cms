<?php

namespace App\Http\Controllers;
use Intervention\Image\ImageManagerStatic as Image;
use App\Models\Notice;
use Illuminate\Http\Request;


// namespace Intervention\Image\Facades;

class NoticeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $notices = Notice::orderBy('id', 'DESC')->get();
        // dd($notices);
        return view('admin.pages.notice.index', compact('notices'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // dd(public_path());
        return view('admin.pages.notice.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required',
            'pdf_file' => 'required|file|',
        ]);

        $pdf_file = $request->file('pdf_file');
        $pdf_file_name = $pdf_file->getClientOriginalName();
 $pdf_file->move(base_path('/uploads/notices'), $pdf_file_name);

        $data['pdf_file'] = $pdf_file_name;


        $notice = Notice::create($data);

        if ($notice) {
            return redirect()
                ->route('notices.index')
                ->with('success', 'Notice created successfully.');
        } else {
            return back()->with('error', 'Notice creating showing error.');
        }
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Notice  $notice
     * @return \Illuminate\Http\Response
     */
    public function show(Notice $notice)
    {
        return view('admin.pages.notice.view', compact('notice'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Notice  $notice
     * @return \Illuminate\Http\Response
     */
    public function edit(Notice $notice)
    {
        return view('admin.pages.notice.edit', compact('notice'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Notice  $notice
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Notice $notice)
    {
        $data = $request->validate([
            'title' => 'required',
            // 'subtitle' => 'required',
        ]);

        if ($request->hasFile('pdf_file')) {
            $pdf_file = $request->file('pdf_file');
        $pdf_file_name = $pdf_file->getClientOriginalName();
        $pdf_file_path = $pdf_file->save(base_path('/uploads/notices'), $pdf_file_name);
        $data['pdf_file'] = $pdf_file_path;
        }

        $notice = $notice->update($data);

        if ($notice) {
            return redirect()
                ->route('notices.index')
                ->with('success', 'Notice Updated successfully.');
            # code...
        } else {
            return back()->with('error', 'Notice Update showing error.');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Notice  $notice
     * @return \Illuminate\Http\Response
     */
    public function destroy(Notice $notice)
    {
        // delete the notice's image file, if it exists

        if ($notice->image && file_exists(asset('uploads/notices/' . $notice->image))) {
            unlink(asset('uploads/notices/' . $notice->image));
        }

        // delete the notice from the database
        $notice->delete();

        return redirect()
            ->route('notices.index')
            ->with('success', 'Notice deleted successfully.');
    }

    /**
     * Active the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Notice  $notice
     * @return \Illuminate\Http\Response
     */
    public function Active(Notice $notice)
    {
        $notice->status = '1';
        if ($notice->save()) {
            return redirect()
                ->route('notices.index')
                ->with('success', 'notice Activated successfully.');
        } else {
            return back()->with('error', 'notice Activation Unsuccessfull');
        }
    }
    /**
     * Inactive  the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Notice  $notice
     * @return \Illuminate\Http\Response
     */
    public function Inactive(Notice $notice)
    {
        // dd($notice->status);
        $notice->status = '0';
        if ($notice->save()) {
            return redirect()
                ->route('notices.index')
                ->with('success', 'notice Deactivated successfully.');
        } else {
            return back()->with('error', 'notice Dactivation Unsuccessfull.');
        }
    }
}
