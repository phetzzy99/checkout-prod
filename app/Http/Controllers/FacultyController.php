<?php

namespace App\Http\Controllers;

use App\Models\Faculty;
use Carbon\Carbon;
use Illuminate\Http\Request;

class FacultyController extends Controller
{
    public function FacultyView(){
        $faculty = Faculty::latest()->get();
        return view('backend.faculty.faculty_view',compact('faculty'));
    } // end method

    public function FacultyStore(Request $request){

        $request->validate([
            'faculty_name_th' => 'required|unique:faculties',
        ],
        [
            'faculty_name_th.required' => 'Please Input Faculty Name',
            'faculty_name_th.unique' => 'Faculty Name Duplication',
        ]);

        Faculty::insert([
            'faculty_name_th' => $request->faculty_name_th,
            'created_at' => Carbon::now()
        ]);

        $notification = array(
            'message' => 'Faculty Inserted Successfuly',
            'alert-type' => 'success',
        );

        return redirect()->back()->with($notification);
    } //end method


    public function FacultyEdit($id){
        $faculty = Faculty::findOrFail($id);
        return view('backend.faculty.faculty_edit',compact('faculty'));

    } //end method


    public function FacultyUpdate(Request $request){
        $fac_id = $request->id;

        $request->validate([
            'faculty_name_th' => 'required',
        ],
        [
            'faculty_name_th.required' => 'Please Input Faculty Name',
        ]);

        Faculty::findOrFail($fac_id)->update([
            'faculty_name_th' => $request->faculty_name_th,
        ]);

        $notification = array(
            'message' => 'Faculty Updated Successfuly',
            'alert-type' => 'success',
        );

        return redirect()->route('all.faculty')->with($notification);

    } //end method


    public function FacultyDelete($id){

        Faculty::findOrfail($id)->delete();

        $notification = array(
            'message' => 'Faculty Delete Successfuly',
            'alert-type' => 'success',
        );

        return redirect()->back()->with($notification);

    } //end method

}
