<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RoleManagementController extends Controller
{

    public function index()
    {
        $role_managements = User::where('role',3)->get();
        return view('admin.role_management.index', get_defined_vars());
    }

    public function add_role()
    {
        return view('admin.role_management.add_role');
    }


    public function store_new_role(Request $request)
    {
        $request->validate([
            'password_confirm' => 'required|same:password',
            'password' => 'required',
            'email' => 'required|unique:users',
            'name' => 'required',
        ]);

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        // assistant
        $user->role = 3;
        $user->status = 1;
        
        if($user->save()){
            return redirect()->route('role_management')->with('success', 'You have successfully added new role.');
        }else{
            return redirect()->route('role_management')->with('success', 'Sorry, something went wrong!.');
        }
        


    }
    
    
    public function edit_role(Request $request, $id)
    {
        
        $user = User::find($id);
        return view('admin.role_management.edit_role', get_defined_vars());

    }
  
  
    public function update_role(Request $request, $id)
    {
        $request->validate([
            'password_confirm' => 'required|same:password',
            'password' => 'required',
            'email' => 'required|unique:users',
            'name' => 'required',
        ]);

        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        // assistant
        $user->role = 3;
        $user->status = 1;
        
        if($user->save()){
            return redirect()->route('role_management')->with('success', 'You have successfully update role.');
        }else{
            return redirect()->route('role_management')->with('success', 'Sorry, something went wrong!.');
        }
        


    }



    public function role_status($id)
    {
        $User = User::where('id', $id)->first();
        $newStatus = ($User->status == 0) ? 1 : 0;
        $User->update([
            'status' => $newStatus
        ]);
        return back()->with('user_status', 'Successfully status have been changed');
    }

    public function role_delete($id)
    {
        $delete = User::find($id);
        $delete->delete();

        return back()->with('team_member_deleted', 'Role Deleted suceessfuly!');
    }
}
