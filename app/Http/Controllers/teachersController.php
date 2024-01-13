<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;
use App\Traits\Files;
use PHPUnit\Event\Code\Test;

class teachersController extends Controller
{
    /**
     * Display a listing of the resource.
     */

     use Files;
    public function index()
    {
      
        $teachers=Teacher::get();
        return view('dashboard.teachers.index',compact('teachers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.teachers.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
    
       
        $validationMessages=$this->messages();
          $data=$request->validate([
            'name'=>'required|max:50',
            'title'=>'required|max:50',
            'image'=>'required|mimes:png,jpg,jpeg|max:2048',
            'facebook'=>'required',
            'twitter'=>'required',
            'instagram'=>'required'
          ],$validationMessages);

          $destinationPath='assets/dashboard/img';
          $fileName=$this->uploadFile($request->image ,$destinationPath);
          $data['image']="$fileName";
          Teacher::create($data);   
          return redirect()->route('dashboard.teachers.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $teacher=Teacher::findOrFail($id);

        return view('dashboard.teachers.show',compact('teacher'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $teacher=Teacher::findOrFail($id);
        return view('dashboard.teachers.edit',compact('teacher'));

    
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validationMessages=$this->messages();
        $data=$request->validate([
          'name'=>'required|max:50',
          'title'=>'required|max:50',
          'image'=>'sometimes|mimes:png,jpg,jpeg|max:2048',
          'facebook'=>'required',
          'twitter'=>'required',
          'instagram'=>'required'
        ],$validationMessages);
        $teacher=Teacher::findOrFail($id);
        $oldFile= $teacher->image;
         //check if upload new image
         if($request->hasFile('image')){
            //upload image
            $destinationPath='assets/dashboard/img';
            $newFileName=$this->uploadFile($request->image ,$destinationPath);
            // remove old image
            $Path="assets/dashboard/img/{$oldFile}";
            $deletedFile=$this->DeleteFile($Path);
            if($deletedFile){

                $data['image']=$newFileName ;

            }

            
         }

        Teacher::where('id', $id)->update($data); ;   
        return redirect()->route('dashboard.teachers.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $id=$request->id;
        $teacher=Teacher::findOrFail($id);
        $teacher->where('id',$id)->delete();
        return redirect()->route('dashboard.teachers.index');




    }



    public function messages(){

        return [


            "name.required"=> "teacher name is required",
            "name.max"=> "teacher name less than 50 letters",
            "title.required"=> "teacher title is required",
            "title.max"=> "teacher title less than 50 letters",
            "facebook.required"=> "facebook is required",
            "twitter.required"=> "twitter is required",
            "instagram.required"=> "instagram title is required",
             'image.required'=>'choose image',
             'image.mimes'=>'image extension must be png,jpg or jpeg ',
             'image.max'=>'image max size 2GB',

        ];
    }
}
