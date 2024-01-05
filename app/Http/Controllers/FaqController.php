<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use App\Models\FaqType;
use Illuminate\Http\Request;

class FaqController extends Controller
{
    public function index(){
        $faqs = Faq::all();
        // return $faq_type;
        return view('admin.faq_management.index', get_defined_vars());
    }



    public  function add_new_faq(request $request)
    {
        $faq_type = FaqType::where('status',1)->get();
        return view('admin.faq_management.add_faq',get_defined_vars());
    }

    public function store_faq(Request $request)
    {

    //    dd($request->all());
        $request->validate([
            'answer' => 'required',
            'question' => 'required',
            'faq_type_id' => 'required',
        ]);


        $location_store = new Faq();
        $location_store->faq_type_id      = $request->faq_type_id;
        $location_store->question      = $request->question;
        $location_store->answer       = $request->answer;
        $location_store->save();


        return back()->with('success', 'You have successfully added a Question.');
    }



    public function edit_faq($id)
    {
        $faq_type = FaqType::where('status',1)->get();
        $faq = Faq::find($id);
        if(empty($faq)){
            return view('404');
        }
        return view('admin.faq_management.edit_faq', get_defined_vars());


    }

    public function faq_update(Request $request, $id)
    {
        // dd($request->all());

        $request->validate([
            'answer' => 'required',
            'question' => 'required',
            'faq_type_id' => 'required',
        ]);



        $faq_update = Faq::find($id);
        $faq_update->faq_type_id      = $request->faq_type_id;
        $faq_update->question    = $request->question;
        $faq_update->answer       = $request->answer;
        $faq_update->save();

        return back()->with('update_faq', 'You have successfully updated a Question.');
    }



    public function faq_delete($id)
    {

        $delete = Faq::find($id);
        $delete->delete();

        return back()->with('deleted_faq', "Question has been deleted successfully..!!");
    }




    public function faq_status(Request $request, $id)
    {
        $package = Faq::find($id);
        $newStatus = ($package->status == 0) ? 1 : 0;
        $package->update([
            'status' => $newStatus
        ]);
        return back()->with('faq_status', 'Successfully status have been changed!');
    }
}
