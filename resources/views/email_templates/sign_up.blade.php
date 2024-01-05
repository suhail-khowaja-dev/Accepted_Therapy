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
            <th style="font-family:sans-serif;color: #2D6D95;padding-top: 10px;text-transform: capitalize;">
                <h1>Welcome!</h1>
            </th>
        </tr>
        <tr>

            <th style="padding-top: 40px;"><img src="https://www.pinclipart.com/picdir/big/528-5284520_hand-png-icon-shaking-hands-logo-png-clipart.png" alt=""
                    style="width:25%;border-radius: 20%;height: 100%;object-fit: cover;"></th>
        </tr>

        <tr>
            <th>
                <p style="font-family:sans-serif;color: #1A1A1A;padding-top: 40px;">Congraltions! Your registration is
                    confirmed, We're excited to have you get started.<br>You've successfully completed registration.</p>
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
