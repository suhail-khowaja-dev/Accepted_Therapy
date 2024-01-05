<?php

namespace App\Http\Controllers;

use App\Models\FaqType;
use Illuminate\Http\Request;

class FaqTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $faqs = FaqType::all();
        return view('admin.faq_type.index', get_defined_vars());
    }



    public  function add_new_faq(request $request)
    {
        return view('admin.faq_type.add_faq');
    }

    public function store_faq(Request $request)
    {


        $request->validate([
            'section_type' => 'required',
        ]);



        $location_store = new FaqType();

        $location_store->section_type      = $request->section_type;
        $location_store->status = 1;
        // $location_store->answer       = $request->answer;
        $location_store->save();


        return back()->with('success', 'You have successfully added a FAQ Type.');
    }



    public function edit_faq($id)
    {

        $faq = FaqType::find($id);
        if(empty($faq)){
            return view('404');
        }
        return view('admin.faq_type.edit_faq', get_defined_vars());


    }

    public function faq_update(Request $request, $id)
    {

        $request->validate([
            'section_type' => 'required',
        ]);



        $faq_update = FaqType::find($id);

        $faq_update->section_type      = $request->section_type;
        $faq_update->save();

        return back()->with('update_faq', 'You have successfully updated a FAQ Type.');
    }



    public function faq_delete($id)
    {

        $delete = FaqType::find($id);
        $delete->delete();

        return back()->with('deleted_faq', "FAQ Type has been deleted successfully..!!");
    }




    public function faq_status(Request $request, $id)
    {
        $package = FaqType::find($id);
        $newStatus = ($package->status == 0) ? 1 : 0;
        $package->update([
            'status' => $newStatus
        ]);
        return back()->with('faq_status', 'Successfully status have been changed!');
    }
}
