<?php

namespace App\Http\Controllers;

use App\Models\PatronType;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PatronTypeController extends Controller
{
    public function PatronTypeView(){
        $patron_type = PatronType::latest()->get();
        return view('backend.patron_type.patron_type_view',compact('patron_type'));
    } //end method


    public function PatronTypeStore(Request $request){

        $request->validate([
            'patron_type_name' => 'required|unique:patron_types',
            'type_qty' => 'required|numeric',
        ],[
            'patron_type_name.required' => 'Input Patron Type Name',
            'patron_type_name.unique' => 'Patron Type Name Duplication',
            'type_qty.required' => 'Input Type Qty Name',
            'type_qty.numeric' => 'Input Numeric only',
        ]);

        PatronType::insert([
            'patron_type_name' => $request->patron_type_name,
            'type_qty' => $request->type_qty,
            'created_at' => Carbon::now()
        ]);

        $notification = array(
            'message' => 'Patron Type Inserted Successfully',
            'alert-type' => 'success',
        );

        return redirect()->back()->with($notification);
        
    } //end method


    public function PatronTypeEdit($id){
        
        $patron_type = PatronType::findOrFail($id);
        return view('backend.patron_type.patron_type_edit',compact('patron_type'));

    } //end method
}
