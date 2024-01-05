@extends('admin.layouts.master')

@section('content')
    @if ($message = Session::get('configuration'))
        <div class="alert alert-warning alert-block" id="successBtn" style="background: #F7E7CE">

            <button type="button" class="close" data-dismiss="alert">×</button>

            <strong id="test">{{ $message }}</strong>

        </div>
    @endif



    <center>
        <h2 style="color:green">SET CONFIGURATION PARAMETERS</h2>

    </center>

    <form action="{{ route('setting_update') }}" method="post">

        @csrf

        <hr />

        <br />

        <p style="color:green"> &nbsp&nbsp&nbsp&nbsp City 1
         <div class="col-sm-4">
 
             <span class="input-group-addon"><i class="fa fa-building"></i></span>
 
             <input type="text" name="city_first" value="{{ $links->city_first }}" class="form-control"
                 placeholder="Enter Your City Name" value="" />
 
             </p>
 
         </div>


         <p style="color:green"> &nbsp&nbsp&nbsp&nbsp City 2
            <div class="col-sm-4">
    
                <span class="input-group-addon"><i class="fa fa-building"></i></span>
    
                <input type="text" name="city_second" value="{{ $links->city_second }}" class="form-control"
                    placeholder="Enter Your City Name" value="" />
    
                </p>
    
            </div>

        <p style="color:green"> &nbsp&nbsp&nbsp&nbsp Phone 1 #:
        <div class="col-sm-4">

            <span class="input-group-addon"><i class="fa fa-phone"></i></span>

            <input type="text" name="phone_first" class="form-control" placeholder="Enter Your Phone Number"
                value="{{ $links->phone_first }}" / onkeydown="javascript:backspacerDOWN(this,event);"
                onkeyup="javascript:backspacerUP(this,event);">

            </p>

        </div>

        <p style="color:green"> &nbsp&nbsp&nbsp&nbsp Phone 2 #:
         <div class="col-sm-4">
 
             <span class="input-group-addon"><i class="fa fa-phone"></i></span>
 
             <input type="text" name="phone_second" class="form-control" placeholder="Enter Your Phone Number"
                 value="{{ $links->phone_second }}" / onkeydown="javascript:backspacerDOWN(this,event);"
                 onkeyup="javascript:backspacerUP(this,event);">
 
             </p>
 
         </div>

        <p style="color:green">&nbsp&nbsp&nbsp&nbsp Address 1:
        <div class="col-sm-4">

            <span class="input-group-addon"><i class="fas fa-map-marker-alt"></i></span>

            <input type="text" name="address_first" class="form-control" placeholder="Enter Your Footer Text"
                value="{{ $links->address_first }}" />

            </p>

        </div>

        <p style="color:green">&nbsp&nbsp&nbsp&nbsp Address 2:
         <div class="col-sm-4">
 
             <span class="input-group-addon"><i class="fas fa-map-marker-alt"></i></span>
 
             <input type="text" name="address_second" class="form-control" placeholder="Enter Your Footer Text"
                 value="{{ $links->address_second }}" />
 
             </p>
 
         </div>



        

        {{-- <p style="color:green"> Country
        <div class="col-sm-4">

            <span class="input-group-addon"><i class="fa fa-country"></i></span>

            <input type="text" name="country" value="{{ $links->country }}" class="form-control"
                placeholder="https://instagram.com/" value="" />

            </p>

        </div> --}}



        <p style="color:green">&nbsp&nbsp&nbsp&nbsp Facebook
        <div class="col-sm-4">

            <span class="input-group-addon"><i class="fa fa-facebook-square"></i></span>

            <input type="text" name="facebook" value="{{ $links->facebook }}" class="form-control"
                placeholder="https://facebook.com/" value="" />

            </p>

        </div>

        <p style="color:green">&nbsp&nbsp&nbsp&nbsp Instagram
        <div class="col-sm-4">

            <span class="input-group-addon"><i class="fa fa-instagram"></i></span>

            <input type="text" name="instagram" value="{{ $links->instagram }}" class="form-control"
                placeholder="https://instagram.com/" value="" />

            </p>

        </div>


        {{-- <p style="color:green"> LinkedIn
        <div class="col-sm-4">

            <span class="input-group-addon"><i class="fa fa-linkedin"></i></span>

            <input type="text" name="linkdin" class="form-control" placeholder="https://linkdin.com/"
                value="{{ $links->linkdin }}" />

            </p>

        </div> --}}

        <!--




          <p style="color:green">       Tiktok      <div class="col-sm-4">

        <span class="input-group-addon"><img src="{{ asset('assets_new/img/1x/tiktok.png') }}" width="5%"></span>

       <input type="text" name="tiktok" class="form-control"  placeholder="https://tiktok.com/" value="" />

                     </p>

          </div> -->





        {{-- <p style="color:green"> &nbsp&nbsp&nbsp&nbsp Email: </p>
        <div class="col-sm-4">
            <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
            <input type="text" name="admin_email" class="form-control" placeholder="admin@aslgloballogistics.com"
                value="{{ $links->admin_email }}" />
        </div>
        <br>

        <p style="color:green"> &nbsp&nbsp&nbsp&nbsp Footer Email: </p>
        <div class="col-sm-4">
            <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
            <input type="text" name="email" class="form-control" placeholder="sadiqr@aslgloballogistics.com"
                value="{{ $links->email }}" />
        </div>
        <br> --}}

        <p style="color:green">

            &nbsp&nbsp&nbsp&nbsp Copy right: </p>

        <div class="col-sm-4">

            <span class="input-group-addon"><i class="fa fa-clipboard"></i></span>

            <input type="text" name="copy_right" class="form-control"
                placeholder="All copyrights reserved 2021 by design pros usa" value="{{ $links->copy_right }}" />

        </div>



        </p>
        </p>
        </div>



        <div style="margin-left: 5%">



            <input type="submit" name="submit" value="Update" class="btn btn-primary ">

        </div>

    </form>
@endsection('content')
