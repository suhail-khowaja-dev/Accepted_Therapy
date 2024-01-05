<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Accepted Therapy</title>
</head>
<body>

    <p>Dear Customer</p>
    <p>Your Password : {{ $password }}</p>
    <a href="{{ route('show_card_login',['link'=>$link]) }}">Click here</a>
    <p>by Accepted Therapy</p>

</body>
</html>