<?php

namespace App\Http\Controllers;

use App\Models\User;
use PayPal\Api\Item;
use PayPal\Api\Payer;
use PayPal\Api\Amount;
use PayPal\Api\Details;
use PayPal\Api\Payment;
use App\Models\UserLink;
use PayPal\Api\ItemList;
use PayPal\Api\Transaction;
use Illuminate\Http\Request;
use PayPal\Api\RedirectUrls;
use PayPal\Api\PaymentExecution;
use App\Models\PackageSubscriber;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Srmklive\PayPal\Services\PayPal as PayPalClient;

class PaymentController extends Controller
{
    public function index()
    {
        return view("payment");
    }

    public function amount_store(Request $request)
    {

        $expire_link = null;
        if (session()->get('selected_package')['id'] == 1) {
            $expire_link = 1;
        }
        if (session()->get('selected_package')['id'] == 2) {
            $expire_link = 4;
        }
        if (session()->get('selected_package')['id'] == 3) {
            $expire_link = 4;
        }


        $user_data = session()->get('user_signup');
        $user_data['password'] = Hash::make(session()->get('user_signup')['password']);
        $user_data['actual_password'] = session()->get('user_signup')['password'];
        $user_data['role'] = '2';
        $user_data['link_expire_count'] = $expire_link;
        $user_data['status'] = 0;
        $user = User::create($user_data);


        $packageSubscriber = new PackageSubscriber();
        $packageSubscriber->user_id = $user->id;
        $packageSubscriber->package_id = session()->get('selected_package')['id'];
        $packageSubscriber->package_title = session()->get('selected_package')['package_title'];
        $packageSubscriber->paypal_response = json_encode($request->all());
        $packageSubscriber->save();


        if ($user) {




            $email = $user_data['email'];

            Mail::send('email_templates.sign_up', ['data',true,'user' => $email], function ($messages) use ($email) {
                $messages->to($email);
                $messages->subject('Registeration');
            });

            session()->forget(['user_signup', 'selected_package']);

            return response()->json([
                'status' => 200
            ]);
        } else {

            return response()->json([
                'status' => 400
            ]);
        }
    }

    public function agent_amount_store(Request $request)
    {

        $expire_link = null;
        if (session()->get('selected_package')['id'] == 1) {
            $expire_link = 1;
        }
        if (session()->get('selected_package')['id'] == 2) {
            $expire_link = 4;
        }
        if (session()->get('selected_package')['id'] == 3) {
            $expire_link = 4;
        }



        $provider = new PayPalClient;
        $provider->setApiCredentials(config('paypal'));
        $provider->getAccessToken();
        $packageSubs = PackageSubscriber::where('user_id', Auth::id())->orderBy('id', 'desc')->first();

        // if response true it return empty
        if (empty($response)) {
            $response = $provider->cancelSubscription(json_decode($packageSubs->paypal_response)->subscriptionID, 'Update the service');
        }

        $expire_link = null;
        if (session()->get('selected_package')['id'] == 1) {
            $expire_link = 1;
        }
        if (session()->get('selected_package')['id'] == 2) {
            $expire_link = 4;
        }
        if (session()->get('selected_package')['id'] == 3) {
            $expire_link = 4;
        }

        UserLink::where('user_id', Auth::id())->delete();
        $user_links = UserLink::where('user_id', Auth::id())->get();
        if (count($user_links) == 0) {
            $packgeSubscriber = PackageSubscriber::where('user_id', Auth::id())->latest()->first();


            $packageSubscriber = new PackageSubscriber();
            $packageSubscriber->user_id = Auth::id();
            $packageSubscriber->package_id = session()->get('selected_package')['id'];
            $packageSubscriber->package_title = session()->get('selected_package')['package_title'];
            $packageSubscriber->paypal_response = json_encode($request->all());
            $packageSubscriber->save();


            if ($packageSubscriber) {
                $email = Auth::user()->email;

                Mail::send('email_templates.sign_up', ['data'=>true,'user' => $email], function ($messages) use ($email) {
                    $messages->to($email);
                    $messages->subject('Customer Contact');
                });

                session()->forget(['selected_package']);

                return response()->json([
                    'status' => 200
                ]);
            } else {

                return response()->json([
                    'status' => 400
                ]);
            }






            if ($packgeSubscriber->package_id == 1) {
                $this->linkGenrateByPackage(1);
            }
            if ($packgeSubscriber->package_id == 2) {
                $this->linkGenrateByPackage(4);
            }
            if ($packgeSubscriber->package_id == 3) {
                $this->linkGenrateByPackage(4);
            }
        }
    }


