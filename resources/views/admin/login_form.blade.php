<!DOCTYPE html>

<html>

  <head>

    <title>Admin | Accepted Therapy</title>

    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">

    <style>

      html, body {

      display: flex;

      justify-content: center;

      height: 100%;

      }

      body, div, h1, form,  p {

      padding: 0;

      margin: 0;

      outline: none;

      font-family: Roboto, Arial, sans-serif;

      font-size: 16px;

      color: white;

      }

  input {

      padding: 0;

      margin: 0;

      outline: none;

      font-family: Roboto, Arial, sans-serif;

      font-size: 16px;

      color: black;

      }

#toast-container > .toast-error {





    color: green;

     margin-top:7px;

}



      h1 {

      padding: 10px 0;

      font-size: 32px;

      font-weight: 300;

      text-align: center;

      }

      p {

      font-size: 12px;

      }

      hr {

      color: #a9a9a9;

      opacity: 0.3;

      }

      .main-block {

      max-width: 340px;

      min-height: 410px;

      padding: 10px 0;

      margin: auto;

      border-radius: 5px;

      border: solid 1px #ccc;

      box-shadow: 1px 2px 5px rgba(0,0,0,.31);

      background: #ebebeb;

      }

      form {

      margin: 0 30px;

      }

      .account-type, .gender {

      margin: 15px 0;

      }

      input[type=radio] {

      display: none;

      }



      label#icon {

      margin: 0;

      border-radius: 5px 0 0 5px;

      }



      input[type=email], input[type=password] {

      width: calc(100% - 57px);

      height: 36px;

      margin: 13px 0 0 -5px;

      padding-left: 10px;

      border-radius: 0 5px 5px 0;

      border: solid 1px #c8a180;

      box-shadow: 1px 2px 5px rgba(0,0,0,.09);

      background: #fff;

      }

      input[type=password] {

      margin-bottom: 15px;

      }

      #icon {

      display: inline-block;

      padding: 9.3px 15px;

      box-shadow: 1px 2px 5px rgba(0,0,0,.09);

      background: #c8a180;

      color: #fff;

      text-align: center;

      }

      .btn-block {

      margin-top: 10px;

      text-align: center;

      }

      button {

      width: 100%;

      padding: 10px 0;

      margin: 10px auto;

      border-radius: 5px;

      border: none;

      background: #c8a180;

      font-size: 14px;

      font-weight: 600;

      color: #fff;

      transition: 0.5s ease-in-out;


      }

      button:hover {

      background: #156aa1;
      transition: 0.5s ease-in-out;

      }



body{

  background-image:url({{asset('/img/1x/Screenshot.png')}});

}

.adminImage {
  height: 90px !important;
  width: 220px;
  overflow: hidden;
}
.adminImage img {
  height: 100%;
  width: 100%;
  object-fit: cover;
}



    </style>



<!--

     <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-

     alpha/css/bootstrap.css" rel="stylesheet"> -->



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!--   <link rel="stylesheet" type="text/css"

     href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">



    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script> -->



<link rel="icon" href="{{url('/uploads/feature/'.logo_management()->feature_image)}}" type="image/x-icon"/>

  </head>



  <body>





    <div class="main-block">







<center>
<div class="adminImage">
<img src="{{url('/uploads/logo/'.logo_management()->header)}}" alt="navbar brand" class="navbar-brand" >
</div>






<h2 style="color: #c8a180">Admin Login</h2></center>

 <!--  <div class="container">

   <center>

    <div class="row">

        <div class="col-sm-6">

    <label for="uname"><b>Username</b></label>

    <input type="text" placeholder="Enter Email" name="email" required>

</div>

 <div class="row">

        <div class="col-sm-6">

    <label for="psw"><b>Password</b></label>

    <input type="password" placeholder="Enter Password" name="password" required>

        </div>

    <button type="submit">Login</button>

   </center>

  </div> -->







<form action="{{route('login_submit')}}" method="post">

  @csrf

        <hr>

        <label id="icon" for="name"><i class="fas fa-envelope"></i></label>

        <input type="email" name="email" id="name" placeholder="Email" required/>



        <label id="icon" for="name"><i class="fas fa-unlock-alt"></i></label>

        <input type="password" name="password" id="password" placeholder="Password" required/>



        <hr>

        <div class="btn-block">



         <button type="submit">Login</button>

        </div>

      </form>

    </div>

  </body>

</html>

<link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

<script>







    toastr.options = {

        "positionClass": "toast-top-center",

        "textcolor":"white",

        "showDuration": "300",

        "hideDuration": "1000",

        "timeOut": "5000",

        "extendedTimeOut": "1000",

        "showEasing": "swing",

        "hideEasing": "linear",

        "showMethod": "fadeIn",

        "hideMethod": "fadeOut"

    };



  @if(Session::has('error'))



      toastr.error("{{ session('error') }}");

  @endif







  </script>
