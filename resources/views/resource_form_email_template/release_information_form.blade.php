<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Release Of Information</title>

    <style>
        .for-blur-background tbody {
            backdrop-filter: blur(2px);
        }
    </style>
</head>

<body>

    <table class="for-blur-background"
    style="height:100%;width:60%;margin-left:auto;margin-right: auto;background-repeat: no-repeat;background-size: cover; background-image: url({{$message->embed(asset('assets/images/background.png'))}});">
        <tr>
            <th>
                <img src='{{$message->embed(asset('assets/images/logo.png'))}}' alt=""
                    style="width:400px;border-radius: 20%;height: 100px;object-fit: none;">
            </th>
        </tr>
        <tr>
            <th>
                <h1 style="font-family:sans-serif;color: #2d6d95;text-transform: capitalize;text-align: center;width:79%; margin:auto; padding-top: 20px;padding-bottom: 20px;">Release Of Information</h1>
            </th>
        </tr>
        <tr>
            <th style="font-family:sans-serif;color: #4D4D4D;font-size: 14px;padding: 5px;">
                <p style="width:80%; margin:auto; text-align: start;">This form is to be completed in the event that you wish to include other angecies or people previous therapists, medical providers, testing results, parent providing payment, or anyone else you would like for Accepted Therapy Sercies to have access to.</p>
            </th>
        </tr>
        <tr>
            <th style="font-family:sans-serif;color: #4D4D4D;font-size: 14px;padding: 5px;">
                <p style="width:80%; margin:auto; text-align: start;">I  <span style="border-bottom: 1px solid #999; font-weight: bolder;">{{ $new_data['your_name'] }}</span> whose date of birth is <span style="border-bottom: 1px solid #999; font-weight: bolder;">{{ $new_data['date'] }}</span> authorize Accepted Therapy Services to disclose and/or obtain information from <span style="border-bottom: 1px solid #999; font-weight: bolder;">{{ $new_data['person_or_agency_name'] }}</span>.</p>
            </th>
        </tr>
        <tr>
            <th style="font-family:sans-serif;color: #4D4D4D;font-size: 14px;padding: 5px;">
                <p style="width:80%; margin:auto; text-align: start;">The following information (initial each item to be disclosed).</p>
            </th>
        </tr>
        <tr>
            <th style="font-family:sans-serif;color: #4D4D4D;font-size: 14px;padding: 10px;">
                <ul style="width:80%; margin:auto; text-align: start;">
                    @if(!empty($new_data['release_of_info_checkboxes']))
                    @foreach(json_decode($new_data['release_of_info_checkboxes']) as $release_info)

                    @if($release_info == 1)
                         <li>Assessment.</li>
                    @endif
                    @if($release_info == 2)
                         <li>Diagnosis.</li>
                    @endif
                    @if($release_info == 3)
                         <li>Psychosocial Evaluation.</li>
                    @endif
                    @if($release_info == 4)
                         <li>Treatment Plan.</li>
                    @endif
                    @if($release_info == 5)
                         <li> Current Treatment Updates.</li>
                    @endif
                    @if($release_info == 6)
                         <li>Presence/Participation in Treatment.</li>
                    @endif
                    @if($release_info == 7)
                         <li>Progress in treatment.</li>
                    @endif
                    @if($release_info == 8)
                         <li>Demographic information.</li>
                    @endif
                    @if($release_info == 9)
                         <li>Recommendations.</li>
                    @endif
                    @if($release_info == 10)
                         <li>{{ $new_data['other_symtoms'] }}.</li>
                    @endif
                    @if($release_info == 11)
                         <li>Psychotherapy notes.</li>
                    @endif
                    @endforeach
                    @endif

            </ul>
            </th>
        </tr>
        <tr>
            <th style="font-family:sans-serif;color: #4D4D4D;font-size: 14px;padding: 5px;">
                <p style="width:80%; margin:auto; text-align: start; font-style: italic;">Psychotherapy notes will not be released without discussion and approval from individual therapist.</p>
            </th>
        </tr>
        <tr>
            <th style="font-family:sans-serif;color: #4D4D4D;font-size: 14px;padding: 5px;">
                <p style="width:80%; margin:auto; text-align: start;">This information may be used or disclosed in connection with mental health treatment or payment. If the purpose is other than as specified above, please specify <span style="border-bottom: 1px solid #999; font-weight: bolder;">{{$new_data['reason']}}</span></p>
            </th>
        </tr>
        <tr>
            <th>
                <h2 style="font-family:sans-serif;color: #2d6d95;text-transform: capitalize;text-align: start;width:79%; margin:auto;padding-top: 10px;">Termination</h2>
            </th>
        </tr>
        <tr>
            <th style="font-family:sans-serif;color: #4D4D4D;font-size: 14px;padding: 5px;">
                <p style="width:80%; margin:auto; text-align: start;">Unless sooner revoked, this authorization expires 60 days from the termination of my therapy services I understand that I have the right to revoke this authorization, in writing, at any time by sending written notification my therapist at 423 Weathersby Road Suite 240 or by email to acceptedtherapy@gmail.com. I further understand that revocation will not apply to actions taken by the requesting person/entity prior to the date they receive you written request to revoke authorization.</p>
            </th>
        </tr>
        <tr>
            <th>
                <h2 style="font-family:sans-serif;color: #2d6d95;text-transform: capitalize;text-align: start;width:79%; margin:auto;padding-top: 10px;">Condition</h2>
            </th>
        </tr>
        <tr>
            <th style="font-family:sans-serif;color: #4D4D4D;font-size: 14px;padding: 5px;">
                <p style="width:80%; margin:auto; text-align: start;">I further understand that Accepted Therapy Services will not condition my treatment on whether I give authorization for the requested disclosure.</p>
            </th>
        </tr>



        <tr>
            <th style="font-family:sans-serif;color: #4D4D4D;font-size: 14px;padding: 5px;">
                <p style="width:80%; margin:auto; text-align: start;">
                  <label>Signature box:</label><br>
                  <span style="border-bottom: 1px solid #999; font-weight: bolder;">{{ $new_data['signature'] }}</span>
                </p>
            </th>
        </tr>
        <tr>
            <th style="font-family:sans-serif;color: #4D4D4D;font-size: 14px;padding: 5px;">
                <p style="width:80%; margin:auto; text-align: start;">{{($new_data['created_at'])->format('m/d/Y') }}</p>
            </th>
        </tr>
        <tr>
            <th style="padding-top: 10px;padding-bottom: 10px;"><img src="{{$message->embed(asset('assets/images/logo.png'))}}" alt=""
                    style="width:400px;border-radius: 20%;height: 100px;object-fit: none;"></th>
        </tr>


    </table>

</body>
</html>
