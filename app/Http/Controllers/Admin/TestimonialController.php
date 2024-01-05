<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Testimonial;
use App\Models\Image;
use App\Models\Configuration;
use Mail;
use App\Mail\QuoteMail;
use Config;
class TestimonialController extends Controller
{
    //


  public function testimonial_details(){

         // $cms_content=Article_moldel::where('status', '!=' , 0)->get();
         // $cms_content=Article_moldel::where('status', '!=' , 0)->orderBy('id', 'DESC')->get();
   $cms_content=Testimonial::orderBy('id', 'DESC')->get();
   return view('admin.testimonial',compact('cms_content'));

 }



 public function testimonial_action_delete($id){
  $delete = Testimonial::find($id);
  $delete->delete();
  return redirect('/testimonial_details')->with('testimonial_update',"Successfully article deleted");
 //return back()->with('success','Item created successfully!');


}



public function testimonial_action_edit($id){

  $content_detail = Testimonial::findorfail($id);
  return view('admin.testimonial_edit',compact('content_detail'));


// $article_update = Article_moldel::findorfail($id);

//   // $contact_update =Configuration::first();
// $article_update->full_name=$request->full_name;
// $article_update->phone_number=$request->phone_number;
// $article_update->email=$request->email;
// $article_update->subject=$request->subject;
// $article_update->discription=$request->discription;

// $article_update->save();
// //return back('contact_details')->with('contact_update',"Contact updated");


//    return back();



}


public function testimonial_edit_confirm(Request $request,$id){

// return "abc";

 $request->validate([
  'image' => 'image|mimes:jpeg,png,jpg|max:2048',
  'email' => 'required|email:rfc,dns|unique:testimonials|max:255',
]);
 $article_update = Testimonial::findorfail($id);
 $article_update->description=  $request->description;
 $article_update->page_name= $request->page_name;
 $article_update->title= $request->title;
 $article_update->description= $request->description;
 if($request->hasfile('image')){
  $file = $request->file('image');
  $extension = $file->getClientOriginalExtension();
  $filename = uniqid(). ".".$extension;
  $file->move('uploads/testimonial/',$filename);
  $article_update->image=$filename;
//    return back();
}
$article_update->save();
return back()->with('message_success',"Successfully Testimonial have been updated");
}
public  function add_testimonial(){
  return view('admin.add_testimonial');
}


public  function testimonial_add_confirm(request $request){


//   // $contact_update =Configuration::first();
// $article_update->full_name=$request->full_name;
  
  $request->validate([
        'name' => 'required',
        'company_name' => 'required',
        'email' => 'required',
        'phone' => 'required|min:13|max:13',
        'services' => 'required',
        'vehicle' => 'required',
        'description' => 'required',
        // 'image' => 'required',
         'image.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
  ]);

  $add_article = new Testimonial();
  $add_article->description=$request->description;
  $add_article->name=$request->name;
  $add_article->company_name=$request->company_name;
  $add_article->email=$request->email;
  $add_article->phone=$request->phone;
  $add_article->services=json_encode($request->services);
  $add_article->vehicles=json_encode($request->vehicle);
  $add_article->save();
if($request->hasFile('image'))
{
foreach ($request->image as $photo) {
$filename = $photo->store('image');
Image::create([
'quote_id' => $add_article->id,
'name' => $filename,
]);
}
}
$cms_content_detail=Testimonial::where('id', $add_article->id)->first();
$configuration = Configuration::first();

Config::set('mail.from.address', $configuration->email);

Mail::to($request->email)->send(new QuoteMail($cms_content_detail));
Mail::to($configuration->admin_email)->send(new QuoteMail($cms_content_detail));
  return back()->with('message_success','Inquiry successfully submitted, we will contact you shortly!');
}

public function testimonial_action($id){
 $User = Testimonial::where('id', $id)->first();
 $newStatus = ($User->status == 0 ) ? 1 : 0;
 $User->update([
  'status' => $newStatus
]);
 return back()->with('article_update','Successfully Testimonial status have been changed');

} 



}
