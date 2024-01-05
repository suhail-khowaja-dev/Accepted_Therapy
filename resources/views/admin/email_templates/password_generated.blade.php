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
         <th ><h1 style="font-family:sans-serif;color: #2D6D95;padding-top: 40px;text-transform: capitalize;">Password Generate</h1></th>
     </tr>
         <tr >

             <th style="padding-top: 40px;"><img src="https://pikky.net/medium/qkp.png" alt="" style="width:25%;border-radius: 20%;height: 100%;object-fit: cover;"></th>
         </tr>
         <tr>
             <th><p style="font-family:sans-serif;color: #2D6D95;padding-top: 60px; font-size: 20px;">Here is your generate password of the given link.</p></th>
         </tr>
         <tr>
             <th><p style="font-family:sans-serif;color: #1A1A1A;padding-top: 20px;">Link: <a href="{{ route('show_card_login',['link'=>$new_data['link']]) }}">{{ route('show_card_login',['link'=>$new_data['link']]) }}</a> </p></th>
         </tr>
         <tr>
             <th style="padding-top: 20px;padding-bottom: 40px;">
             <p style="font-size: 20px; font-weight: 500;">Password: <span style="font-weight: bold;text-decoration: underline;"> {{ $new_data['password'] }}</span></p>
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
