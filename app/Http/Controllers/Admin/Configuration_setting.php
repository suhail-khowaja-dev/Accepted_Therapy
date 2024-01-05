<?php
namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Models\Configuration;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class Configuration_setting extends Controller

{

    public function setting()
    {

        $links =   Configuration::first();

        $feature = DB::table('center_sections')->first();

        return view('admin.setting', compact('links', 'feature'));
    }

    public function setting_update(request $request)
    {

        // dd($request->all());




        $configuration_update = Configuration::first();

        $configuration_update->facebook = $request->facebook;

        // $configuration_update->twitter=$request->twitter;

        $configuration_update->instagram = $request->instagram;

        // $configuration_update->linkdin = $request->linkdin;

        // $configuration_update->tiktok=$request->tiktok;

        $configuration_update->phone_first = $request->phone_first;
        $configuration_update->phone_second = $request->phone_second;

        $configuration_update->address_first = $request->address_first;
        $configuration_update->address_second = $request->address_second;

        // $configuration_update->email = $request->email;
        // $configuration_update->admin_email = $request->admin_email;

        

        $configuration_update->city_first = $request->city_first;
        $configuration_update->city_second = $request->city_second;

        $configuration_update->copy_right = $request->copy_right;
        // $configuration_update->country = $request->country;

        $configuration_update->save();

        return back()->with('configuration', "Successfully setting have been updated");
    }
}
