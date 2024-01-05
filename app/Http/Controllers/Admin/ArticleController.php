<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Article_moldel;
class ArticleController extends Controller
{
    //


    public function client_details(){

 // $cms_content=Article_moldel::where('status', '!=' , 0)->get();
         // $cms_content=Article_moldel::where('status', '!=' , 0)->orderBy('id', 'DESC')->get();
         $cms_content=Article_moldel::where('id', '!=' , 0)->orderBy('id', 'DESC')->get();
         $blog_hide=Article_moldel::first();
        return view('admin.article_details',compact('cms_content','blog_hide'));
    }



    public function client_action_delete($id){

 $delete = Article_moldel::find($id);
   $delete->delete();

   return redirect('/client_details')->with('article_update',"Successfully Client deleted");
 //return back()->with('success','Item created successfully!');


    }



public function client_action_edit($id){



$content_detail = Article_moldel::findorfail($id);



    return view('admin.article_edit',compact('content_detail'));


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


public function client_edit_confirm(Request $request,$id){

// return "abc";

 $request->validate([
            'image' => 'image|mimes:jpeg,png,jpg|max:2048',
        ]);


  $article_update = Article_moldel::findorfail($id);
   // $article_update->description=  $request->description;
$article_update->page_name= $request->page_name;
$article_update->title= $request->title;

  if($request->hasfile('image')){

        $file = $request->file('image');
        $extension = $file->getClientOriginalExtension();
        $filename = uniqid(). ".".$extension;
        $file->move('uploads/clients/',$filename);
        $article_update->image=$filename;




//    return back()

}
$article_update->save();

return back()->with('article_update',"Successfully Client have been updated");


}
public  function client_article(){
      return view('admin.add_article');
}


public  function client_add_confirm(request $request){



//   // $contact_update =Configuration::first();
// $article_update->full_name=$request->full_name;
$request->validate([
    'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
]);

    $add_article = new Article_moldel();
    // $add_article->description=$request->description;
    $add_article->title=$request->title;

    if($request->hasfile('image')){

        $file = $request->file('image');
        $extension = $file->getClientOriginalExtension();
        $filename = uniqid(). ".".$extension;
        $file->move('uploads/clients/',$filename);
        $add_article->image=$filename;


    //return view('admin.add_banner');
    }
    $add_article->save();
  return back()->with('article_update','Successfully Client have been Added');




}



public function client_status($id){
$User = Article_moldel::where('id', $id)->first();
     $newStatus = ($User->status == 0 ) ? 1 : 0;
            $User->update([
                'status' => $newStatus
            ]);


return back()->with('article_update','Successfully Client status have been changed');;

}
public function blog_hide($id){

$User = Article_moldel::first();
     $newStatus = ($User->blog_hide == 0 ) ? 1 : 0;
            $User->update([
                'blog_hide' => $newStatus
            ]);


return back()->with('blog_hide','Successfully blog status have been changed');;

}

}
