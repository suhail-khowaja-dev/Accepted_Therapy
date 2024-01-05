<?php

namespace App\Http\Controllers\Admin;

use DB;
use Hash;
use Session;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
class Login extends Controller
{
    //
  public function admin_login(){
    if(Auth::check() && (Auth::user()->role == 1 || Auth::user()->role == 3)){
      return redirect('/logo');
    }
    return view('admin.login_form');
}

public function login_submit(request $request){
  $credentials = $request->only('email', 'password');
  if (Auth::attempt($credentials)) {
    $User =User::where('email', $request->email)->first();
    if($User->role==1 || $User->role==3){
      $request->session()->put('user',$User->name);
      
      $request->session()->put('id',$User->id);
      $request->session()->put('role_admin',$User->role);
      $user = User::find($User->id);
      
      Auth::login($user);
      
      return redirect('/logo');
      
                  }
                 else{
                  return back()->with("error","Invalid email or password");
                    }
                    }
                return back()->with("error","Invalid email or password");
}

public function logout(){
   Auth::logout();
return redirect('/adminpanel');

}


}

