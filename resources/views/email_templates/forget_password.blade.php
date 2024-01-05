<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Accepted Therapy</title>
</head>
<body>
    <table style="height:100%;width:60%;margin-left:auto;margin-right: auto;background-image: url({{$message->embed(asset('assets/images/bg1.png'))}});">
        <tr>
            <th>
             <img src="{{$message->embed(asset('assets/images/logo.png'))}}" alt="" style="width: 25%;margin-top: 20px;height: 100%;object-fit: cover;">
            </th>
        </tr>
        <tr>
         <th ><h1 style="font-family:sans-serif;color: #2D6D95;padding-top: 40px;text-transform: capitalize;">Forgot Your Password?</h1></th>
     </tr>
         <tr >

             <th style="padding-top: 40px;"><img src="https://pikky.net/medium/qkp.png" alt="" style="width:25%;border-radius: 20%;height: 100%;object-fit: cover;"></th>
         </tr>

         <tr>
             <th><p style="font-family:sans-serif;color: #1A1A1A;padding-top: 40px;">Not to worry, we got you! Let's get you a new password</p></th>
         </tr>
         <tr>
             <th style="padding-top: 40px;padding-bottom: 40px;">
                <a href="{{ route('reset_password',['token'=>$token])  }}" target="_blank"><button style="background-color:#6ED6D3;text-decoration: none;color: #2D6D95;padding:15px 15px ;border-top-width: 0px;


     padding: 10px 35px 10px 35px;
     margin-left: 10px;
     font-family: sans-serif;
     font-weight: 900;
     font-size: 13px;
     text-decoration: none;
     border: none;
     ">RESET PASSWORD</button></a>
             </th>
         </tr>
         <tr>
             <th>
                 <img src="{{$message->embed(asset('assets/images/logo.png'))}}"
                     alt="" style="width: 10%;margin-top: 10px;height: 100%;object-fit: cover;">
             </th>
         </tr>
         <th>

         </th>

     </table>


</body>
</html>
