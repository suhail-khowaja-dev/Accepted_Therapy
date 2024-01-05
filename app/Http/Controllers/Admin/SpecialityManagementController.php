<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Speciality;
use Illuminate\Http\Request;

class SpecialityManagementController extends Controller
{
    public function index()
    {
        $specialities = Speciality::all();
        return view('admin.speciality_management.index', compact('specialities'));
    }

    public function add_speciality()
    {
        return view('admin.speciality_management.add_speciality');
    }

    public function store_speciality(Request $request)
    {

        $request->validate([
            'description' => 'required',
            'speciality_title' => 'required',
        ]);

        $speciality_store = new Speciality;

        $speciality_store->speciality_title      = $request->speciality_title;
        $speciality_store->description       = $request->description;

        $speciality_store->save();

        return back()->with('success', '1 Row  added successfully.');
    }

    public function edit_speciality(Request $request, $id)
    {
        $speciality = Speciality::find($id);
        if(empty( $speciality)){
            return view('404');
        }
        return view('admin.speciality_management.edit_speciality',compact('speciality'));
    }

    public function update_speciality(Request $request, $id)
    {
        $request->validate([
            'description' => 'required',
            'speciality_title' => 'required',
        ]);

        $speciality_update = Speciality::find($id);

        $speciality_update->speciality_title      = $request->speciality_title;
        $speciality_update->description       = $request->description;




        $speciality_update->update();

        return redirect()->route('speciality_management')->with('success', '1 Row successfully Updated.');

    }


    public function speciality_status($id)
    {
        $speciality = Speciality::where('id', $id)->first();
        $newStatus = ($speciality->status == 0) ? 1 : 0;
        $speciality->update([
            'status' => $newStatus
        ]);
        return back()->with('speciality_management_status', 'Successfully status have been changed');
    }

    public function speciality_delete($id)
    {

        $delete = Speciality::find($id);
        $delete->delete();

        return back()->with('speciality_member_deleted', 'Row Deleted suceessfuly!');
    }
}
