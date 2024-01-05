<?php
  
 use App\Models\Center_section; 
 use App\Models\Configuration; 
 use App\Models\Dynamic_page;
 use App\Models\Content;
function logo_management(){
    // return \Carbon\Carbon::createFromFormat('Y-m-d', $date)->format($date_format);   
 return  Center_section::first();
  
}

function configuration_management(){
    // return \Carbon\Carbon::createFromFormat('Y-m-d', $date)->format($date_format);   
 return  Configuration::first();
  
}


function logistics_warehouse(){

return  $service_warehouse=Dynamic_page::where('status', '!=' , 0)->where('type', '=' , 1)->orderBy('id', 'ASC')->get();
}


function service_delivery(){

return $service_delivery=Dynamic_page::where('status', '!=' , 0)->where('type', '=' , 2)->orderBy('id', 'ASC')->get();
}

function request_path(){

	$request_path=Dynamic_page::where('status', '!=' , 0)->where('slug',request()->path())->first();
if($request_path){
	return $request_path;
}else{
	if(request()->path()=='/'){
	return	Content::find(1);

	}elseif (request()->path()=='warehouse') {
		return	Content::find(8);
	}elseif (request()->path()=='delivery') {
		return	Content::find(9);
	}


}

}