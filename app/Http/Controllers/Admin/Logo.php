<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Center_section;
use DB;
class Logo extends Controller
{
    //
 public function site_logo(){

    $Center_section = Center_section::first();
    $feature = DB::table('center_sections')->first();
    session()->put('fabvicon',$feature->feature_image);
    session()->put('header',$feature->header);
    session()->put('footer',$feature->footer);
    return view('admin.logo',compact('Center_section'));
}


 public function logo_update(request $request){


   $request->validate([
            'logo' => 'image|mimes:jpeg,png,jpg|max:2048',
        ]);
$request->validate([
            'footer' => 'image|mimes:jpeg,png,jpg|max:2048',
        ]);
$request->validate([
            'feature' => 'image|mimes:jpeg,png,jpg|max:2048',
        ]);




   $Center_section = Center_section::first();



     if($request->hasfile('feature')){
    $file = $request->file('feature');
    $extension = $file->getClientOriginalExtension();
    $filename = uniqid(). ".".$extension;
    $file->move('uploads/feature/',$filename);
    $Center_section->feature_image=$filename;
    session()->put('fabvicon',$filename);



}

if($request->hasfile('logo')){

    $file = $request->file('logo');
    $extension = $file->getClientOriginalExtension();
    $filename_header = uniqid(). ".".$extension;
    $file->move('uploads/logo/',$filename_header);
    $Center_section->header=$filename_header;
    session()->put('header',$filename_header);
}
if($request->hasfile('footer')){
    $file = $request->file('footer');
    $extension = $file->getClientOriginalExtension();
    $filename_footer = uniqid(). ".".$extension;
    $file->move('uploads/footer/',$filename_footer);
    $Center_section->footer=$filename_footer;
session()->put('footer',$filename_footer);
}


     $Center_section->save();

    return back()->with('article_update',"Successfully logo updated");
}

}
