<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserLink;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class AgencyManagementController extends Controller
{
    public function index(){
        $users = User::where('role',2)->get();

        return view('admin.agency_management.index', get_defined_vars());
    }


    public function agency_user_status(Request $request, $id)
    {

        $user = User::where('id',$id)->first();
        $newStatus = ($user->status == 0) ? 1 : 0;
        $user->update([
            'status' => $newStatus
        ]);

        if($newStatus == 1){
        $email = $user->email;
        Mail::send('admin.email_templates.account_approve', ['data'=> true, 'user'=>$email, 'new_data'=>$user], function ($messages) use ($email) {
                $messages->to($email);
                $messages->subject('Account Approved');
            });
        }

        return back()->with('agency_user_status', 'Successfully status have been changed!');
    }

    public function show_details($user_id){
        $user = User::where('id',$user_id)->with('package')->first();
        if(empty($user)){
            return view('404');
        }

        return view('admin.agency_management.edit_user', get_defined_vars());
    }

    public function agency_user_delete(Request $request,$user_id)
    {
        $delete = User::find($user_id);
        $delete->delete();

        return back()->with('agency_user_delete', 'Agency Client has been Deleted suceessfuly!');
    }



    public function agency_links_show(Request $request, $id){

        $user_links = UserLink::where('user_id',$id)->with('get_user')->get();
        if(empty($user_links)){
            return view('404');
        }
        return view('admin.agency_management.agency_link', get_defined_vars());


    }
}
