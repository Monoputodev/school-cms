<?php

namespace App\Http\Controllers;

use App\Models\Admission;
use Illuminate\Http\Request;

class AdmissionController extends Controller
{
    public function index()
    {
        $admissions = Admission::all();
        return view('admin.pages.admissions.index', compact('admissions'));
    }



    public function store(Request $request)
    {
        $data = $request->validate([
            'reservation_name' => 'required',
            'reservation_email' => 'required|email',
            'reservation_phone' => 'required',
            'reservation_course' => 'required',
            'reservation_message' => 'nullable',
        ]);

        Admission::create($data);

        return back()->with('success', 'Request Submitted successfully.');
    }


    public function destroy(Admission $admission)
    {
        $admission->delete();

        return redirect()->route('admissions.index')->with('success', 'Admission deleted successfully.');
    }

    public function Active(Admission $admission)
    {

        $admission->status = '1';
        if ($admission->save()) {
            return redirect()->route('admission.index')->with('success', 'admission Activated successfully.');
        } else {
            return back()->with('error', 'admission Activation Unsuccessfull');
        }
    }


    public function Inactive(Admission $admission)

    {

        $admission->status = '0';
        if ($admission->save()) {
            return redirect()->route('admission.index')->with('success', 'admission Deactivated successfully.');
        } else {
            return back()->with('error', 'admission Dactivation Unsuccessfull.');
        }
    }
}
