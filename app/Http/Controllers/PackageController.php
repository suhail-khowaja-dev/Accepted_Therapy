<?php

namespace App\Http\Controllers;

use App\Models\Package;
use Illuminate\Http\Request;

class PackageController extends Controller
{
    public function index(){
        $packages = Package::where('status',1)->take(3)->get();
        return view("package", get_defined_vars());
    }


    public function admin_package_index(){

        $packages = Package::all();
        return view("admin.packages.index", get_defined_vars());
    }


    public function package_show($id){
        $package = Package::find($id);
        if(empty($package)){
            return view('404');
        }
        return view("admin.packages.edit_package", get_defined_vars());
    }


    public function package_update(Request $request, $id)
    {
        $package = Package::find($id);

        $package->package_title      = $request->package_title;
        $package->package_price       = $request->package_price;
        $package->package_listing       = json_encode($request->package_listing);

        $package->update();

        return redirect()->route('packages')->with('package_updated', 'Package Updated successfully.');

    }


    public function add_new_package()
    {
        return view("admin.packages.add_new_package");
    }

    public function store_package(Request $request)
    {


        $request->validate([
            'package_title' => 'required',
            'package_price' => 'required',
        ]);



        $package = new Package();

        $package->package_title      = $request->package_title;
        $package->package_price       = $request->package_price;
        $package->package_listing       = json_encode($request->package_listing);
        $package->save();

        return back()->with('package_added', 'You have successfully added a Package Plan.');
    }

    public function package_status(Request $request, $id)
    {
        $package = Package::find($id);
        $newStatus = ($package->status == 0) ? 1 : 0;
        $package->update([
            'status' => $newStatus
        ]);
        return back()->with('package_status', 'Successfully status have been changed!');
    }


    public function package_delete(Request $request,$id)
    {
        $delete = Package::find($id);
        $delete->delete();

        return back()->with('package_delete', 'Package Plan has been Deleted suceessfuly!');
    }


    public function create_package(Request $request,$id)
    {
        if($id == 4){
            $package = [];
            $package['id'] = 4;
            $package['package_title'] = "One Day";
            $package['package_price'] = "1.50";
            $package['package_listing'] = ["Package Listing 1","Package Listing 2",null,null,null,null,null,null,null,null];

        }else{
            $package = Package::find($id);
        }

        session()->put('selected_package',$package);

        if(session()->get('selected_package')){

            return response()->json([
                'status' => 200,
                'package_title' => $package->package_title
            ]);

        }else{

            return response()->json([
                'status' => 400
            ]);

        }

    }




}