    public function cancel_plan(Request $request)
    {
        $provider = new PayPalClient;
        $provider->setApiCredentials(config('paypal'));
        $provider->getAccessToken();

        $packageSubs = PackageSubscriber::where('user_id', Auth::id())->orderBy('id', 'desc')->first();
        // json_decode($packageSubs->paypal_response)->subscriptionID
        $response = $provider->cancelSubscription(json_decode($packageSubs->paypal_response)->subscriptionID, 'Update the service');

        // $expire_link = null;
        // if (session()->get('selected_package')['id'] == 1) {
        //     $expire_link = 10;
        // }
        // if (session()->get('selected_package')['id'] == 2) {
        //     $expire_link = 15;
        // }
        // if (session()->get('selected_package')['id'] == 3) {
        //     $expire_link = 20;
        // }

        // $user_link_delete = UserLink::where('user_id', Auth::id())->delete();


        // $user_links = UserLink::where('user_id', Auth::id())->get();
        // if (count($user_links) == 0) {
        //     $packgeSubscriber = PackageSubscriber::where('user_id', Auth::id())->latest()->first();

        //     if ($packgeSubscriber->package_id == 1) {
        //         $this->linkGenrateByPackage(10);
        //     }
        //     if ($packgeSubscriber->package_id == 2) {
        //         $this->linkGenrateByPackage(15);
        //     }
        //     if ($packgeSubscriber->package_id == 3) {
        //         $this->linkGenrateByPackage(20);
        //     }
        // }

        session()->forget('selected_package');
        return response()->json([
            'status' => 200,
            'cancel_plan' => $response,
        ]);
    }


    public function linkGenrateByPackage($package_count)
    {
        

        for ($x = 0; $x < $package_count; $x++) {

            $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
            $charactersLength = strlen($characters);
            $randomString = '';
            $length = 35;

            for ($i = 0; $i < $length; $i++) {
                $randomString .= $characters[rand(0, $charactersLength - 1)];
            }


            $randomPassword = '';
            $lengthPassword = 15;

            // Password
            for ($i = 0; $i < $lengthPassword; $i++) {
                $randomPassword .= $characters[rand(0, $charactersLength - 1)];
            }


            $userlink = new UserLink;
            $userlink->user_id = Auth::id();
            $userlink->password = Hash::make($randomPassword);
            $userlink->actual_password = $randomPassword;
            $userlink->link_used_count = 2;
            $userlink->generated_link = $randomString;
            $userlink->agent_link = Auth()->id();
            $userlink->status = 1;
            $userlink->save();


            // $count = 2;
            // for ($j = 1; $j <= $count; $j++) {
            //     $user = new User;
            //     $user->name = '';
            //     $user->role = '';
            //     $user->email = $randomString.$j.'@gmail.com';
            //     $user->password = Hash::make($randomPassword);
            //     $user->actual_password = $randomPassword;
            //     $user->link_id = $userlink->id;
            //     $user->login_checkpoint = 1;
            //     $user->status = 1;
            //     $user->save();
            // }

        }
    }



    public function cancel(Request $request)
    {
        // $provider = new PayPalClient;
        // $provider->setApiCredentials(config('paypal'));
        // $provider->getAccessToken();

        $packageSubs = PackageSubscriber::where('user_id', Auth::id())->orderBy('id', 'desc')->first();
        return json_decode($packageSubs->paypal_response)->subscriptionID;
        // $response = $provider->cancelSubscription('I-91VK323WPCT5', 'Update the service');

        // return $response;
        // dd($provider->cancelSubscription('I-BDUEEHT7EX8F', 'Update the service'));

    }
}
