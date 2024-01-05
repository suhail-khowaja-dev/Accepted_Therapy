<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Content;
use App\Models\Banner;
use DB;
use App\Models\Cms_content;

class Layout extends Controller
{
  //

  public function content()
  {
    $cms_content = Content::all();

    $Cms_content_second = Cms_content::all();
    // return $Cms_content_second;
    return view('admin.cms_content', compact('cms_content', 'Cms_content_second'));
  }



  public function content_edit($content_id)
  {


    $content_detail = Content::findorfail($content_id);
    if(empty($content_detail)){
        return view('404');
    }
    return view('admin.content_edit_form', compact('content_detail'));
  }



  

  public function content_update(request $request, $content_id)
  {

    $request->validate([
      'content' => 'image|mimes:jpeg,png,jpg|max:5048',
    ]);

    $content_update = Content::findorfail($content_id);
    if ($request->seo_title && $request->seo_keyword) {

      $content_update->seo_title = $request->seo_title;
      $content_update->seo_keyword = $request->seo_keyword;
      $content_update->seo_descriptions = $request->seo_descriptions;
      $content_update->save();
      return back()->with('Content_update', 'Content have been updated');
    }

    $texteditor = $request->texteditor;
    // $content_update =Content::findorfail($content_id);
    $content_update->description = $texteditor;
    $content_update->page_name = $request->page_name;
    $content_update->title_second = $request->title_second;
    $content_update->title_third = $request->title_third;
    $content_update->title = $request->title;
    $content_update->building_resume = $request->building_resume;

    if ($request->hasfile('content')) {
      $file = $request->file('content');
      $extension = $file->getClientOriginalExtension();
      $filename = uniqid() . "." . $extension;
      $file->move('uploads/cms/', $filename);
      $content_update->image = $filename;
    }

    $content_update->save();
    return back()->with('Content_update', 'Content have been updated');
  }
}
