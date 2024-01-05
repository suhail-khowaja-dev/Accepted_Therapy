<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact_inquiry_model;
class ContactController extends Controller
{
    public function contact_views(){
        $contact_details= Contact_inquiry_model::orderBy('id','Desc')->get();
         return view('admin.inquiry',compact('contact_details'));
      }

    public function contactDetails($id){
        $contact_details = Contact_inquiry_model::where('id',$id)->first();
        if(empty($contact_details)){
            return view('404');
        }
        return view('admin.contact_inquiry_details',compact('contact_details'));
    }
    public function contactDelete($id){
        $contact_delete = Contact_inquiry_model::find($id);
        $contact_delete->delete();
        return redirect()->back()->with('delete','Contact Deleted Successfully');
    }


    public function delete_quries(Request $request)
  {

    Contact_inquiry_model::whereIn('id', $request->ids)->delete();
    return response()->json(['status' => 'success']);
   
  }
}
