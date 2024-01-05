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
         <th ><h1 style="font-family:sans-serif;color: #2D6D95;padding-top: 40px;text-transform: capitalize;">Client Schedule</h1></th>
     </tr>
         <tr >

             <th style="padding-top: 40px;"><img src="https://radioveritas.co.za/images/blueradio.png" alt="" style="width:25%;border-radius: 20%;height: 100%;object-fit: cover;"></th>
         </tr>
         <tr>
            <th><p style="font-family:sans-serif;color: #1A1A1A;margin: 40px 0 0 0;padding:0 20px;">Name : {{ $user_inputs['schedule_name'] }}</p><br></th>
        </tr>
        <tr>
           <th><p style="font-family:sans-serif;color: #1A1A1A;margin: 0px;padding:0 20px;">Email : {{ $user_inputs['schedule_email'] }}</p><br></th>
       </tr>
       <tr>
           <th><p style="font-family:sans-serif;color: #1A1A1A;margin: 0px;padding:0 20px;">Phone : {{ $user_inputs['schedule_phone'] }}</p><br></th>
       </tr>
       <tr>
        <th><p style="font-family:sans-serif;color: #1A1A1A;margin: 0px;padding:0 20px;">Location : {{ $user_inputs['location'] }}</p><br></th>
        </tr>
       <tr>
           <th><p style="font-family:sans-serif;color: #1A1A1A;margin: 0px;padding:0 20px;">Insurance : {{ $user_inputs['schedule_insurance'] }}</p><br></th>

       </tr>
       <tr>
           <th><p style="font-family:sans-serif;color: #1A1A1A;margin: 0px; padding:0 20px;">Message : {{ $user_inputs['schedule_message'] }}</p><br></th>
       </tr>
         <tr>
             <th  style="padding-top: 20px;">
                 <img src="{{$message->embed(asset('assets/images/logo.png'))}}"
                     alt="" style="width: 10%;margin-top: 10px;height: 100%;object-fit: cover;">
             </th>
         </tr>
         <th>

         </th>

     </table>

</body>
</html>
