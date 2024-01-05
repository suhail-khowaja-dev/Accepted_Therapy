<?php

namespace App\Http\Controllers\Admin;

use App\Models\Speciality;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\TeamManagement;
use App\Models\TeamSpeciality;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\Location;
use Validator;
use Illuminate\Foundation\Validation\ValidatesRequests;

class TeamManagementController extends Controller
{
    public function index()
    {
        $teams = TeamManagement::with('therapist_specialities')->get();
        return view('admin.team_management.index', compact('teams'));
    }

    public function add_team_member()
    {
        $specialities = Speciality::where('status',1)->get();
        $locations = Location::where('status',1)->get();
        return view('admin.team_management.add_team_member',compact('specialities','locations'));
    }

    public function store_team_member(Request $request)
    {


        $request->validate([
            'quote' => 'required',
            'education' => 'required',
            'bio' => 'required',
            'description' => 'required',
            'email' => 'required|unique:team_management',
            'last_name' => 'required',
            'first_name' => 'required',
            'profile_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:980',
        ]);

        // slug check if exist return back with slug message exist
        $team_member_store = TeamManagement::where('slug',Str::slug($request->first_name." ".$request->last_name))->first();
        if(!empty($team_member_store)){
            return back()->with('slug','Slug is already exist, Please do little change with your first and last name');
        }

        $team_member_store = new TeamManagement;

        $team_member_store->first_name      = $request->first_name;
        $team_member_store->last_name       = $request->last_name;
        $team_member_store->email           = $request->email;
        $team_member_store->slug            = Str::slug($request->first_name." ".$request->last_name);
        $team_member_store->description     = $request->description;
        $team_member_store->bio             = $request->bio;
        $team_member_store->education       = $request->education;

        $team_member_store->quote           = $request->quote;
        // $team_member_store->location           = $request->location;

        $imageName = time() . '.' . $request->profile_image->extension();
        $request->profile_image->move('uploads/team_member/', $imageName);

        $team_member_store->profile_image   = $imageName;

        $team_member_store->save();



        // speciality adding againt therapist
        $therapist = TeamManagement::latest()->first();
        if(!empty($request->specialities)){

            foreach($request->specialities as $specialiy_add){
                $team_speciality_store = new TeamSpeciality;
                $specialities_get = Speciality::find($specialiy_add);

                $team_speciality_store->team_management_id  = $therapist->id;
                $team_speciality_store->speciality_title = $specialities_get->speciality_title;
                $team_speciality_store->description = $specialities_get->description;
                $team_speciality_store->save();
            }

        }



        return back()->with('success', 'You have successfully added a Therapist.');
    }

    public function edit_team_member(Request $request, $id)
    {
        $locations = Location::where('status',1)->get();
        $team_member = TeamManagement::where('id',$id)->with('therapist_specialities')->first();
        if(empty($team_member)){
            return view('404');
        }
        $specialities = Speciality::where('status',1)->get();

        return view('admin.team_management.edit_team_member',compact('team_member','specialities','locations'));
    }

    public function update_team_member(Request $request, $id)
    {
        // return $request->all();

        $request->validate([
            'quote' => 'required',
            'education' => 'required',
            'bio' => 'required',
            'description' => 'required',
            'email' => 'required',
            'last_name' => 'required',
            'first_name' => 'required',
            'profile_image' => 'image|mimes:jpeg,png,jpg,gif,svg',
        ]);


        // slug check if exist return back with slug message exist
        $team_member_store = TeamManagement::where('id','!=',$id)->where('slug',Str::slug($request->first_name." ".$request->last_name))->first();
        if(!empty($team_member_store)){
            return back()->with('slug','Slug is already exist, Please do little change with your first and last name');
        }

        $team_member_update = TeamManagement::find($id);

        $team_member_update->first_name      = $request->first_name;
        $team_member_update->last_name       = $request->last_name;
        $team_member_update->email           = $request->email;
        $team_member_update->location        = $request->location;
        $team_member_update->slug            = Str::slug($request->first_name." ".$request->last_name);
        $team_member_update->description     = $request->description;
        $team_member_update->bio             = $request->bio;
        $team_member_update->education       = $request->education;
        $team_member_update->speciality       = empty($request->specialities) ? null : json_encode($request->specialities);
        $team_member_update->quote           = $request->quote;
        // $team_member_update->location           = $request->location;

        // if image for update
        if(($team_member_update->profile_image != $request->profile_image) && $request->profile_image != null){
            $imageName = time() . '.' . $request->profile_image->extension();
            $request->profile_image->move('uploads/team_member/', $imageName);
            $team_member_update->profile_image   = $imageName;

        }
        $team_member_update->update();




        // speciality delete first againt therapist
        $delete_therapist_specialities = TeamSpeciality::where('team_management_id',$id)->get();
        if(!empty($delete_therapist_specialities)){

            foreach($delete_therapist_specialities as $specialiy_delete){
                $team_speciality_delete = TeamSpeciality::where('team_management_id',$id);
                $team_speciality_delete->delete();
            }

        }

        // then speciality update finaly againt therapist
        if(!empty($request->specialities)){

            foreach($request->specialities as $specialiy_update){
                $team_speciality_store = new TeamSpeciality;
                $specialities_update = Speciality::find($specialiy_update);

                $team_speciality_store->team_management_id  = $id;
                $team_speciality_store->speciality_title = $specialities_update->speciality_title;
                $team_speciality_store->description = $specialities_update->description;
                $team_speciality_store->save();
            }

        }



        return redirect()->route('team_management')->with('success', 'You have successfully Updated a Therapist.');

    }


    public function team_member_status($id)
    {
        $User = TeamManagement::where('id', $id)->first();
        $newStatus = ($User->status == 0) ? 1 : 0;
        $User->update([
            'status' => $newStatus
        ]);
        return back()->with('team_management_status', 'Successfully Team Management status have been changed');
    }

    public function team_member_delete($id)
    {
        $delete = TeamManagement::find($id);
        $delete->delete();

        return back()->with('team_member_deleted', 'User Deleted suceessfuly!');
    }
}
