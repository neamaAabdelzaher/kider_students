<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use App\Models\Teacher;
use Illuminate\Http\Request;

class SubjectsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $subjects=Teacher::get();
        return view('dashboard.subjects.index',compact('subjects'));
       
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
      $teachers= Teacher::select('id', 'name')->get();
    return view('Dashboard.subjects.create',compact('teachers'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        // dd($request);
        $validationMessages=$this->messages();
        $data=$request->validate([
          'subjectName'=>'required|max:50',
          'ageFrom'=>'required',
          'ageTo'=>'required',
          'timeFrom'=>'required',
          'timeTo'=>'required',
          'capacity'=>'required',
          'price'=>'required',
          'teacher_id'=>'required'
        ],$validationMessages);

    
        Subject::create($data);   
        return redirect()->route('dashboard.subjects.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }


    public function messages(){

        return [


            "subjectName.required"=> "Subject name is required",
            "subjectName.max"=> "Subject name less than 50 letters",
            "ageFrom.required"=> "ageFrom is required",
            "ageTo.required"=> "ageTo is required",
            "timeFrom.required"=> "timeFrom is required",
            "timeTo.required"=> "timeTo is required",
            "capacity.required"=> "capacity is required",
            // "capacity.min"=> "capacity should be more than 5",
            // "capacity.max"=> "capacity  should be less than 20",
            "price.required"=> "price title is required",
            "teacher_id.required"=> "select Teacher",
           

        ];
    }
}
