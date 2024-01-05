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
         <th ><h1 style="font-family:sans-serif;color: #2D6D95;padding-top: 40px;text-transform: capitalize;">Customer Contact!</h1></th>
     </tr>
         <tr >

             <th style="padding-top: 40px;"><img src="https://завьяловский.рф/upload/iblock/701/70113199199cf8355fbebbe23c2849e2.png" alt="" style="width:25%;border-radius: 20%;height: 100%;object-fit: cover;"></th>
         </tr>
         <tr>
            <th>
                <p style="font-family:sans-serif;color: #1A1A1A;padding-top: 20px;">Name: {{ $data['full_name'] }}</p>
                <p style="font-family:sans-serif;color: #1A1A1A;padding-top: 5px;">Email: {{ $data['email'] }}</p>
                <p style="font-family:sans-serif;color: #1A1A1A;padding-top: 5px;">Message: {{ $data['message'] }}</p>
                <p style="font-family:sans-serif;color: #1A1A1A;padding-top: 5px;">Inquiry Date: {!! date('m/d/Y h:i A', strtotime($data['created_at'])) !!}</p>
            </th>

        </tr>
        </th>

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
