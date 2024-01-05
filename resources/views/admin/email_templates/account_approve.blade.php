<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Accepted Therapy</title>
</head>
<body>


    <table
        style="height:100%;width:60%;margin-left:auto;margin-right: auto;background-image: url({{$message->embed(asset('assets/images/bg1.png'))}});">
        <tr>
            <th>
                <img src="{{$message->embed(asset('assets/images/logo.png'))}}" alt=""
                    style="width: 25%;margin-top: 20px;height: 100%;object-fit: cover;">
            </th>
        </tr>
        <tr>
            <th>
                <h1 style="font-family:sans-serif;color: #2D6D95;padding-top: 40px;text-transform: capitalize;">Hello {{ $new_data['name'] }},<br>Your account has been Approved!</h1>
            </th>
        </tr>
        <tr>

            <th style="padding-top: 40px;"><img src="https://www.freeiconspng.com/uploads/blue-thumbs-up-icon-9.png" alt=""
                    style="width:25%;border-radius: 20%;height: 100%;object-fit: cover;"></th>
        </tr>

        <tr>
            <th>
                <h2 style="font-family:sans-serif;color: #2D6D95;padding-top: 10px;">Email: {{ $new_data['email'] }}</h2>
                <h2 style="font-family:sans-serif;color: #2D6D95;padding-top: 10px;">Password: {{ $new_data['actual_password'] }}</h2>
                <p style="font-family:sans-serif;color: #000;padding-top: 10px;">Your account has been approved successfully, Thank You.</p>
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
