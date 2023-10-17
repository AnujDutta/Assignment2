<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MyModel;
class MyControllertest extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function store(Request $request)
    {
        $request->validate([
            'FirstName' => 'required',
            'LastName' => 'required',
            'email' => 'required|email',
            'mobile' => 'required',
            'state' => 'required',
            'city' => 'required',
            'course' => 'required',
        ]);

        $admission = new MyModel();
        $admission->FirstName = $request->input('FirstName');
        $admission->LastName = $request->input('LastName');
        $admission->email = $request->input('email');
        $admission->mobile = $request->input('mobile');
        $admission->state = $request->input('state');
        $admission->city = $request->input('city');
        $admission->course = $request->input('course');
        $admission->status = $request->input('status', 'submitted');
        $admission->save();


        return redirect()->back()->with('success', 'Admission data submitted successfully');
    }

    public function showDataTable()
{
    $admissions = MyModel::all(); // Replace with your model
    return view('data-table', compact('admissions'));
}
}




