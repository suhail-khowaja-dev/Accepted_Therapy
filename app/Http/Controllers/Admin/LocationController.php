<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Location;
use App\Models\TeamManagement;
use App\Models\TeamManagement_Location;

class LocationController extends Controller
{
    //

    public function index()
    {
        $locations = Location::all();
        return view('admin.locations.index', compact('locations'));
    }

    public  function add_location(request $request)
    {
        $therapists = TeamManagement::where('status',1)->get();

        return view('admin.locations.add_location',compact('therapists'));
    }

    public function store_location(Request $request)
    {


        $request->validate([
            'embed_map_link' => 'required',
            'country' => 'required',
            'state' => 'required',
            'city' => 'required',
            'address' => 'required',
            'contact' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
        ]);



        $location_store = new Location();

        $location_store->contact      = $request->contact;
        $location_store->address       = $request->address;
        $location_store->city            = $request->city;
        $location_store->state     = $request->state;
        $location_store->country     = $request->country;
        $location_store->embed_map_link             = $request->embed_map_link;

        $imageName = time() . '.' . $request->image->extension();
        $request->image->move('uploads/locations/', $imageName);

        $location_store->image   = $imageName;
        $location_store->status   = 0;

        $location_store->save();


        // team and locations add in bridge table
        if(!empty($request->teamManagementLocation)){

            foreach($request->teamManagementLocation as $teamLocation){
                $add_temManagementLocation = new TeamManagement_Location();
                $latest_location = Location::orderBy('id','desc')->first();
                $add_temManagementLocation->team_management_id = $teamLocation;
                $add_temManagementLocation->location_id	 = $latest_location->id;
                $add_temManagementLocation->save();
            }

        }



        return back()->with('success', 'You have successfully added a Location.');
    }


    public function location_status($id)
    {
        $User = Location::where('id', $id)->first();
        $newStatus = ($User->status == 0) ? 1 : 0;
        $User->update([
            'status' => $newStatus
        ]);

        return back()->with('status', 'Successfully location status have been changed');
    }


    public function edit_location($id)
    {

        $therapists = TeamManagement::where('status',1)->get();
        $location = Location::where('id',$id)->first();
        if(empty($location)){
            return view('404');
        }
        $TeamManagementLocations = TeamManagement_Location::where('location_id',$id)->get();

        return view('admin.locations.edit_location',compact('location','therapists','TeamManagementLocations'));


    }

    public function update_location(Request $request, $id)
    {

        $request->validate([
            'embed_map_link' => 'required',
            'country' => 'required',
            'state' => 'required',
            'city' => 'required',
            'address' => 'required',
            'contact' => 'required',
        ]);


        $location_update = Location::find($id);

        $location_update->contact      = $request->contact;
        $location_update->address       = $request->address;
        $location_update->city            = $request->city;
        $location_update->state     = $request->state;
        $location_update->country     = $request->country;
        $location_update->embed_map_link             = $request->embed_map_link;


        // if image for update
        if(($location_update->image != $request->image) && $request->image != null){
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move('uploads/locations/', $imageName);
            $location_update->image   = $imageName;

        }

        $location_update->save();


        // team and locations add in bridge table
        if(!empty($request->teamManagementLocation)){
            $delete_locations = TeamManagement_Location::where('location_id',$id)->delete();
            // return $delete_locations;


            foreach($request->teamManagementLocation as $teamLocation){
                $add_temManagementLocation = new TeamManagement_Location();
                $add_temManagementLocation->team_management_id = $teamLocation;
                $add_temManagementLocation->location_id	 = $id;
                $add_temManagementLocation->save();
            }

        }


        return back()->with('success', 'You have successfully added a Location.');
    }



    public function location_delete($id)
    {

        $delete = Location::find($id);
        $delete->delete();

        return back()->with('deleted_location', "Successfully location deleted");
    }



}
