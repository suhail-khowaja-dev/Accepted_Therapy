<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Non-Secure Release</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <style>
        .for-blur-background tbody {
            backdrop-filter: blur(2px);
        }

    </style>
</head>

<body>
    <table class="for-blur-background" style="
        height: 100%;
        width: 60%;
        margin-left: auto;
        margin-right: auto;
        background-repeat: no-repeat;
        background-size: cover;
        background-image: url({{$message->embed(asset('assets/images/background.png'))}});
      ">
        <tr>
            <th style="
        text-align: center;">
                <img src="{{$message->embed(asset('assets/images/logo.png'))}}" alt="" style="
              width: 400px;
              border-radius: 20%;
              height: 100px;
              object-fit: none;
            " />
            </th>
        </tr>
        <tr>
            <th>
                <h1 style="
              font-family: sans-serif;
              color: #2d6d95;
              text-transform: capitalize;
              text-align: center;
              width: 79%;
              margin: auto;
              padding-top: 20px;
              padding-bottom: 20px;
            ">
                    Non-Secure Release
                </h1>
            </th>
        </tr>
        <tr>
            <th>
                <h4 style="
              font-family: sans-serif;
              color: #000;
              text-transform: capitalize;
              text-align: start;
              width: 79%;
              margin: auto;
              padding-top: 10px;
            ">
                    Consent for Release of Protected Health Information by Non-Secure
                    Means
                </h4>
            </th>
        </tr>
        <tr>
            <th style="
            font-family: sans-serif;
            color: #4d4d4d;
            font-size: 14px;
            padding: 5px;
          ">
                <p style="width: 80%; margin: auto; text-align: start">
                    <label>Name:</label><br />
                    <span style="border-bottom: 1px solid #999; font-weight: bolder">{{ $new_data['name'] }}</span>
                </p>
            </th>
        </tr>
        <tr>
            <th style="
            font-family: sans-serif;
            color: #4d4d4d;
            font-size: 14px;
            padding: 5px;
          ">
                <p style="width: 80%; margin: auto; text-align: start">
                    <label>Date of Birth:</label><br />
                    <span style="border-bottom: 1px solid #999; font-weight: bolder">{{ $new_data['date_of_birth'] }}</span>
                </p>
            </th>
        </tr>
        <tr>
            <th style="
            font-family: sans-serif;
            color: #4d4d4d;
            font-size: 14px;
            padding: 5px;
          ">
                <p style="width: 80%; margin: auto; text-align: start">
                    I
                    <span style="border-bottom: 1px solid #999; font-weight: bolder">{{ $new_data['your_name'] }}</span>
                    authorize Accepted Therapy Services to transmit to me by non-secure
                    media the following types of protected health information related to
                    my health records and health care treatment:
                </p>
            </th>
        </tr>
        <tr>
            <th style="
            font-family: sans-serif;
            color: #4d4d4d;
            font-size: 14px;
            padding: 10px;
          ">
                <ul style="width: 80%; margin: auto; text-align: start">
                    @if(!empty($new_data['non_secure_checkboxes']))
                    @foreach(json_decode($new_data['non_secure_checkboxes']) as $val)
                    @if($val == 1)
                    <li>
                        Information related to the scheduling of meetings or other
                        appointments.
                    </li>
                    @endif
                    @if($val == 2)
                    <li>
                        Information related to billing and payment.
                    </li>
                    @endif
                    @if($val == 3)
                    <li>
                        I understand that if I contact my therapist through non-secure means (text messages, email, or other phone apps) my therapist reserves the right to not respond to protect my confidentiality.
                    </li>
                    @endif
                    @endforeach
                    @endif
                </ul>
            </th>
        </tr>
        <tr>
            <th>
                <h4 style="
              font-family: sans-serif;
              color: #000;
              text-transform: capitalize;
              text-align: start;
              width: 79%;
              margin: auto;
              padding-top: 10px;
            ">
                    Termination of Consent
                </h4>
            </th>
        </tr>
        <tr>
            <th style="
            font-family: sans-serif;
            color: #4d4d4d;
            font-size: 14px;
            padding: 10px;
          ">
                <ul style="width: 80%; margin: auto; text-align: start">
                    @if(!empty($new_data['non_secure_checkboxes']))
                    @foreach(json_decode($new_data['non_secure_checkboxes']) as $non_secure)
                    @if($non_secure == 4)
                    <li>
                        I understand that this authorization will expire 60 days from the
                        termination of my therapy services.
                    </li>
                    @endif
                    @if($non_secure == 5)
                    <li>
                        I can also revoke this authorization in writing at any time by sending written notification to my therapist at 423 Weathersby Road Suite 240 or by email to acceptedtherapy@gmail.com. Your notice will not apply to actions taken by the requesting person/entity prior to the date they receive you written request to revoke authorization.
                    </li>
                    @endif
                    @endforeach
                    @endif
                </ul>
            </th>
        </tr>
        <tr>
            <th style="
            font-family: sans-serif;
            color: #4d4d4d;
            font-size: 14px;
            padding: 5px;
          ">
                <p style="width: 80%; margin: auto; text-align: start">
                    <label>Signature box:</label><br />
                    <span style="border-bottom: 1px solid #999; font-weight: bolder">{{$new_data['signature']}}</span>
                </p>
            </th>
        </tr>
        <tr>
            <th style="
            font-family: sans-serif;
            color: #4d4d4d;
            font-size: 14px;
            padding: 5px;
          ">
                <p style="width: 80%; margin: auto; text-align: start">
                    {{($new_data['created_at'])->format('m/d/Y')}}
                </p>
            </th>
        </tr>

        <tr>
            <th style="padding-top: 10px; padding-bottom: 10px; text-align: center;">
                <img src="{{$message->embed(asset('assets/images/logo.png'))}}" alt="" style="
              width: 400px;
              border-radius: 20%;
              height: 100px;
              object-fit: none;
            " />
            </th>
        </tr>
    </table>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
