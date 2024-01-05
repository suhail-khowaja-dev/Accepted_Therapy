<?php

namespace App\Http\Controllers;

use App\Models\PackageSubscriber;
use App\Models\Pdf;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class PdfController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pdf = Pdf::get();
        return view('admin.pdf_management.index',compact('pdf'));
    }

    public function pdf_update (Request $request){
        $pdf = new Pdf();
        if($file = $request->file("pdf")) {
            $fileName = date("Y-m-d") . '__' . time() . "__" . $file->getClientOriginalName();
            $file->move(public_path('uploads/cms/'), $fileName);
            $pdf->pdf = $fileName;
        }
        $pdf->save();
        return back()->with('pdf','Pdf Update Successfully');
    }

        public function edit($id){
            $pdf = Pdf::find($id);
            return view('admin.pdf_management.edit_pdf',compact('pdf'));
        }
        public function update(Request $request,$id){
            $pdf  = Pdf::where('id',$id)->first();
            if($file = $request->file("pdf")) {
                $fileName = date("Y-m-d") . '__' . time() . "__" . $file->getClientOriginalName();
                $file->move(public_path('uploads/cms/'), $fileName);
                $pdf->pdf = $fileName;
            }
            $pdf->save();
            return redirect()->route('pdf_upload_index')->with('updated','Pdf Updated Successfully');
        }

        public function pdf_delete(Request $request,$id){
            $pdf = Pdf::find($id);
            $pdf->delete();
            return back()->with('delete',"Pdf Deleted Successfully");
        }


        public function update_user_profile(Request $request ,$id){
            $this->validate($request,[
                'password' => 'same:confirm_password',
              ]);
            $user = User::where('id',$id)->first();
            $user->name = $request->name;
            $user->email = $request->email;
            $user->city = $request->city;
            $user->address = $request->address;
            $user->state = $request->state;
            $user->zip = $request->zip;
            $user->country = $request->country;

            if($request->has('profile_image')){
                $imageName = time() . '.' . $request->profile_image->extension();
                $request->profile_image->move('uploads/agency_member/', $imageName);
                $user->profile_image   = $imageName;

            }
            if($request->password == ''){
                $user->actual_password = $request->actual_password;
                $user->password = $request->prevpassword;
            }else {
                $user->actual_password = $request->password;
                $user->password = Hash::make($request->password);
            }


            $user->save();
            return redirect()->route('pdf-downloader_index')->with('updated','User Profile has been Updated Successfully');
        }

    public function pdf_user_delete(Request $request, $id){
        User::where('id',$id)->delete();
        PackageSubscriber::where('user_id', $id)->delete();
        return redirect()->route('pdf-downloader_index')->with('delete','User Deleted Successfully');
    }
}
