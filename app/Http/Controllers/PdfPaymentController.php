<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use App\Models\PackageSubscriber;
use Illuminate\Support\Facades\Mail;
use App\Models\Package;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules\Password;

class PdfPaymentController extends Controller
{
    public function index(Request $request)
    {
        return view("pdf_payment");
    }

    public function sign_up_form_pdf(Request $request){
            // return 'working';
        $validator = Validator::make($request->all(), [
            'password' =>  ['required', Password::min(8)->mixedCase()->numbers()->symbols()],
            'email' => 'required|email|unique:users',
            'name' => 'required',
        ]);


        if ($validator->fails()) {
            return response()->json(
                ['status' => 400, 'errors' => $validator->errors()->toArray()]
            );
        }else{
            $validated = $validator->validated();
            $validated['password'] = $request->password;
            $validated['role'] = '2';
            // $validated['status'] = '0';


            session()->put('user_signup',$validated);

            // $user = User::create($validated);


            // $email = $request->email;

            // Mail::send('email_templates.sign_up', ['user'=>$email], function ($messages) use ($email) {
            //     $messages->to($email);
            //     $messages->subject('Customer Contact');
            // });

            // return response()->json(['status' => 200,'message' => 'Your account has been pending, Please buy plan and active your account.']);

            return response()->json(['status' => 200]);

        }
    }

    public function amount_store_pdf(Request $request)
    {

        $expire_link = null;
        if (session()->get('selected_package_pdf')['id'] == 1) {
            $expire_link = 1;
        }
        if (session()->get('selected_package_pdf')['id'] == 2) {
            $expire_link = 4;
        }
        if (session()->get('selected_package_pdf')['id'] == 3) {
            $expire_link = 4;
        }


        $user_data = session()->get('user_signup');
        $user_data['password'] = Hash::make(session()->get('user_signup')['password']);
        $user_data['actual_password'] = session()->get('user_signup')['password'];
        $user_data['role'] = 3;
        $user_data['link_expire_count'] = $expire_link;
        $user_data['status'] = 1;
        $user = User::create($user_data);


        $packageSubscriber = new PackageSubscriber();
        $packageSubscriber->user_id = $user->id;
        $packageSubscriber->package_id = session()->get('selected_package_pdf')['id'];
        $packageSubscriber->package_title = session()->get('selected_package_pdf')['package_title'];
        $packageSubscriber->paypal_response = json_encode($request->all());
        $packageSubscriber->save();


        if ($user) {

            $email = $user_data['email'];

            Mail::send('email_templates.sign_up', ['data',true,'user' => $email], function ($messages) use ($email) {
                $messages->to($email);
                $messages->subject('Registration');
            });

            session()->forget(['user_signup', 'selected_package_pdf']);

            return response()->json([
                'status' => 200
            ]);
        } else {

            return response()->json([
                'status' => 400
            ]);
        }

        return redirect()->route('home')->with('pdf','You have Successfully Purchased a Plan for Pdf Download');
    }

    public function create_package_pdf(Request $request,$id)
    {


        if($id == 5){
            $package = [];
            $package['id'] = 5;
            $package['package_title'] = "One Day";
            $package['package_price'] = "1.50";
            $package['package_listing'] = ["Package Listing 1","Package Listing 2",null,null,null,null,null,null,null,null];

        }else{
            $package = Package::find($id);
        }

        session()->put('selected_package_pdf',$package);

        if(session()->get('selected_package_pdf')){
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

    public function pdf_downloaders(){
        $pdf_downloaders = User::where('role','3')->get();
        return view('admin.pdf_downloaders.index',compact('pdf_downloaders'));
    }

    public function pdf_user_status(Request $request, $id)
    {

        $user = User::where('id',$id)->first();
        $newStatus = ($user->status == 0) ? 1 : 0;
        $user->update([
            'status' => $newStatus
        ]);

        if($newStatus == 1){
        $email = $user->email;
        Mail::send('admin.email_templates.account_approve', ['data'=>true,'user'=>$email, 'new_data'=>$user], function ($messages) use ($email) {
                $messages->to($email);
                $messages->subject('Account Approved');
            });
        }

        return back()->with('agency_user_status', 'Successfully status have been changed!');
    }

    public function pdf_user_delete(Request $request,$id){
        $delete = User::find($id);
        $delete->delete();
        return back()->with('agency_user_delete', 'Pdf Downloader User has been Deleted suceessfuly!');
    }
    public function show_details(Request $request,$id){
            $user = User::where('id',$id)->first();
            return view('admin.pdf_downloaders.downloaders_details',compact('user'));
    }

    public function pdf_downloaders_edit(Request $request,$id){
        $edit = User::where('id',$id)->first();
        return view('admin.pdf_downloaders.edit_user',compact('edit'));
    }
}
