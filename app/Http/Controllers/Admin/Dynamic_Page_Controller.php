<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Dynamic_page;
use App\Models\Center_section;
use App\Models\User;
use App\Models\Content;
use App\Models\Configuration;
use App\Models\Banner;
use App\Models\Article_moldel;
use DB;
use Session;
use Carbon\Carbon;
use Mail;
use Artisan;
use App\Models\Subscription;
use App\Models\Testimonial;
use Hash;
use App\Models\Packages;
use App\Models\Dynamic_layout_content;
use Illuminate\Support\Str;
class Dynamic_Page_Controller extends Controller
{
    //
    public function dynamic_page(){


    	return view('admin.dynamic_page');
    }
    public function dynamic_page_add(Request $request){
	   // $this->validate($request, [
    //         'page_name'   => 'required|page_name|unique:dynamic_pages'  
    //     ]);
        $name_slug=Dynamic_page::where('slug',Str::slug($request->page_name,'-'))->where('type',$request->type)->exists();
        if($name_slug){
            return back()->with('message_error','In this same name Service  is already Exist');
        }
        $dynamic_page_add = new Dynamic_page();
        $dynamic_page_add->page_name=$request->page_name;
        $dynamic_page_add->slug=Str::slug($request->page_name,'-');
        if($request->hasfile('image')){
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename_header = uniqid(). ".".$extension;
            $file->move('uploads/types_services/',$filename_header);
            $dynamic_page_add->image=$filename_header;
        }
        if($request->hasfile('header_image')){
        $file = $request->file('header_image');
        $extension = $file->getClientOriginalExtension();
        $filename_header = uniqid(). ".".$extension;
        $file->move('uploads/types_services/',$filename_header);
        $dynamic_page_add->header_image=$filename_header;
    }
    if($request->hasfile('home_image')){
        $file = $request->file('home_image');
        $extension = $file->getClientOriginalExtension();
        $filename_header = uniqid(). ".".$extension;
        $file->move('uploads/types_services/',$filename_header);
        $dynamic_page_add->home_image=$filename_header;
    }
        $dynamic_page_add->descriptions=$request->descriptions;
        $dynamic_page_add->type=$request->type;
        $dynamic_page_add->save();
        return redirect('/services_details')->with('save','data');
    }

    public function layout_page(){
       $feature = DB::table('center_sections')->first();
       return view('web.dynamic_page',compact('feature'));

   }

   public function page_add(){
    // $dynamic_edit_layout=Dynamic_page::findorfail($id);
    // return view('admin.dynamic_page_edit_view',compact('dynamic_edit_layout'));
    return view('admin.page_add');
}
public function dynamic_page_list($id=""){   
    $url= url()->current();              
           // $dynamic_layout_id=substr($url, -1);

            // $dynamic_layout_id= $_GET['id'];
    $slug_fetch=request()->path();



    $slug=Dynamic_page::where('slug', $slug_fetch)->first();
    $dynamic_layout_id= $slug->layout_id;
    preg_replace('/[^0-9.]+/', '', $id);

    $feature = DB::table('center_sections')->first();

    return view('web.dynamic_page',compact('feature','dynamic_layout_id','slug'));
}

public function page_list_edit(){
    $page_list= Dynamic_layout_content::orderBy('id', 'DESC')->get();
    return view('admin.page_list_edit',compact('page_list'));
}

public function page_edit($id){
    $dynamic_layout_content=Dynamic_layout_content::findorfail($id);
    return view('admin.page_edit',compact('dynamic_layout_content'));
}


public function page_list_status(){ 
//services_details
    $page_list= Dynamic_page::orderBy('id', 'DESC')->get();
    return view('admin.page_status_list',compact('page_list'));
}

public function dynamic_page_edit($id){
    $dynamic_edit_layout=Dynamic_page::findorfail($id);
    return view('admin.dynamic_page_edit_view',compact('dynamic_edit_layout'));
}
public function dynamic_page_edit_confirm(Request $request,$id){

 $name_slug=Dynamic_page::where('slug',Str::slug($request->page_name,'-'))->where('type',$request->type)->first();
 $dynamic_page_add=Dynamic_page::findorfail($id);
        if($request->seo_title && $request->seo_keyword){
           
            $dynamic_page_add->seo_title = $request->seo_title;
            $dynamic_page_add->seo_keyword = $request->seo_keyword;
            $dynamic_page_add->seo_descriptions = $request->seo_descriptions;
            $dynamic_page_add->save();
             return back()->with('dynamic_layout_updated','Successfully Service status have been changed');
            }
 
        if($name_slug){
            if($name_slug->slug!=Str::slug($request->page_name,'-')){
            return back()->with('message_error','In this same name Service  is already Exist');
        }
}
   
    $dynamic_page_add->page_name=$request->page_name;
    $dynamic_page_add->slug=Str::slug($request->page_name,'-');
    if($request->hasfile('image')){
        $file = $request->file('image');
        $extension = $file->getClientOriginalExtension();
        $filename_header = uniqid(). ".".$extension;
        $file->move('uploads/types_services/',$filename_header);
        $dynamic_page_add->image=$filename_header;
    }
     if($request->hasfile('header_image')){
        $file = $request->file('header_image');
        $extension = $file->getClientOriginalExtension();
        $filename_header = uniqid(). ".".$extension;
        $file->move('uploads/types_services/',$filename_header);
        $dynamic_page_add->header_image=$filename_header;
    }
    if($request->hasfile('home_image')){
        $file = $request->file('home_image');
        $extension = $file->getClientOriginalExtension();
        $filename_header = uniqid(). ".".$extension;
        $file->move('uploads/types_services/',$filename_header);
        $dynamic_page_add->home_image=$filename_header;
    }
    
    $dynamic_page_add->descriptions=$request->descriptions;
    $dynamic_page_add->short_descriptions=$request->short_descriptions;
    $dynamic_page_add->second_descriptions=$request->second_descriptions;
    $dynamic_page_add->type=$request->type;
    $dynamic_page_add->save();



    return back()->with('dynamic_layout_updated','Successfully Service status have been changed');
}
public function dynamic_page_delete($id){

   $delete = Dynamic_page::find($id);
   $delete->delete();
   return back()->with('dynamic_layout_delete','Successfully Service status have been changed');
}

public function dynamic_page_status($id){
    $User = Dynamic_page::where('id', $id)->first();
    $newStatus = ($User->status == 0 ) ? 1 : 0;
    $User->update([
        'status' => $newStatus
    ]);
    return back()->with('dynamic_layout_status','Successfully Service status have been changed');
} 

}
