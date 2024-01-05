<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Dynamic_page;
class ServiceController extends Controller
{
    //
    public function services_details(Request $request){

		 $ware_house= Dynamic_page::where('slug',request()->path())->first();
		 return view('web.truck',compact('ware_house'));
    	
    }
}
