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
         <th ><h1 style="font-family:sans-serif;color: #2D6D95;padding-top: 40px;text-transform: capitalize;">Request For New Password?</h1></th>
     </tr>
         <tr >

             <th style="padding-top: 40px;"><img src="https://www.clipartmax.com/png/full/114-1142248_computer-icons-technical-support-outlook-security-code-in-icon-png.png" alt="" style="width:25%;height: 100%;object-fit: cover;"></th>
         </tr>

         <tr>
             <th>
                <p style="font-family:sans-serif;color: #1A1A1A;padding-top: 40px;">Client Name:  <strong>{{ $new_data['name'] }}</strong></p>
                <p style="font-family:sans-serif;color: #1A1A1A;padding-top: 40px;">Client Email:  <strong>{{ $new_data['email'] }}</strong></p>
                <p style="font-family:sans-serif;color: #1A1A1A;padding-top: 40px;">Link Nubmer: <strong>{{ $new_data['id'] }}</strong></p>
                <p style="font-family:sans-serif;color: #1A1A1A;padding-top: 40px;">Note : {{ $new_data['message'] }}</p>
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
