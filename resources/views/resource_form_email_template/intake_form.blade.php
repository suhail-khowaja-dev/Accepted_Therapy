<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Intake Form</title>

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
                <h1 style="font-family:sans-serif;color: #2d6d95;text-transform: capitalize;text-align: center;width:79%; margin:auto; padding-top: 20px;padding-bottom: 20px;">Intake Form</h1>
            </th>
        </tr>
        <tr>
            <th>
                <h1 style="font-family:sans-serif;color: #000;text-transform: capitalize;text-align: start;width:79.5%; margin:auto;">Client Information</h1>
            </th>
        </tr>
        <tr>
            <th>
                <h2 style="font-family:sans-serif;color: #2d6d95;text-transform: capitalize;text-align: start;width:79.5%; margin:auto;padding-top: 10px;">Name and Contact Information</h2>
            </th>
        </tr>
        <tr>
            <th style="font-family:sans-serif;color: #4D4D4D;font-size: 14px;padding: 5px;">
                <p style="width:80%; margin:auto; text-align: start;">
                  <label>First Name:</label><br>
                  <span style="border-bottom: 1px solid #999; font-weight: bolder;">{{$new_data['client_first_name'] }}</span>
                </p>
            </th>
        </tr>
        <tr>
            <th style="font-family:sans-serif;color: #4D4D4D;font-size: 14px;padding: 5px;">
                <p style="width:80%; margin:auto; text-align: start;">
                  <label>Last Name:</label><br>
                  <span style="border-bottom: 1px solid #999; font-weight: bolder;">{{$new_data['client_last_name'] }}</span>
                </p>
            </th>
        </tr>
        <tr>
            <th style="font-family:sans-serif;color: #4D4D4D;font-size: 14px;padding: 5px;">
                <p style="width:80%; margin:auto; text-align: start;">
                  <label>Preferred Therapist Name:</label><br>
                  <span style="border-bottom: 1px solid #999; font-weight: bolder;">{{$new_data['client_preferred_therapist_name'] }}</span>
                </p>
            </th>
        </tr>
        <tr>
            <th style="font-family:sans-serif;color: #4D4D4D;font-size: 14px;padding: 5px;">
                <p style="width:80%; margin:auto; text-align: start;">
                  <label>Phone:</label><br>
                  <span style="border-bottom: 1px solid #999; font-weight: bolder;">{{$new_data['client_phone'] }}</span>
                </p>
            </th>
        </tr>
        <tr>
            <th style="font-family:sans-serif;color: #4D4D4D;font-size: 14px;padding: 5px;">
                <p style="width:80%; margin:auto; text-align: start;">
                  <label>Email:</label><br>
                  <span style="border-bottom: 1px solid #999; font-weight: bolder;">{{$new_data['client_email'] }}</span>
                </p>
            </th>
        </tr>
        <tr>
            <th style="font-family:sans-serif;color: #4D4D4D;font-size: 14px;padding: 5px;">
                <p style="width:80%; margin:auto; text-align: start;">
                  <label>Address:</label><br>
                  <span style="border-bottom: 1px solid #999; font-weight: bolder;">{{$new_data['client_address'] }}</span>
                </p>
            </th>
        </tr>
        <tr>
            <th style="font-family:sans-serif;color: #4D4D4D;font-size: 14px;padding: 5px;">
                <p style="width:80%; margin:auto; text-align: start;">
                  <label>Client County:</label><br>
                  <span style="border-bottom: 1px solid #999; font-weight: bolder;">{{$new_data['client_county'] }}</span>
                </p>
            </th>
        </tr>
        <tr>
            <th style="font-family:sans-serif;color: #4D4D4D;font-size: 14px;padding: 5px;">
                <p style="width:80%; margin:auto; text-align: start;">
                  <label>Client City:</label><br>
                  <span style="border-bottom: 1px solid #999; font-weight: bolder;">{{$new_data['client_city'] }}</span>
                </p>
            </th>
        </tr>
        <tr>
            <th style="font-family:sans-serif;color: #4D4D4D;font-size: 14px;padding: 5px;">
                <p style="width:80%; margin:auto; text-align: start;">
                  <label>Client State:</label><br>
                  <span style="border-bottom: 1px solid #999; font-weight: bolder;">{{$new_data['client_state'] }}</span>
                </p>
            </th>
        </tr>
        <tr>
            <th style="font-family:sans-serif;color: #4D4D4D;font-size: 14px;padding: 5px;">
                <p style="width:80%; margin:auto; text-align: start;">
                  <label>Zip:</label><br>
                  <span style="border-bottom: 1px solid #999; font-weight: bolder;">{{$new_data['client_zip'] }}</span>
                </p>
            </th>
        </tr>
        <tr>
            <th>
                <h2 style="font-family:sans-serif;color: #2d6d95;text-transform: capitalize;text-align: start;width:79.5%; margin:auto;padding-top: 10px;">Emergency Contact</h2>
            </th>
        </tr>
        <tr>
            <th style="font-family:sans-serif;color: #4D4D4D;font-size: 14px;padding: 5px;">
                <p style="width:80%; margin:auto; text-align: start;">
                  <label>Name:</label><br>
                  <span style="border-bottom: 1px solid #999; font-weight: bolder;">{{$new_data['emergency_name'] }}</span>
                </p>
            </th>
        </tr>
        <tr>
            <th style="font-family:sans-serif;color: #4D4D4D;font-size: 14px;padding: 5px;">
                <p style="width:80%; margin:auto; text-align: start;">
                  <label>Phone:</label><br>
                  <span style="border-bottom: 1px solid #999; font-weight: bolder;">{{$new_data['emergency_phone'] }}</span>
                </p>
            </th>
        </tr>
        <tr>
            <th style="font-family:sans-serif;color: #4D4D4D;font-size: 14px;padding: 5px;">
                <p style="width:80%; margin:auto; text-align: start;">
                  <label>Relationship:</label><br>
                  <span style="border-bottom: 1px solid #999; font-weight: bolder;">{{$new_data['emergency_relationship'] }}</span>
                </p>
            </th>
        </tr>
        <tr>
            <th>
                <h2 style="font-family:sans-serif;color: #2d6d95;text-transform: capitalize;text-align: start;width:79.5%; margin:auto;padding-top: 10px;">Place of Service</h2>
            </th>
        </tr>
        <tr>
            <th style="font-family:sans-serif;color: #4D4D4D;font-size: 14px;padding: 5px;">
                <p style="width:80%; margin:auto; text-align: start;">
                  <label>Place of Service:</label><br>
                  <span style="border-bottom: 1px solid #999; font-weight: bolder;">{{$new_data['place_of_service'] }}</span>
                </p>
            </th>
        </tr>
        <tr>
            <th>
                <h2 style="font-family:sans-serif;color: #2d6d95;text-transform: capitalize;text-align: start;width:79.5%; margin:auto;padding-top: 10px;">Demographic Information</h2>
            </th>
        </tr>
        <tr>
            <th style="font-family:sans-serif;color: #4D4D4D;font-size: 14px;padding: 5px;">
                <p style="width:80%; margin:auto; text-align: start;">
                  <label>Birthday:</label><br>
                  <span style="border-bottom: 1px solid #999; font-weight: bolder;">{{$new_data['di_date_of_birth']}}</span>
                </p>
            </th>
        </tr>
        <tr>
            <th style="font-family:sans-serif;color: #4D4D4D;font-size: 14px;padding: 5px;">
                <p style="width:80%; margin:auto; text-align: start;">
                  <label>Gender:</label><br>
                  <span style="border-bottom: 1px solid #999; font-weight: bolder;">{{$new_data['di_legal_gender']}}</span>
                </p>
            </th>
        </tr>
        <tr>
            <th style="font-family:sans-serif;color: #4D4D4D;font-size: 14px;padding: 5px;">
                <p style="width:80%; margin:auto; text-align: start;">
                  <label>Gender Identity:</label><br>
                  <span style="border-bottom: 1px solid #999; font-weight: bolder;">{{ $new_data['di_legal_gender_identify'] }}</span>
                </p>
            </th>
        </tr>
        <tr>
            <th style="font-family:sans-serif;color: #4D4D4D;font-size: 14px;padding: 5px;">
                <p style="width:80%; margin:auto; text-align: start;">
                  <label>Pronouns:</label><br>
                  <span style="border-bottom: 1px solid #999; font-weight: bolder;">{{$new_data['di_pronounce'] }}</span>
                </p>
            </th>
        </tr>
        <tr>
            <th style="font-family:sans-serif;color: #4D4D4D;font-size: 14px;padding: 5px;">
                <p style="width:80%; margin:auto; text-align: start;">
                  <label>Sexual Orientation:</label><br>
                  <span style="border-bottom: 1px solid #999; font-weight: bolder;">{{$new_data['di_sexual_orientation'] }}</span>
                </p>
            </th>
        </tr>
        <tr>
            <th style="font-family:sans-serif;color: #4D4D4D;font-size: 14px;padding: 5px;">
                <p style="width:80%; margin:auto; text-align: start;">
                  <label>Select Race:</label><br>
                  <span style="border-bottom: 1px solid #999; font-weight: bolder;">{{ $new_data['di_race']  }}</span>
                </p>
            </th>
        </tr>
        <tr>
            <th style="font-family:sans-serif;color: #4D4D4D;font-size: 14px;padding: 5px;">
                <p style="width:80%; margin:auto; text-align: start;">
                  <label>Marital Status:</label><br>
                  <span style="border-bottom: 1px solid #999; font-weight: bolder;">{{ $new_data['di_marital_status']  }}</span>
                </p>
            </th>
        </tr>
        <tr>
            <th>
                <h1 style="font-family:sans-serif;color: #000;text-transform: capitalize;text-align: start;width:79.5%; margin:auto;padding-top: 10px;">Insurance Information</h1>
            </th>
        </tr>
        <tr>
            <th style="font-family:sans-serif;color: #4D4D4D;font-size: 14px;padding: 5px;">
                <p style="width:80%; margin:auto; text-align: start;">Do you have medical insurance?</p>
            </th>
        </tr>
        <tr>
            <th style="font-family:sans-serif;color: #4D4D4D;font-size: 14px;padding: 5px;">
                {{-- @foreach ($new_data['intake_insurance'] as  $insurance) --}}

                @if($new_data['intake_insurance']['medical_insurance_radio_1'] == 'yes')
                <p style="width:80%; margin:auto; text-align: start;">Yes</p>
                @endif
                @if($new_data['intake_insurance']['medical_insurance_radio_1'] == 'no')
                <p style="width:80%; margin:auto; text-align: start;">NO</p>
                @endif
                {{-- @endforeach --}}

            </th>
        </tr>
        <tr>
            <th style="font-family:sans-serif;color: #4D4D4D;font-size: 14px;padding: 5px;">
                <p style="width:80%; margin:auto; text-align: start;">
                  <label>Subscriber Name:</label><br>
                  {{-- @foreach ($new_data['intake_insurance'] as  $insurance) --}}
                    <span style="border-bottom: 1px solid #999; font-weight: bolder;">{{ $new_data['intake_insurance']['responsible_party_1'] }}</span>
                  {{-- @endforeach --}}
                </p>
            </th>
        </tr>
        <tr>
            <th style="font-family:sans-serif;color: #4D4D4D;font-size: 14px;padding: 5px;">
                <p style="width:80%; margin:auto; text-align: start;">
                  <label>Relationship to Client:</label><br>
                  {{-- @foreach ($new_data['intake_insurance'] as  $insurance) --}}
                  <span style="border-bottom: 1px solid #999; font-weight: bolder;">{{ $new_data['intake_insurance']['relationship_with_client_1'] }}</span>
                  {{-- @endforeach --}}
                </p>
            </th>
        </tr>
        <tr>
            <th style="font-family:sans-serif;color: #4D4D4D;font-size: 14px;padding: 5px;">
                <p style="width:80%; margin:auto; text-align: start;">
                  <label>Address (If Different):</label><br>
                  <span style="border-bottom: 1px solid #999; font-weight: bolder;">{{$new_data['intake_insurance']['address_if_different_1']}}</span>
                </p>
            </th>
        </tr>
        <tr>
            <th style="font-family:sans-serif;color: #4D4D4D;font-size: 14px;padding: 5px;">
                <p style="width:80%; margin:auto; text-align: start;">
                  <label>Insurance Provide:</label><br>
                  <span style="border-bottom: 1px solid #999; font-weight: bolder;">{{$new_data['intake_insurance']['insurance_provider_1']}}</span>
                </p>
            </th>
        </tr>

        <tr>
            <th style="font-family:sans-serif;color: #4D4D4D;font-size: 14px;padding: 5px;">
                <p style="width:80%; margin:auto; text-align: start;">
                  <label>Policy Number:</label><br>
                  <span style="border-bottom: 1px solid #999; font-weight: bolder;">{{$new_data['intake_insurance']['policy_number_1'] }}</span>
                </p>
            </th>
        </tr>
        <tr>
            <th style="font-family:sans-serif;color: #4D4D4D;font-size: 14px;padding: 5px;">
                <p style="width:80%; margin:auto; text-align: start;">
                  <label>Group Number:</label><br>
                  <span style="border-bottom: 1px solid #999; font-weight: bolder;">{{$new_data['intake_insurance']['policy_group_number_1'] }}</span>
                </p>
            </th>
        </tr>
        <tr>
            <th style="font-family:sans-serif;color: #4D4D4D;font-size: 14px;padding: 5px;">
                <p style="width:80%; margin:auto; text-align: start;">
                  <label>Copay:</label><br>
                  <span style="border-bottom: 1px solid #999; font-weight: bolder;">{{ $new_data['intake_insurance']['co_pay_1'] }}</span>
                </p>
            </th>
        </tr>
        <tr>
            <th style="font-family:sans-serif;color: #4D4D4D;font-size: 14px;padding: 5px;">
                <p style="width:80%; margin:auto; text-align: start;">
                  <label>Self:</label><br>


                  <span style="border-bottom: 1px solid #999; font-weight: bolder;">{{ $new_data['intake_insurance']['client_relationship_to_insurance_1'] }}</span>
                </p>
            </th>
        </tr>
        <tr>
            <th style="font-family:sans-serif;color: #4D4D4D;font-size: 14px;padding: 5px;">
                <p style="width:80%; margin:auto; text-align: start;">Do you have a secondary insurance?</p>
            </th>
        </tr>
        <tr>
            <th style="font-family:sans-serif;color: #4D4D4D;font-size: 14px;padding: 5px;">
                @if($new_data['intake_insurance']['medical_insurance_radio_2'] == 'yes')
                <p style="width:80%; margin:auto; text-align: start;">Yes</p>
                @endif
                @if($new_data['intake_insurance']['medical_insurance_radio_2'] == 'no')
                <p style="width:80%; margin:auto; text-align: start;">No</p>
                @endif
            </th>
        </tr>
        <tr>
            <th style="font-family:sans-serif;color: #4D4D4D;font-size: 14px;padding: 5px;">
                <p style="width:80%; margin:auto; text-align: start;">
                  <label>Insurance Provider:</label><br>
                  <span style="border-bottom: 1px solid #999; font-weight: bolder;">{{ $new_data['intake_insurance']['insurance_provider_2'] }}</span>
                </p>
            </th>
        </tr>
        <tr>
            <th style="font-family:sans-serif;color: #4D4D4D;font-size: 14px;padding: 5px;">
                <p style="width:80%; margin:auto; text-align: start;">
                  <label>Insured Name:</label><br>
                  <span style="border-bottom: 1px solid #999; font-weight: bolder;">{{ $new_data['intake_insurance']['insurance_name_2'] }} </span>
                </p>
            </th>
        </tr>
        <tr>
            <th style="font-family:sans-serif;color: #4D4D4D;font-size: 14px;padding: 5px;">
                <p style="width:80%; margin:auto; text-align: start;">
                  <label>Policy Number:</label><br>
                  <span style="border-bottom: 1px solid #999; font-weight: bolder;">{{ $new_data['intake_insurance']['policy_number_2'] }}</span>
                </p>
            </th>
        </tr>
        <tr>
            <th style="font-family:sans-serif;color: #4D4D4D;font-size: 14px;padding: 5px;">
                <p style="width:80%; margin:auto; text-align: start;">
                  <label>Group Number:</label><br>
                  <span style="border-bottom: 1px solid #999; font-weight: bolder;">{{ $new_data['intake_insurance']['policy_group_number_2'] }}er</span>
                </p>
            </th>
        </tr>
        <tr>
            <th style="font-family:sans-serif;color: #4D4D4D;font-size: 14px;padding: 5px;">
                <p style="width:80%; margin:auto; text-align: start;">
                  <label>Copay:</label><br>
                  <span style="border-bottom: 1px solid #999; font-weight: bolder;">{{$new_data['intake_insurance']['co_pay_2'] }}</span>
                </p>
            </th>
        </tr>
        <tr>
            <th style="font-family:sans-serif;color: #4D4D4D;font-size: 14px;padding: 5px;">
                <p style="width:80%; margin:auto; text-align: start;">
                  <label>Client’s Relationship to Insured:</label><br>
                  <span style="border-bottom: 1px solid #999; font-weight: bolder;">{{ $new_data['intake_insurance']['relationship_with_client_2'] }}</span>
                </p>
            </th>
        </tr>
        <tr>
            <th style="font-family:sans-serif;color: #4D4D4D;font-size: 14px;padding-top: 12px;padding-bottom: 5px;">
                <p style="width:79%; margin:auto; text-align: start;">Upload a copy of insurance card:</p>
            </th>
        </tr>
        @if(!empty($new_data['intake_insurance']['insurance_copy']))
        <tr>
            <th style="padding-top: 5px;padding-bottom: 10px;">
                <p style="width:79%; margin:auto; text-align: start;">
                <img src='{{ $message->embed('uploads/intake_form/'.$new_data['intake_insurance']['insurance_copy'])}}' alt=""
                    style="width:120px;border-radius: 20%;height: 120px;object-fit: cover;">
                </p>
                </th>
        </tr>
        @endif
        <tr>
            <th style="font-family:sans-serif;color: #4D4D4D;font-size: 14px;padding: 10px;">
                <ul style="width:80%; margin:auto; text-align: start;">
                <li>Participation in treatment.</li>
            </ul>
            </th>
        </tr>
        <tr>
            <th style="font-family:sans-serif;color: #4D4D4D;font-size: 14px;padding: 5px;">
                <p style="width:80%; margin:auto; text-align: start;">
                  <label>Signature box:</label><br>
                  <span style="border-bottom: 1px solid #999; font-weight: bolder;">{{$new_data['intake_insurance']['insurance_signature'] }}</span>
                </p>
            </th>
        </tr>
        <tr>
            <th style="font-family:sans-serif;color: #4D4D4D;font-size: 14px;padding: 5px;">
                <p style="width:80%; margin:auto; text-align: start;">{{$new_data['intake_insurance']['created_at']}}</p>
            </th>
        </tr>
        <tr>
            <th>
                <h1 style="font-family:sans-serif;color: #000;text-transform: capitalize;text-align: start;width:79.5%; margin:auto;padding-top: 10px;">Presenting Problem</h1>
            </th>
        </tr>
        <tr>
            <th style="font-family:sans-serif;color: #4D4D4D;font-size: 14px;padding: 5px;">
                <p style="width:80%; margin:auto; text-align: start;">What is your major complaint or issue that you would like to address?</p>
            </th>
        </tr>
        <tr>
            <th style="font-family:sans-serif;color: #4D4D4D;font-size: 14px;padding: 5px;">
                <p style="width:80%; margin:auto; text-align: start;">
                  <label>Major Issue or Complaint:</label><br>
                  <span style="border-bottom: 1px solid #999; font-weight: bolder;">{{$new_data['complaint_or_issue'] }}</span>
                </p>
            </th>
        </tr>
        <tr>
            <th style="font-family:sans-serif;color: #4D4D4D;font-size: 14px;padding: 5px;">
                <p style="width:80%; margin:auto; text-align: start;">Have you previously suffered from this issue?</p>
            </th>
        </tr>
        <tr>
            <th style="font-family:sans-serif;color: #4D4D4D;font-size: 14px;padding: 5px;">
                @if($new_data['pp_previously_suffered'] == 'yes')
                <p style="width:80%; margin:auto; text-align: start;">Yes</p>
                @endif
                @if($new_data['pp_previously_suffered'] == 'no')
                <p style="width:80%; margin:auto; text-align: start;">No</p>
                @endif
            </th>
        </tr>
        <tr>
            <th style="font-family:sans-serif;color: #4D4D4D;font-size: 14px;padding: 5px;">
                <p style="width:80%; margin:auto; text-align: start;">Have you ever been diagnosed with a mental illness (Generalized Anxiety Disorder, Major Depressive Disorder, ADHD, PTSD, personality disorder, etc.)? If so, when?</p>
            </th>
        </tr>
        <tr>
            <th style="font-family:sans-serif;color: #4D4D4D;font-size: 14px;padding: 5px;">
                <p style="width:80%; margin:auto; text-align: start;">
                  <label>Disorder:</label><br>
                  <span style="border-bottom: 1px solid #999; font-weight: bolder;">{{ $new_data['pp_diagnosed'] }}</span>
                </p>
            </th>
        </tr>
        <tr>
            <th>
                <h2 style="font-family:sans-serif;color: #2d6d95;text-transform: capitalize;text-align: start;width:79.5%; margin:auto;padding-top: 10px;">Current Symptoms</h2>
            </th>
        </tr>
        <tr>
            <th style="font-family:sans-serif;color: #4D4D4D;font-size: 14px;padding: 10px;">
                <ul style="width:80%; margin:auto; text-align: start;">
                    @if(!empty($new_data['current_symtoms']))
                    @foreach (json_decode($new_data['current_symtoms']) as $symptoms )
                    @if($symptoms == 1)
                         <li>Anxiety.</li>
                    @endif
                    @if($symptoms == 2)
                        <li>Crying Spells.</li>
                     @endif
                    @if($symptoms == 3)
                        <li> Fatigue.</li>
                    @endif
                    @if($symptoms == 4)
                    <li>Hallucinations.</li>
                    @endif
                    @if($symptoms == 5)
                    <li> Libido Changes.</li>
                    @endif
                    @if($symptoms == 6)
                    <li>Racing Thoughts</li>
                    @endif
                    @if($symptoms == 7)
                    <li>Suspiciousness.</li>
                    @endif
                    @if($symptoms == 8)
                    <li>Appetite Issues.</li>
                    @endif
                    @if($symptoms == 9)
                    <li>Depression.</li>
                    @endif
                    @if($symptoms == 10)
                    <li>Grief/Loss.</li>
                    @endif
                    @if($symptoms == 11)
                    <li>Impulsivity.</li>
                    @endif
                    @if($symptoms == 12)
                    <li>Lost of interest.</li>
                    @endif
                    @if($symptoms == 13)
                    <li> Risky Activity.</li>
                    @endif
                    @if($symptoms == 14)
                    <li> {{ $new_data['other_symptom_1'] }}</li>
                    @endif
                    @endforeach
                    @endif

            </ul>
            </th>
        </tr>
        <tr>
            <th style="font-family:sans-serif;color: #4D4D4D;font-size: 14px;padding: 5px;">
                <p style="width:80%; margin:auto; text-align: start;">Have you ever received therapy in the past? If so, please provide treatment received and dates of treatment.</p>
            </th>
        </tr>
        <tr>
            <th style="font-family:sans-serif;color: #4D4D4D;font-size: 14px;padding: 5px;">
                <p style="width:80%; margin:auto; text-align: start;">
                  <label>Treatment:</label><br>
                  <span style="border-bottom: 1px solid #999; font-weight: bolder;">{{ $new_data['treatment'] }}</span>
                </p>
            </th>
        </tr>
        <tr>
            <th>
                <h1 style="font-family:sans-serif;color: #000;text-transform: capitalize;text-align: start;width:79.5%; margin:auto;padding-top: 10px;">Medical History</h1>
            </th>
        </tr>
        <tr>
            <th style="font-family:sans-serif;color: #4D4D4D;font-size: 14px;padding: 5px;">
                <p style="width:80%; margin:auto; text-align: start;">
                  <label>Primary Care Provider:</label><br>
                  {{-- @foreach ($new_data['intake_medication'] as $medications ) --}}
                    <span style="border-bottom: 1px solid #999; font-weight: bolder;">{{ $new_data['intake_medication']['primary_care_provider'] }}</span>
                  {{-- @endforeach --}}

                </p>
            </th>
        </tr>
        <tr>
            <th style="font-family:sans-serif;color: #4D4D4D;font-size: 14px;padding: 5px;">
                <p style="width:80%; margin:auto; text-align: start;">
                  <label>Phone Number:</label><br>
                  <span style="border-bottom: 1px solid #999; font-weight: bolder;">{{ $new_data['intake_medication']['medication_phone'] }}</span>
                </p>
            </th>
        </tr>
        <tr>
            <th style="font-family:sans-serif;color: #4D4D4D;font-size: 14px;padding: 5px;">
                <p style="width:80%; margin:auto; text-align: start;">Are you currently taking any medications?</p>
            </th>
        </tr>
        <tr>
            <th style="font-family:sans-serif;color: #4D4D4D;font-size: 14px;padding: 5px;">
                {{-- @foreach ($new_data['intake_medication'] as $current_medications ) --}}
                @if($new_data['intake_medication']['medication_radio'] == 'yes')
                    <p style="width:80%; margin:auto; text-align: start;">Yes</p>
                @endif
                @if($new_data['intake_medication']['medication_radio']  == 'no')
                    <p style="width:80%; margin:auto; text-align: start;">No</p>
                @endif
                {{-- @endforeach --}}
            </th>
        </tr>
        @if(!empty($new_data['intake_medication']['m_name_1']))
        <tr>
            <th style="font-family:sans-serif;color: #4D4D4D;font-size: 14px;padding: 5px;">
                <p style="width:80%; margin:auto; text-align: start;">
                  <label>Name of Medication:</label><br>
                  <span style="border-bottom: 1px solid #999; font-weight: bolder;">{{ $new_data['intake_medication']['m_name_1']}}</span>
                </p>
            </th>
        </tr>
        <tr>
            <th style="font-family:sans-serif;color: #4D4D4D;font-size: 14px;padding: 5px;">
                <p style="width:80%; margin:auto; text-align: start;">
                  <label>Dosage:</label><br>
                  <span style="border-bottom: 1px solid #999; font-weight: bolder;">{{ $new_data['intake_medication']['m_dosage_1']}}</span>
                </p>
            </th>
        </tr>
        <tr>
            <th style="font-family:sans-serif;color: #4D4D4D;font-size: 14px;padding: 5px;">
                <p style="width:80%; margin:auto; text-align: start;">
                  <label>Frequency:</label><br>
                  <span style="border-bottom: 1px solid #999; font-weight: bolder;">{{ $new_data['intake_medication']['m_frequency_1']}}</span>
                </p>
            </th>
        </tr>
        @endif
        @if(!empty($new_data['intake_medication']['m_name_2']))
        <tr>
            <th style="font-family:sans-serif;color: #4D4D4D;font-size: 14px;padding: 5px;">
                <p style="width:80%; margin:auto; text-align: start;">
                  <label>Name of Medication:</label><br>
                  <span style="border-bottom: 1px solid #999; font-weight: bolder;">{{ $new_data['intake_medication']['m_name_2']}}</span>
                </p>
            </th>
        </tr>
        <tr>
            <th style="font-family:sans-serif;color: #4D4D4D;font-size: 14px;padding: 5px;">
                <p style="width:80%; margin:auto; text-align: start;">
                  <label>Dosage:</label><br>
                  <span style="border-bottom: 1px solid #999; font-weight: bolder;">{{ $new_data['intake_medication']['m_dosage_2']}}</span>
                </p>
            </th>
        </tr>
        <tr>
            <th style="font-family:sans-serif;color: #4D4D4D;font-size: 14px;padding: 5px;">
                <p style="width:80%; margin:auto; text-align: start;">
                  <label>Frequency:</label><br>
                  <span style="border-bottom: 1px solid #999; font-weight: bolder;">{{ $new_data['intake_medication']['m_frequency_2']}}</span>
                </p>
            </th>
        </tr>
        @endif
         @if(!empty($new_data['intake_medication']['m_name_3']))
        <tr>
            <th style="font-family:sans-serif;color: #4D4D4D;font-size: 14px;padding: 5px;">
                <p style="width:80%; margin:auto; text-align: start;">
                  <label>Name of Medication:</label><br>
                  <span style="border-bottom: 1px solid #999; font-weight: bolder;">{{ $new_data['intake_medication']['m_name_3']}}</span>
                </p>
            </th>
        </tr>
        <tr>
            <th style="font-family:sans-serif;color: #4D4D4D;font-size: 14px;padding: 5px;">
                <p style="width:80%; margin:auto; text-align: start;">
                  <label>Dosage:</label><br>
                  <span style="border-bottom: 1px solid #999; font-weight: bolder;">{{ $new_data['intake_medication']['m_dosage_3']}}</span>
                </p>
            </th>
        </tr>
        <tr>
            <th style="font-family:sans-serif;color: #4D4D4D;font-size: 14px;padding: 5px;">
                <p style="width:80%; margin:auto; text-align: start;">
                  <label>Frequency:</label><br>
                  <span style="border-bottom: 1px solid #999; font-weight: bolder;">{{ $new_data['intake_medication']['m_frequency_3']}}</span>
                </p>
            </th>
        </tr>
        @endif
        @if(!empty($new_data['intake_medication']['m_name_4']))
        <tr>
            <th style="font-family:sans-serif;color: #4D4D4D;font-size: 14px;padding: 5px;">
                <p style="width:80%; margin:auto; text-align: start;">
                  <label>Name of Medication:</label><br>
                  <span style="border-bottom: 1px solid #999; font-weight: bolder;">{{ $new_data['intake_medication']['m_name_4']}}</span>
                </p>
            </th>
        </tr>
        <tr>
            <th style="font-family:sans-serif;color: #4D4D4D;font-size: 14px;padding: 5px;">
                <p style="width:80%; margin:auto; text-align: start;">
                  <label>Dosage:</label><br>
                  <span style="border-bottom: 1px solid #999; font-weight: bolder;">{{ $new_data['intake_medication']['m_dosage_4']}}</span>
                </p>
            </th>
        </tr>
        <tr>
            <th style="font-family:sans-serif;color: #4D4D4D;font-size: 14px;padding: 5px;">
                <p style="width:80%; margin:auto; text-align: start;">
                  <label>Frequency:</label><br>
                  <span style="border-bottom: 1px solid #999; font-weight: bolder;">{{ $new_data['intake_medication']['m_frequency_4']}}</span>
                </p>
            </th>
        </tr>
        @endif
        @if(!empty($new_data['intake_medication']['m_name_5']))
        <tr>
            <th style="font-family:sans-serif;color: #4D4D4D;font-size: 14px;padding: 5px;">
                <p style="width:80%; margin:auto; text-align: start;">
                  <label>Name of Medication:</label><br>
                  <span style="border-bottom: 1px solid #999; font-weight: bolder;">{{ $new_data['intake_medication']['m_name_5']}}</span>
                </p>
            </th>
        </tr>
        <tr>
            <th style="font-family:sans-serif;color: #4D4D4D;font-size: 14px;padding: 5px;">
                <p style="width:80%; margin:auto; text-align: start;">
                  <label>Dosage:</label><br>
                  <span style="border-bottom: 1px solid #999; font-weight: bolder;">{{ $new_data['intake_medication']['m_dosage_5']}}</span>
                </p>
            </th>
        </tr>
        <tr>
            <th style="font-family:sans-serif;color: #4D4D4D;font-size: 14px;padding: 5px;">
                <p style="width:80%; margin:auto; text-align: start;">
                  <label>Frequency:</label><br>
                  <span style="border-bottom: 1px solid #999; font-weight: bolder;">{{ $new_data['intake_medication']['m_frequency_5']}}</span>
                </p>
            </th>
        </tr>
        @endif
        <tr>
            <th style="font-family:sans-serif;color: #4D4D4D;font-size: 14px;padding: 5px;">
                <p style="width:80%; margin:auto; text-align: start;">What medications have you tried previously that did not work for you?</p>
            </th>
        </tr>
        <tr>
            <th style="font-family:sans-serif;color: #4D4D4D;font-size: 14px;padding: 5px;">
                <p style="width:80%; margin:auto; text-align: start;">
                  <label>Madication Tried:</label><br>
                  <span style="border-bottom: 1px solid #999; font-weight: bolder;">{{ $new_data['intake_medication']['madication_tried']}}</span>
                </p>
            </th>
        </tr>
        <tr>
            <th style="font-family:sans-serif;color: #4D4D4D;font-size: 14px;padding: 5px;">
                <p style="width:80%; margin:auto; text-align: start;">Do you have any medical conditions?</p>
            </th>
        </tr>
        <tr>
            <th style="font-family:sans-serif;color: #4D4D4D;font-size: 14px;padding: 5px;">
                <p style="width:80%; margin:auto; text-align: start;">
                  <label>Madication Condition:</label><br>
                  <span style="border-bottom: 1px solid #999; font-weight: bolder;">{{ $new_data['intake_medication']['madication_condition']}}</span>
                </p>
            </th>
        </tr>
        <tr>
            <th>
                <h1 style="font-family:sans-serif;color: #000;text-transform: capitalize;text-align: start;width:79.5%; margin:auto;padding-top: 10px;">Mental Health History</h1>
            </th>
        </tr>
        <tr>
            <th>
                <h2 style="font-family:sans-serif;color: #2d6d95;text-transform: capitalize;text-align: start;width:79.5%; margin:auto;padding-top: 10px;">Suicidal Ideations</h2>
            </th>
        </tr>
        <tr>
            <th style="font-family:sans-serif;color: #4D4D4D;font-size: 14px;padding: 5px;">
                <p style="width:80%; margin:auto; text-align: start;">Do you have any of the following:</p>
            </th>
        </tr>
        <tr>
            <th style="font-family:sans-serif;color: #4D4D4D;font-size: 14px;padding: 5px;">
                <p style="width:80%; margin:auto; text-align: start;">Current suicidal ideations?</p>
            </th>
        </tr>
        <tr>
            <th style="font-family:sans-serif;color: #4D4D4D;font-size: 14px;padding: 5px;">

                @if($new_data['csi_radio'] == 'yes')
                    <p style="width:80%; margin:auto; text-align: start;">Yes</p>
                @endif
                @if($new_data['csi_radio'] == 'no')
                    <p style="width:80%; margin:auto; text-align: start;">No</p>
                @endif
            </th>
        </tr>
        <tr>
            <th style="font-family:sans-serif;color: #4D4D4D;font-size: 14px;padding: 5px;">
                <p style="width:80%; margin:auto; text-align: start;">
                  <label>More Information:</label><br>
                  <span style="border-bottom: 1px solid #999; font-weight: bolder;">{{ $new_data['mh_current_suicidal_ideations'] }}</span>
                </p>
            </th>
        </tr>
        <tr>
            <th style="font-family:sans-serif;color: #4D4D4D;font-size: 14px;padding: 5px;">
                <p style="width:80%; margin:auto; text-align: start;">Current suicide plan?</p>
            </th>
        </tr>
        <tr>
            <th style="font-family:sans-serif;color: #4D4D4D;font-size: 14px;padding: 5px;">
                @if($new_data['csp_radio'] == 'yes')
                <p style="width:80%; margin:auto; text-align: start;">Yes</p>
                @endif
                @if($new_data['csp_radio'] == 'no')
                <p style="width:80%; margin:auto; text-align: start;">No</p>
                @endif
            </th>
        </tr>
        <tr>
            <th style="font-family:sans-serif;color: #4D4D4D;font-size: 14px;padding: 5px;">
                <p style="width:80%; margin:auto; text-align: start;">
                  <label>More Information:</label><br>
                  <span style="border-bottom: 1px solid #999; font-weight: bolder;">{{ $new_data['mh_current_suicidal_plan'] }}</span>
                </p>
            </th>
        </tr>
        <tr>
            <th style="font-family:sans-serif;color: #4D4D4D;font-size: 14px;padding: 5px;">
                <p style="width:80%; margin:auto; text-align: start;">Current self-harming behaviors?</p>
            </th>
        </tr>
        <tr>
            <th style="font-family:sans-serif;color: #4D4D4D;font-size: 14px;padding: 5px;">
                @if($new_data['csi_radio'] == 'yes')
                <p style="width:80%; margin:auto; text-align: start;">Yes</p>
                @endif
                @if($new_data['csi_radio'] == 'no')
                <p style="width:80%; margin:auto; text-align: start;">No</p>
                @endif
            </th>
        </tr>
        <tr>
            <th style="font-family:sans-serif;color: #4D4D4D;font-size: 14px;padding: 5px;">
                <p style="width:80%; margin:auto; text-align: start;">
                  <label>More Information:</label><br>
                  <span style="border-bottom: 1px solid #999; font-weight: bolder;">{{ $new_data['mh_current_self_harming_behaviors'] }}</span>
                </p>
            </th>
        </tr>
        <tr>
            <th style="font-family:sans-serif;color: #4D4D4D;font-size: 14px;padding: 5px;">
                <p style="width:80%; margin:auto; text-align: start;">History of suicidal ideations?</p>
            </th>
        </tr>
        <tr>
            <th style="font-family:sans-serif;color: #4D4D4D;font-size: 14px;padding: 5px;">
                @if($new_data['hsoi_radio'] == 'yes')
                <p style="width:80%; margin:auto; text-align: start;">Yes</p>
                @endif
                @if($new_data['hsoi_radio'] == 'no')
                <p style="width:80%; margin:auto; text-align: start;">No</p>
                @endif
            </th>
        </tr>
        <tr>
            <th style="font-family:sans-serif;color: #4D4D4D;font-size: 14px;padding: 5px;">
                <p style="width:80%; margin:auto; text-align: start;">
                  <label>More Information:</label><br>
                  <span style="border-bottom: 1px solid #999; font-weight: bolder;">{{ $new_data['mh_history_of_suicidal_ideations'] }}</span>
                </p>
            </th>
        </tr>
        <tr>
            <th style="font-family:sans-serif;color: #4D4D4D;font-size: 14px;padding: 5px;">
                <p style="width:80%; margin:auto; text-align: start;">Previous suicide attempts?</p>
            </th>
        </tr>
        <tr>
            <th style="font-family:sans-serif;color: #4D4D4D;font-size: 14px;padding: 5px;">
                @if($new_data['psa_radio'] == 'yes')
                 <p style="width:80%; margin:auto; text-align: start;">Yes</p>
                @endif
                @if($new_data['psa_radio'] == 'no')
                 <p style="width:80%; margin:auto; text-align: start;">No</p>
                @endif
            </th>
        </tr>
        <tr>
            <th style="font-family:sans-serif;color: #4D4D4D;font-size: 14px;padding: 5px;">
                <p style="width:80%; margin:auto; text-align: start;">
                  <label>More Information:</label><br>
                  <span style="border-bottom: 1px solid #999; font-weight: bolder;">{{ $new_data['mh_previous_suicide_attempts'] }}</span>
                </p>
            </th>
        </tr>
        <tr>
            <th style="font-family:sans-serif;color: #4D4D4D;font-size: 14px;padding: 5px;">
                <p style="width:80%; margin:auto; text-align: start;">History of self-harming?</p>
            </th>
        </tr>
        <tr>
            <th style="font-family:sans-serif;color: #4D4D4D;font-size: 14px;padding: 5px;">
                @if($new_data['hosh_radio'] == 'yes')
                <p style="width:80%; margin:auto; text-align: start;">Yes</p>
                @endif
                @if($new_data['hosh_radio'] == 'no')
                <p style="width:80%; margin:auto; text-align: start;">No</p>
                @endif
            </th>
        </tr>
        <tr>
            <th style="font-family:sans-serif;color: #4D4D4D;font-size: 14px;padding: 5px;">
                <p style="width:80%; margin:auto; text-align: start;">
                  <label>More Information:</label><br>
                  <span style="border-bottom: 1px solid #999; font-weight: bolder;">{{ $new_data['mh_history_of_self_harming '] }}</span>
                </p>
            </th>
        </tr>
        <tr>
            <th>
                <h2 style="font-family:sans-serif;color: #2d6d95;text-transform: capitalize;text-align: start;width:79.5%; margin:auto;padding-top: 10px;">Substance Use</h2>
            </th>
        </tr>
        <tr>
            <th>
                <h4 style="font-family:sans-serif;color: #000;text-transform: capitalize;text-align: start;width:79%; margin:auto;padding-top: 10px;">Nicotine/Caffeine</h4>
            </th>
        </tr>
        <tr>
            <th style="font-family:sans-serif;color: #4D4D4D;font-size: 14px;padding: 5px;">
                <p style="width:80%; margin:auto; text-align: start;">Do you use nicotine (smoking, vaping, chewing tobacco, etc.)?</p>
            </th>
        </tr>
        <tr>
            <th style="font-family:sans-serif;color: #4D4D4D;font-size: 14px;padding: 5px;">
                <p style="width:80%; margin:auto; text-align: start;">
                  <label>Nicotine:</label><br>
                  <span style="border-bottom: 1px solid #999; font-weight: bolder;">{{ $new_data['su_nicotine_caffeine'] }}</span>
                </p>
            </th>
        </tr>
        <tr>
            <th style="font-family:sans-serif;color: #4D4D4D;font-size: 14px;padding: 5px;">
                <p style="width:80%; margin:auto; text-align: start;">How many caffeinated beverages do you drink per day?</p>
            </th>
        </tr>
        <tr>
            <th style="font-family:sans-serif;color: #4D4D4D;font-size: 14px;padding: 5px;">
                <p style="width:80%; margin:auto; text-align: start;">
                  <label>Caffeinated Beverages:</label><br>
                  <span style="border-bottom: 1px solid #999; font-weight: bolder;">{{ $new_data['su_caffeinated_beverages_per_day'] }}</span>
                </p>
            </th>
        </tr>
        <tr>
            <th>
                <h4 style="font-family:sans-serif;color: #000;text-transform: capitalize;text-align: start;width:79%; margin:auto;padding-top: 10px;">Alcohol</h4>
            </th>
        </tr>
        <tr>
            <th style="font-family:sans-serif;color: #4D4D4D;font-size: 14px;padding: 5px;">
                <p style="width:80%; margin:auto; text-align: start;">How much alcohol do you typically consume?</p>
            </th>
        </tr>
        <tr>
            <th style="font-family:sans-serif;color: #4D4D4D;font-size: 14px;padding: 5px;">
                <p style="width:80%; margin:auto; text-align: start;">
                  <label>Alcohol Consume:</label><br>
                  <span style="border-bottom: 1px solid #999; font-weight: bolder;">{{ $new_data['alcohole_consume'] }}</span>
                </p>
            </th>
        </tr>
        <tr>
            <th style="font-family:sans-serif;color: #4D4D4D;font-size: 14px;padding: 5px;">
                <p style="width:80%; margin:auto; text-align: start;">Has anyone ever told you that you drink too much?</p>
            </th>
        </tr>
        <tr>
            <th style="font-family:sans-serif;color: #4D4D4D;font-size: 14px;padding: 5px;">
                <p style="width:80%; margin:auto; text-align: start;">
                  <label>Who Told You:</label><br>
                  <span style="border-bottom: 1px solid #999; font-weight: bolder;">{{$new_data['who_told_you'] }}</span>
                </p>
            </th>
        </tr>
        <tr>
            <th>
                <h4 style="font-family:sans-serif;color: #000;text-transform: capitalize;text-align: start;width:79%; margin:auto;padding-top: 10px;">Illicit Drugs</h4>
            </th>
        </tr>
        <tr>
            <th style="font-family:sans-serif;color: #4D4D4D;font-size: 14px;padding: 5px;">
                <p style="width:80%; margin:auto; text-align: start;">Have you ever tried any of the following?</p>
            </th>
        </tr>
        @if(!empty($new_data['intake_drug']['checkbox_1']))
        <tr>
            <th style="font-family:sans-serif;color: #4D4D4D;font-size: 14px;padding: 10px;">
                <ul style="width:80%; margin:auto; text-align: start;">
                <li>Cocaine.</li>
            </ul>
            </th>
        </tr>
        @endif
        @if(!empty($new_data['intake_drug']['age_use_1']))
        <tr>
            <th style="font-family:sans-serif;color: #4D4D4D;font-size: 14px;padding: 5px;">
                <p style="width:80%; margin:auto; text-align: start;">
                  <label>Age of First Use:</label><br>
                  <span style="border-bottom: 1px solid #999; font-weight: bolder;">{{ $new_data['intake_drug']['age_use_1'] }}</span>
                </p>
            </th>
        </tr>
        @endif
        @if(!empty($new_data['intake_drug']['length_use_1']))
        <tr>
            <th style="font-family:sans-serif;color: #4D4D4D;font-size: 14px;padding: 5px;">
                <p style="width:80%; margin:auto; text-align: start;">
                  <label>Length of Use:</label><br>
                  <span style="border-bottom: 1px solid #999; font-weight: bolder;">{{ $new_data['intake_drug']['length_use_1'] }}</span>
                </p>
            </th>
        </tr>
        @endif
        @if(!empty($new_data['intake_drug']['frequency_use_1']))
        <tr>
            <th style="font-family:sans-serif;color: #4D4D4D;font-size: 14px;padding: 5px;">
                <p style="width:80%; margin:auto; text-align: start;">
                  <label>Frequency of Use:</label><br>
                  <span style="border-bottom: 1px solid #999; font-weight: bolder;">{{ $new_data['intake_drug']['frequency_use_1'] }}</span>
                </p>
            </th>
        </tr>
        @endif
        @if(!empty($new_data['intake_drug']['amount_use_1']))
        <tr>
            <th style="font-family:sans-serif;color: #4D4D4D;font-size: 14px;padding: 5px;">
                <p style="width:80%; margin:auto; text-align: start;">
                  <label>Amount of Use:</label><br>
                  <span style="border-bottom: 1px solid #999; font-weight: bolder;">{{ $new_data['intake_drug']['amount_use_1'] }}</span>
                </p>
            </th>
        </tr>
        @endif
        @if(!empty($new_data['intake_drug']['date_last_use_1']))
        <tr>
            <th style="font-family:sans-serif;color: #4D4D4D;font-size: 14px;padding: 5px;">
                <p style="width:80%; margin:auto; text-align: start;">
                  <label>Date of Last Use:</label><br>
                  <span style="border-bottom: 1px solid #999; font-weight: bolder;">{{ $new_data['intake_drug']['date_last_use_1'] }}</span>
                </p>
            </th>
        </tr>
        @endif
        @if(!empty($new_data['intake_drug']['checkbox_2']))
        <tr>
            <th style="font-family:sans-serif;color: #4D4D4D;font-size: 14px;padding: 10px;">
                <ul style="width:80%; margin:auto; text-align: start;">
                <li>Ecstasy.</li>
            </ul>
            </th>
        </tr>
        @endif
        @if(!empty($new_data['intake_drug']['age_use_2']))
        <tr>
            <th style="font-family:sans-serif;color: #4D4D4D;font-size: 14px;padding: 5px;">
                <p style="width:80%; margin:auto; text-align: start;">
                  <label>Age of First Use:</label><br>
                  <span style="border-bottom: 1px solid #999; font-weight: bolder;">{{ $new_data['intake_drug']['age_use_2'] }}</span>
                </p>
            </th>
        </tr>
        @endif
        @if(!empty($new_data['intake_drug']['length_use_2']))
        <tr>
            <th style="font-family:sans-serif;color: #4D4D4D;font-size: 14px;padding: 5px;">
                <p style="width:80%; margin:auto; text-align: start;">
                  <label>Length of Use:</label><br>
                  <span style="border-bottom: 1px solid #999; font-weight: bolder;">{{ $new_data['intake_drug']['length_use_2'] }}</span>
                </p>
            </th>
        </tr>
        @endif
        @if(!empty($new_data['intake_drug']['frequency_use_2']))
        <tr>
            <th style="font-family:sans-serif;color: #4D4D4D;font-size: 14px;padding: 5px;">
                <p style="width:80%; margin:auto; text-align: start;">
                  <label>Frequency of Use:</label><br>
                  <span style="border-bottom: 1px solid #999; font-weight: bolder;">{{ $new_data['intake_drug']['frequency_use_2'] }}</span>
                </p>
            </th>
        </tr>
        @endif
        @if(!empty($new_data['intake_drug']['amount_use_2']))
        <tr>
            <th style="font-family:sans-serif;color: #4D4D4D;font-size: 14px;padding: 5px;">
                <p style="width:80%; margin:auto; text-align: start;">
                  <label>Amount of Use:</label><br>
                  <span style="border-bottom: 1px solid #999; font-weight: bolder;">{{ $new_data['intake_drug']['amount_use_2'] }}</span>
                </p>
            </th>
        </tr>
        @endif
        @if(!empty($new_data['intake_drug']['date_last_use_2']))

        <tr>
            <th style="font-family:sans-serif;color: #4D4D4D;font-size: 14px;padding: 5px;">
                <p style="width:80%; margin:auto; text-align: start;">
                  <label>Date of Last Use:</label><br>
                  <span style="border-bottom: 1px solid #999; font-weight: bolder;">{{ $new_data['intake_drug']['date_last_use_2'] }}</span>
                </p>
            </th>
        </tr>
        @endif
        @if(!empty($new_data['intake_drug']['checkbox_3']))
        <tr>
            <th style="font-family:sans-serif;color: #4D4D4D;font-size: 14px;padding: 10px;">
                <ul style="width:80%; margin:auto; text-align: start;">
                <li>Hallucinogens (LSD).</li>
            </ul>
            </th>
        </tr>
        @endif
        @if(!empty($new_data['intake_drug']['age_use_3']))
        <tr>
            <th style="font-family:sans-serif;color: #4D4D4D;font-size: 14px;padding: 5px;">
                <p style="width:80%; margin:auto; text-align: start;">
                  <label>Age of First Use:</label><br>
                  <span style="border-bottom: 1px solid #999; font-weight: bolder;">{{ $new_data['intake_drug']['age_use_3'] }}</span>
                </p>
            </th>
        </tr>
        @endif
        @if(!empty($new_data['intake_drug']['length_use_3']))
        <tr>
            <th style="font-family:sans-serif;color: #4D4D4D;font-size: 14px;padding: 5px;">
                <p style="width:80%; margin:auto; text-align: start;">
                  <label>Length of Use:</label><br>
                  <span style="border-bottom: 1px solid #999; font-weight: bolder;">{{ $new_data['intake_drug']['length_use_3'] }}</span>
                </p>
            </th>
        </tr>
        @endif
        @if(!empty($new_data['intake_drug']['frequency_use_3']))
        <tr>
            <th style="font-family:sans-serif;color: #4D4D4D;font-size: 14px;padding: 5px;">
                <p style="width:80%; margin:auto; text-align: start;">
                  <label>Frequency of Use:</label><br>
                  <span style="border-bottom: 1px solid #999; font-weight: bolder;">{{ $new_data['intake_drug']['frequency_use_3'] }}</span>
                </p>
            </th>
        </tr>
        @endif
        @if(!empty($new_data['intake_drug']['amount_use_3']))
        <tr>
            <th style="font-family:sans-serif;color: #4D4D4D;font-size: 14px;padding: 5px;">
                <p style="width:80%; margin:auto; text-align: start;">
                  <label>Amount of Use:</label><br>
                  <span style="border-bottom: 1px solid #999; font-weight: bolder;">{{ $new_data['intake_drug']['amount_use_3'] }}</span>
                </p>
            </th>
        </tr>
        @endif
        @if(!empty($new_data['intake_drug']['date_last_use_3']))
        <tr>
            <th style="font-family:sans-serif;color: #4D4D4D;font-size: 14px;padding: 5px;">
                <p style="width:80%; margin:auto; text-align: start;">
                  <label>Date of Last Use:</label><br>
                  <span style="border-bottom: 1px solid #999; font-weight: bolder;">{{ $new_data['intake_drug']['date_last_use_3'] }}</span>
                </p>
            </th>
        </tr>
        @endif
        @if(!empty($new_data['intake_drug']['checkbox_4']))
        <tr>
            <th style="font-family:sans-serif;color: #4D4D4D;font-size: 14px;padding: 10px;">
                <ul style="width:80%; margin:auto; text-align: start;">
                <li>Heroin.</li>
            </ul>
            </th>
        </tr>
        @endif
        @if(!empty($new_data['intake_drug']['age_use_4']))
        <tr>
            <th style="font-family:sans-serif;color: #4D4D4D;font-size: 14px;padding: 5px;">
                <p style="width:80%; margin:auto; text-align: start;">
                  <label>Age of First Use:</label><br>
                  <span style="border-bottom: 1px solid #999; font-weight: bolder;">{{ $new_data['intake_drug']['age_use_4'] }}</span>
                </p>
            </th>
        </tr>
        @endif
        @if(!empty($new_data['intake_drug']['length_use_4']))
        <tr>
            <th style="font-family:sans-serif;color: #4D4D4D;font-size: 14px;padding: 5px;">
                <p style="width:80%; margin:auto; text-align: start;">
                  <label>Length of Use:</label><br>
                  <span style="border-bottom: 1px solid #999; font-weight: bolder;">{{ $new_data['intake_drug']['length_use_4'] }}</span>
                </p>
            </th>
        </tr>
        @endif
        @if(!empty($new_data['intake_drug']['frequency_use_4']))
        <tr>
            <th style="font-family:sans-serif;color: #4D4D4D;font-size: 14px;padding: 5px;">
                <p style="width:80%; margin:auto; text-align: start;">
                  <label>Frequency of Use:</label><br>
                  <span style="border-bottom: 1px solid #999; font-weight: bolder;">{{ $new_data['intake_drug']['frequency_use_4'] }}</span>
                </p>
            </th>
        </tr>
        @endif
        @if(!empty($new_data['intake_drug']['amount_use_4']))
        <tr>
            <th style="font-family:sans-serif;color: #4D4D4D;font-size: 14px;padding: 5px;">
                <p style="width:80%; margin:auto; text-align: start;">
                  <label>Amount of Use:</label><br>
                  <span style="border-bottom: 1px solid #999; font-weight: bolder;">{{ $new_data['intake_drug']['amount_use_4'] }}</span>
                </p>
            </th>
        </tr>
        @endif
        @if(!empty($new_data['intake_drug']['date_last_use_4']))
        <tr>
            <th style="font-family:sans-serif;color: #4D4D4D;font-size: 14px;padding: 5px;">
                <p style="width:80%; margin:auto; text-align: start;">
                  <label>Date of Last Use:</label><br>
                  <span style="border-bottom: 1px solid #999; font-weight: bolder;">{{ $new_data['intake_drug']['date_last_use_4'] }}</span>
                </p>
            </th>
        </tr>
        @endif
        @if(!empty($new_data['intake_drug']['checkbox_5']))
        <tr>
            <th style="font-family:sans-serif;color: #4D4D4D;font-size: 14px;padding: 10px;">
                <ul style="width:80%; margin:auto; text-align: start;">
                <li>Marijuana.</li>
            </ul>
            </th>
        </tr>
        @endif
        @if(!empty($new_data['intake_drug']['age_use_5']))
        <tr>
            <th style="font-family:sans-serif;color: #4D4D4D;font-size: 14px;padding: 5px;">
                <p style="width:80%; margin:auto; text-align: start;">
                  <label>Age of First Use:</label><br>
                  <span style="border-bottom: 1px solid #999; font-weight: bolder;">{{ $new_data['intake_drug']['age_use_5'] }}</span>
                </p>
            </th>
        </tr>
        @endif
        @if(!empty($new_data['intake_drug']['length_use_5']))
        <tr>
            <th style="font-family:sans-serif;color: #4D4D4D;font-size: 14px;padding: 5px;">
                <p style="width:80%; margin:auto; text-align: start;">
                  <label>Length of Use:</label><br>
                  <span style="border-bottom: 1px solid #999; font-weight: bolder;">{{ $new_data['intake_drug']['length_use_5'] }}</span>
                </p>
            </th>
        </tr>
        @endif
        @if(!empty($new_data['intake_drug']['frequency_use_5']))
        <tr>
            <th style="font-family:sans-serif;color: #4D4D4D;font-size: 14px;padding: 5px;">
                <p style="width:80%; margin:auto; text-align: start;">
                  <label>Frequency of Use:</label><br>
                  <span style="border-bottom: 1px solid #999; font-weight: bolder;">{{ $new_data['intake_drug']['frequency_use_5'] }}</span>
                </p>
            </th>
        </tr>
        @endif
        @if(!empty($new_data['intake_drug']['amount_use_5']))
        <tr>
            <th style="font-family:sans-serif;color: #4D4D4D;font-size: 14px;padding: 5px;">
                <p style="width:80%; margin:auto; text-align: start;">
                  <label>Amount of Use:</label><br>
                  <span style="border-bottom: 1px solid #999; font-weight: bolder;">{{ $new_data['intake_drug']['amount_use_5'] }}</span>
                </p>
            </th>
        </tr>
        @endif
        @if(!empty($new_data['intake_drug']['date_last_use_5']))
        <tr>
            <th style="font-family:sans-serif;color: #4D4D4D;font-size: 14px;padding: 5px;">
                <p style="width:80%; margin:auto; text-align: start;">
                  <label>Date of Last Use:</label><br>
                  <span style="border-bottom: 1px solid #999; font-weight: bolder;">{{ $new_data['intake_drug']['date_last_use_5'] }}</span>
                </p>
            </th>
        </tr>
        @endif
        @if(!empty($new_data['intake_drug']['checkbox_6']))
        <tr>
            <th style="font-family:sans-serif;color: #4D4D4D;font-size: 14px;padding: 10px;">
                <ul style="width:80%; margin:auto; text-align: start;">
                <li>Methadone/Suboxone.</li>
            </ul>
            </th>
        </tr>
        @endif
        @if(!empty($new_data['intake_drug']['age_use_6']))
        <tr>
            <th style="font-family:sans-serif;color: #4D4D4D;font-size: 14px;padding: 5px;">
                <p style="width:80%; margin:auto; text-align: start;">
                  <label>Age of First Use:</label><br>
                  <span style="border-bottom: 1px solid #999; font-weight: bolder;">{{ $new_data['intake_drug']['age_use_6'] }}</span>
                </p>
            </th>
        </tr>
        @endif
        @if(!empty($new_data['intake_drug']['length_use_6']))
        <tr>
            <th style="font-family:sans-serif;color: #4D4D4D;font-size: 14px;padding: 5px;">
                <p style="width:80%; margin:auto; text-align: start;">
                  <label>Length of Use:</label><br>
                  <span style="border-bottom: 1px solid #999; font-weight: bolder;">{{ $new_data['intake_drug']['length_use_6'] }}</span>
                </p>
            </th>
        </tr>
        @endif
        @if(!empty($new_data['intake_drug']['frequency_use_6']))
        <tr>
            <th style="font-family:sans-serif;color: #4D4D4D;font-size: 14px;padding: 5px;">
                <p style="width:80%; margin:auto; text-align: start;">
                  <label>Frequency of Use:</label><br>
                  <span style="border-bottom: 1px solid #999; font-weight: bolder;">{{ $new_data['intake_drug']['frequency_use_6'] }}</span>
                </p>
            </th>
        </tr>
        @endif
        @if(!empty($new_data['intake_drug']['amount_use_6']))
        <tr>
            <th style="font-family:sans-serif;color: #4D4D4D;font-size: 14px;padding: 5px;">
                <p style="width:80%; margin:auto; text-align: start;">
                  <label>Amount of Use:</label><br>
                  <span style="border-bottom: 1px solid #999; font-weight: bolder;">{{ $new_data['intake_drug']['amount_use_6'] }}</span>
                </p>
            </th>
        </tr>
        @endif
        @if(!empty($new_data['intake_drug']['date_last_use_6']))
        <tr>
            <th style="font-family:sans-serif;color: #4D4D4D;font-size: 14px;padding: 5px;">
                <p style="width:80%; margin:auto; text-align: start;">
                  <label>Date of Last Use:</label><br>
                  <span style="border-bottom: 1px solid #999; font-weight: bolder;">{{ $new_data['intake_drug']['date_last_use_6'] }}</span>
                </p>
            </th>
        </tr>
        @endif
        @if(!empty($new_data['intake_drug']['checkbox_7']))
        <tr>
            <th style="font-family:sans-serif;color: #4D4D4D;font-size: 14px;padding: 10px;">
                <ul style="width:80%; margin:auto; text-align: start;">
                <li>Methamphetamines.</li>
            </ul>
            </th>
        </tr>
        @endif
        @if(!empty($new_data['intake_drug']['age_use_7']))
        <tr>
            <th style="font-family:sans-serif;color: #4D4D4D;font-size: 14px;padding: 5px;">
                <p style="width:80%; margin:auto; text-align: start;">
                  <label>Age of First Use:</label><br>
                  <span style="border-bottom: 1px solid #999; font-weight: bolder;">{{ $new_data['intake_drug']['age_use_7'] }}</span>
                </p>
            </th>
        </tr>
        @endif
        @if(!empty($new_data['intake_drug']['length_use_7']))
        <tr>
            <th style="font-family:sans-serif;color: #4D4D4D;font-size: 14px;padding: 5px;">
                <p style="width:80%; margin:auto; text-align: start;">
                  <label>Length of Use:</label><br>
                  <span style="border-bottom: 1px solid #999; font-weight: bolder;">{{ $new_data['intake_drug']['length_use_7'] }}</span>
                </p>
            </th>
        </tr>
        @endif
        @if(!empty($new_data['intake_drug']['frequency_use_7']))
        <tr>
            <th style="font-family:sans-serif;color: #4D4D4D;font-size: 14px;padding: 5px;">
                <p style="width:80%; margin:auto; text-align: start;">
                  <label>Frequency of Use:</label><br>
                  <span style="border-bottom: 1px solid #999; font-weight: bolder;">{{ $new_data['intake_drug']['frequency_use_7'] }}</span>
                </p>
            </th>
        </tr>
        @endif
        @if(!empty($new_data['intake_drug']['amount_use_7']))
        <tr>
            <th style="font-family:sans-serif;color: #4D4D4D;font-size: 14px;padding: 5px;">
                <p style="width:80%; margin:auto; text-align: start;">
                  <label>Amount of Use:</label><br>
                  <span style="border-bottom: 1px solid #999; font-weight: bolder;">{{ $new_data['intake_drug']['amount_use_7'] }}</span>
                </p>
            </th>
        </tr>
        @endif
        @if(!empty($new_data['intake_drug']['date_last_use_7']))
        <tr>
            <th style="font-family:sans-serif;color: #4D4D4D;font-size: 14px;padding: 5px;">
                <p style="width:80%; margin:auto; text-align: start;">
                  <label>Date of Last Use:</label><br>
                  <span style="border-bottom: 1px solid #999; font-weight: bolder;">{{ $new_data['intake_drug']['date_last_use_7'] }}</span>
                </p>
            </th>
        </tr>
        @endif
        @if(!empty($new_data['intake_drug']['checkbox_8']))
        <tr>
            <th style="font-family:sans-serif;color: #4D4D4D;font-size: 14px;padding: 10px;">
                <ul style="width:80%; margin:auto; text-align: start;">
                <li>Opioids (pain killers).</li>
            </ul>
            </th>
        </tr>
        @endif
        @if(!empty($new_data['intake_drug']['age_use_8']))
        <tr>
            <th style="font-family:sans-serif;color: #4D4D4D;font-size: 14px;padding: 5px;">
                <p style="width:80%; margin:auto; text-align: start;">
                  <label>Age of First Use:</label><br>
                  <span style="border-bottom: 1px solid #999; font-weight: bolder;">{{ $new_data['intake_drug']['age_use_8'] }}</span>
                </p>
            </th>
        </tr>
        @endif
        @if(!empty($new_data['intake_drug']['length_use_8']))
        <tr>
            <th style="font-family:sans-serif;color: #4D4D4D;font-size: 14px;padding: 5px;">
                <p style="width:80%; margin:auto; text-align: start;">
                  <label>Length of Use:</label><br>
                  <span style="border-bottom: 1px solid #999; font-weight: bolder;">{{ $new_data['intake_drug']['length_use_8'] }}</span>
                </p>
            </th>
        </tr>
        @endif
        @if(!empty($new_data['intake_drug']['frequency_use_8']))
        <tr>
            <th style="font-family:sans-serif;color: #4D4D4D;font-size: 14px;padding: 5px;">
                <p style="width:80%; margin:auto; text-align: start;">
                  <label>Frequency of Use:</label><br>
                  <span style="border-bottom: 1px solid #999; font-weight: bolder;">{{ $new_data['intake_drug']['frequency_use_8'] }}</span>
                </p>
            </th>
        </tr>
        @endif
        @if(!empty($new_data['intake_drug']['amount_use_8']))
        <tr>
            <th style="font-family:sans-serif;color: #4D4D4D;font-size: 14px;padding: 5px;">
                <p style="width:80%; margin:auto; text-align: start;">
                  <label>Amount of Use:</label><br>
                  <span style="border-bottom: 1px solid #999; font-weight: bolder;">{{ $new_data['intake_drug']['amount_use_8'] }}</span>
                </p>
            </th>
        </tr>
        @endif
        @if(!empty($new_data['intake_drug']['date_last_use_8']))
        <tr>
            <th style="font-family:sans-serif;color: #4D4D4D;font-size: 14px;padding: 5px;">
                <p style="width:80%; margin:auto; text-align: start;">
                  <label>Date of Last Use:</label><br>
                  <span style="border-bottom: 1px solid #999; font-weight: bolder;">{{ $new_data['intake_drug']['date_last_use_8'] }}</span>
                </p>
            </th>
        </tr>
        @endif
        @if(!empty($new_data['intake_drug']['checkbox_9']))
        <tr>
            <th style="font-family:sans-serif;color: #4D4D4D;font-size: 14px;padding: 10px;">
                <ul style="width:80%; margin:auto; text-align: start;">
                <li>Stimulants (pills).</li>
            </ul>
            </th>
        </tr>
        @endif
        @if(!empty($new_data['intake_drug']['age_use_9']))
        <tr>
            <th style="font-family:sans-serif;color: #4D4D4D;font-size: 14px;padding: 5px;">
                <p style="width:80%; margin:auto; text-align: start;">
                  <label>Age of First Use:</label><br>
                  <span style="border-bottom: 1px solid #999; font-weight: bolder;">{{ $new_data['intake_drug']['age_use_9'] }}</span>
                </p>
            </th>
        </tr>
        @endif
        @if(!empty($new_data['intake_drug']['length_use_9']))
        <tr>
            <th style="font-family:sans-serif;color: #4D4D4D;font-size: 14px;padding: 5px;">
                <p style="width:80%; margin:auto; text-align: start;">
                  <label>Length of Use:</label><br>
                  <span style="border-bottom: 1px solid #999; font-weight: bolder;">{{ $new_data['intake_drug']['length_use_9'] }}</span>
                </p>
            </th>
        </tr>
        @endif
        @if(!empty($new_data['intake_drug']['frequency_use_9']))
        <tr>
            <th style="font-family:sans-serif;color: #4D4D4D;font-size: 14px;padding: 5px;">
                <p style="width:80%; margin:auto; text-align: start;">
                  <label>Frequency of Use:</label><br>
                  <span style="border-bottom: 1px solid #999; font-weight: bolder;">{{ $new_data['intake_drug']['frequency_use_9'] }}</span>
                </p>
            </th>
        </tr>
        @endif
        @if(!empty($new_data['intake_drug']['amount_use_9']))
        <tr>
            <th style="font-family:sans-serif;color: #4D4D4D;font-size: 14px;padding: 5px;">
                <p style="width:80%; margin:auto; text-align: start;">
                  <label>Amount of Use:</label><br>
                  <span style="border-bottom: 1px solid #999; font-weight: bolder;">{{ $new_data['intake_drug']['amount_use_9'] }}</span>
                </p>
            </th>
        </tr>
        @endif
        @if(!empty($new_data['intake_drug']['date_last_use_9']))
        <tr>
            <th style="font-family:sans-serif;color: #4D4D4D;font-size: 14px;padding: 5px;">
                <p style="width:80%; margin:auto; text-align: start;">
                  <label>Date of Last Use:</label><br>
                  <span style="border-bottom: 1px solid #999; font-weight: bolder;">{{ $new_data['intake_drug']['date_last_use_9'] }}</span>
                </p>
            </th>
        </tr>
        @endif
        @if(!empty($new_data['intake_drug']['checkbox_10']))
        <tr>
            <th style="font-family:sans-serif;color: #4D4D4D;font-size: 14px;padding: 10px;">
                <ul style="width:80%; margin:auto; text-align: start;">
                <li>Tranquilizers.</li>
            </ul>
            </th>
        </tr>
        @endif
        @if(!empty($new_data['intake_drug']['age_use_10']))
        <tr>
            <th style="font-family:sans-serif;color: #4D4D4D;font-size: 14px;padding: 5px;">
                <p style="width:80%; margin:auto; text-align: start;">
                  <label>Age of First Use:</label><br>
                  <span style="border-bottom: 1px solid #999; font-weight: bolder;">{{ $new_data['intake_drug']['age_use_10'] }}</span>
                </p>
            </th>
        </tr>
        @endif
        @if(!empty($new_data['intake_drug']['length_use_10']))
        <tr>
            <th style="font-family:sans-serif;color: #4D4D4D;font-size: 14px;padding: 5px;">
                <p style="width:80%; margin:auto; text-align: start;">
                  <label>Length of Use:</label><br>
                  <span style="border-bottom: 1px solid #999; font-weight: bolder;">{{ $new_data['intake_drug']['length_use_10'] }}</span>
                </p>
            </th>
        </tr>
        @endif
        @if(!empty($new_data['intake_drug']['frequency_use_10']))
        <tr>
            <th style="font-family:sans-serif;color: #4D4D4D;font-size: 14px;padding: 5px;">
                <p style="width:80%; margin:auto; text-align: start;">
                  <label>Frequency of Use:</label><br>
                  <span style="border-bottom: 1px solid #999; font-weight: bolder;">{{ $new_data['intake_drug']['frequency_use_10'] }}</span>
                </p>
            </th>
        </tr>
        @endif
        @if(!empty($new_data['intake_drug']['amount_use_10']))
        <tr>
            <th style="font-family:sans-serif;color: #4D4D4D;font-size: 14px;padding: 5px;">
                <p style="width:80%; margin:auto; text-align: start;">
                  <label>Amount of Use:</label><br>
                  <span style="border-bottom: 1px solid #999; font-weight: bolder;">{{ $new_data['intake_drug']['amount_use_10'] }}</span>
                </p>
            </th>
        </tr>
        @endif
        @if(!empty($new_data['intake_drug']['date_last_use_10']))
        <tr>
            <th style="font-family:sans-serif;color: #4D4D4D;font-size: 14px;padding: 5px;">
                <p style="width:80%; margin:auto; text-align: start;">
                  <label>Date of Last Use:</label><br>
                  <span style="border-bottom: 1px solid #999; font-weight: bolder;">{{ $new_data['intake_drug']['date_last_use_10'] }}</span>
                </p>
            </th>
        </tr>
        @endif
        <tr>
            <th style="font-family:sans-serif;color: #4D4D4D;font-size: 14px;padding: 5px;">
                <p style="width:80%; margin:auto; text-align: start;">Have you ever misused or abused prescription drugs?</p>
            </th>
        </tr>
        <tr>
            <th style="font-family:sans-serif;color: #4D4D4D;font-size: 14px;padding: 5px;">

                @if($new_data['intake_drug']['drug_misused_or_abuse_radio'] == 'yes')
                <p style="width:80%; margin:auto; text-align: start;">Yes</p>
                @endif
                @if($new_data['intake_drug']['drug_misused_or_abuse_radio'] == 'no')
                <p style="width:80%; margin:auto; text-align: start;">No</p>
                @endif
            </th>
        </tr>
        <tr>
            <th style="font-family:sans-serif;color: #4D4D4D;font-size: 14px;padding: 5px;">
                <p style="width:80%; margin:auto; text-align: start;">
                  <label>More Information:</label><br>
                  <span style="border-bottom: 1px solid #999; font-weight: bolder;">{{ $new_data['intake_drug']['drug_misused_info'] }}</span>
                </p>
            </th>
        </tr>
        <tr>
            <th>
                <h1 style="font-family:sans-serif;color: #000;text-transform: capitalize;text-align: start;width:79.5%; margin:auto;padding-top: 10px;">Addition Information</h1>
            </th>
        </tr>
        <tr>
            <th>
                <h2 style="font-family:sans-serif;color: #2d6d95;text-transform: capitalize;text-align: start;width:79.5%; margin:auto;padding-top: 10px;">Work</h2>
            </th>
        </tr>
        <tr>
            <th style="font-family:sans-serif;color: #4D4D4D;font-size: 14px;padding: 5px;">
                <p style="width:80%; margin:auto; text-align: start;">
                  <label>Occupation:</label><br>
                  <span style="border-bottom: 1px solid #999; font-weight: bolder;">{{ $new_data['ai_occupation'] }}</span>
                </p>
            </th>
        </tr>
        <tr>
            <th style="font-family:sans-serif;color: #4D4D4D;font-size: 14px;padding: 5px;">
                <p style="width:80%; margin:auto; text-align: start;">
                  <label>Employer:</label><br>
                  <span style="border-bottom: 1px solid #999; font-weight: bolder;">{{ $new_data['ai_employer'] }}</span>
                </p>
            </th>
        </tr>
        <tr>
            <th style="font-family:sans-serif;color: #4D4D4D;font-size: 14px;padding: 5px;">
                <p style="width:80%; margin:auto; text-align: start;">Do you enjoy what you do?</p>
            </th>
        </tr>
        <tr>
            <th style="font-family:sans-serif;color: #4D4D4D;font-size: 14px;padding: 5px;">
                <p style="width:80%; margin:auto; text-align: start;">
                  <label>Enjoy:</label><br>
                  <span style="border-bottom: 1px solid #999; font-weight: bolder;">{{ $new_data['ai_what_you_do'] }}</span>
                </p>
            </th>
        </tr>
        <tr>
            <th>
                <h2 style="font-family:sans-serif;color: #2d6d95;text-transform: capitalize;text-align: start;width:79.5%; margin:auto;padding-top: 10px;">Marriage</h2>
            </th>
        </tr>
        <tr>
            <th style="font-family:sans-serif;color: #4D4D4D;font-size: 14px;padding: 5px;">
                <p style="width:80%; margin:auto; text-align: start;">Are you married?</p>
            </th>
        </tr>
        <tr>
            <th style="font-family:sans-serif;color: #4D4D4D;font-size: 14px;padding: 5px;">
                @if($new_data['m_married_radio'] == 'yes')
                    <p style="width:80%; margin:auto; text-align: start;">Yes</p>
                @endif
                @if($new_data['m_married_radio'] == 'no')
                    <p style="width:80%; margin:auto; text-align: start;">No</p>
                @endif
            </th>
        </tr>
        @if(!empty($new_data['m_married'] ))
        <tr>
            <th style="font-family:sans-serif;color: #4D4D4D;font-size: 14px;padding: 5px;">
                <p style="width:80%; margin:auto; text-align: start;">
                  <label>Date:</label><br>
                  <span style="border-bottom: 1px solid #999; font-weight: bolder;">{{ $new_data['m_married'] }}</span>
                </p>
            </th>
        </tr>
        @endif
        <tr>
            <th style="font-family:sans-serif;color: #4D4D4D;font-size: 14px;padding: 5px;">
                <p style="width:80%; margin:auto; text-align: start;">Have you ever been divorced?</p>
            </th>
        </tr>
        <tr>
            <th style="font-family:sans-serif;color: #4D4D4D;font-size: 14px;padding: 5px;">
                @if($new_data['m_divorced_radio'] == 'yes')
                <p style="width:80%; margin:auto; text-align: start;">Yes</p>
                @endif
                @if($new_data['m_divorced_radio'] == 'no')
                <p style="width:80%; margin:auto; text-align: start;">No</p>
                @endif
            </th>
        </tr>

        @if(!empty($new_data['m_divorced']))
        <tr>
            <th style="font-family:sans-serif;color: #4D4D4D;font-size: 14px;padding: 5px;">
                <p style="width:80%; margin:auto; text-align: start;">
                  <label>Date:</label><br>
                  <span style="border-bottom: 1px solid #999; font-weight: bolder;">{{ $new_data['m_divorced'] }}</span>
                </p>
            </th>
        </tr>
        @endif
        <tr>
            <th style="font-family:sans-serif;color: #4D4D4D;font-size: 14px;padding: 5px;">
                <p style="width:80%; margin:auto; text-align: start;">Do you have any prior marriages?</p>
            </th>
        </tr>
        <tr>
            <th style="font-family:sans-serif;color: #4D4D4D;font-size: 14px;padding: 5px;">
                @if($new_data['m_rwyp_radio'] == 'yes')
                    <p style="width:80%; margin:auto; text-align: start;">Yes</p>
                @endif
                @if($new_data['m_rwyp_radio'] == 'no')
                    <p style="width:80%; margin:auto; text-align: start;">No</p>
                @endif
            </th>
        </tr>
        {{-- <tr>
            <th style="font-family:sans-serif;color: #4D4D4D;font-size: 14px;padding: 5px;">
                <p style="width:80%; margin:auto; text-align: start;">
                  <label>Date:</label><br>
                  <span style="border-bottom: 1px solid #999; font-weight: bolder;">01/01/2023</span>
                </p>
            </th>
        </tr> --}}
        @if(!empty($new_data['how_many']))
        <tr>
            <th style="font-family:sans-serif;color: #4D4D4D;font-size: 14px;padding: 5px;">
                <p style="width:80%; margin:auto; text-align: start;">
                  <label>How many?</label><br>
                  <span style="border-bottom: 1px solid #999; font-weight: bolder;">{{ $new_data['how_many'] }}</span>
                </p>
            </th>
        </tr>
        @endif
        {{-- <tr>
            <th style="font-family:sans-serif;color: #4D4D4D;font-size: 14px;padding: 10px;">
                <ul style="width:80%; margin:auto; text-align: start;">
                <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos distinctio accusamus vel numquam illum iure.</li>
            </ul>
            </th>
        </tr> --}}
        <tr>
            <th style="font-family:sans-serif;color: #4D4D4D;font-size: 14px;padding: 5px;">
                <p style="width:80%; margin:auto; text-align: start;">How many Dates of divorce/death?</p>
            </th>
        </tr>
        <tr>
            <th style="font-family:sans-serif;color: #4D4D4D;font-size: 14px;padding: 5px;">
                <p style="width:80%; margin:auto; text-align: start;">Divorce</p>
            </th>
        </tr>
        @if(!empty($new_data['divorce_death_1']))
        <tr>
            <th style="font-family:sans-serif;color: #4D4D4D;font-size: 14px;padding: 5px;">
                <p style="width:80%; margin:auto; text-align: start;">
                  <label>Date:</label><br>
                  <span style="border-bottom: 1px solid #999; font-weight: bolder;">{{ $new_data['divorce_death_1'] }}</span>
                </p>
            </th>
        </tr>
        @endif
        @if(!empty($new_data['divorce_death_2']))
        <tr>
            <th style="font-family:sans-serif;color: #4D4D4D;font-size: 14px;padding: 5px;">
                <p style="width:80%; margin:auto; text-align: start;">
                  <label>Date:</label><br>
                  <span style="border-bottom: 1px solid #999; font-weight: bolder;">{{ $new_data['divorce_death_2'] }}</span>
                </p>
            </th>
        </tr>
        @endif
        @if(!empty($new_data['divorce_death_3']))
        <tr>
            <th style="font-family:sans-serif;color: #4D4D4D;font-size: 14px;padding: 5px;">
                <p style="width:80%; margin:auto; text-align: start;">
                  <label>Date:</label><br>
                  <span style="border-bottom: 1px solid #999; font-weight: bolder;">{{ $new_data['divorce_death_3'] }}</span>
                </p>
            </th>
        </tr>
        @endif
        @if(!empty($new_data['divorce_death_4']))
        <tr>
            <th style="font-family:sans-serif;color: #4D4D4D;font-size: 14px;padding: 5px;">
                <p style="width:80%; margin:auto; text-align: start;">
                  <label>Date:</label><br>
                  <span style="border-bottom: 1px solid #999; font-weight: bolder;">{{ $new_data['divorce_death_4'] }}</span>
                </p>
            </th>
        </tr>
        @endif
        @if(!empty($new_data['divorce_death_5']))
        <tr>
            <th style="font-family:sans-serif;color: #4D4D4D;font-size: 14px;padding: 5px;">
                <p style="width:80%; margin:auto; text-align: start;">
                  <label>Date:</label><br>
                  <span style="border-bottom: 1px solid #999; font-weight: bolder;">{{ $new_data['divorce_death_5'] }}</span>
                </p>
            </th>
        </tr>
        @endif
        <tr>
            <th style="font-family:sans-serif;color: #4D4D4D;font-size: 14px;padding: 5px;">
                <p style="width:80%; margin:auto; text-align: start;">How is your relationship with your partner?</p>
            </th>
        </tr>
        <tr>
            <th style="font-family:sans-serif;color: #4D4D4D;font-size: 14px;padding: 5px;">
                <p style="width:80%; margin:auto; text-align: start;">
                  <label>Relationship:</label><br>
                  <span style="border-bottom: 1px solid #999; font-weight: bolder;">{{ $new_data['m_relationship_with_your_partner'] }}</span>
                </p>
            </th>
        </tr>
        <tr>
            <th>
                <h2 style="font-family:sans-serif;color: #2d6d95;text-transform: capitalize;text-align: start;width:79.5%; margin:auto;padding-top: 10px;">Children</h2>
            </th>
        </tr>
        <tr>
            <th style="font-family:sans-serif;color: #4D4D4D;font-size: 14px;padding: 5px;">
                <p style="width:80%; margin:auto; text-align: start;">Do you have any children (including step-children)?</p>
            </th>
        </tr>
        <tr>
            <th style="font-family:sans-serif;color: #4D4D4D;font-size: 14px;padding: 5px;">
                @if($new_data['intake_children']['no_of_children_radio'] == 'yes')
                <p style="width:80%; margin:auto; text-align: start;">Yes</p>
                @endif
                @if($new_data['intake_children']['no_of_children_radio'] == 'no')
                <p style="width:80%; margin:auto; text-align: start;">No</p>
                @endif
            </th>
        </tr>
        @if(!empty($new_data['intake_children']['name_child_1'] ))
        <tr>
            <th style="font-family:sans-serif;color: #4D4D4D;font-size: 14px;padding: 5px;">
                <p style="width:80%; margin:auto; text-align: start;">
                  <label>Number of Children:</label><br>
                  <span style="border-bottom: 1px solid #999; font-weight: bolder;">{{ $new_data['intake_children']['no_of_children'] }}</span>
                </p>
            </th>
        </tr>
        <tr>
            <th style="font-family:sans-serif;color: #4D4D4D;font-size: 14px;padding: 5px;">
                <p style="width:80%; margin:auto; text-align: start;">
                  <label>Name of Child:</label><br>
                  <span style="border-bottom: 1px solid #999; font-weight: bolder;">{{ $new_data['intake_children']['name_child_1'] }}</span>
                </p>
            </th>
        </tr>
        <tr>
            <th style="font-family:sans-serif;color: #4D4D4D;font-size: 14px;padding: 5px;">
                <p style="width:80%; margin:auto; text-align: start;">
                  <label>Age of Child:</label><br>
                  <span style="border-bottom: 1px solid #999; font-weight: bolder;">{{ $new_data['intake_children']['age_of_child_1'] }}</span>
                </p>
            </th>
        </tr>
        <tr>
            <th style="font-family:sans-serif;color: #4D4D4D;font-size: 14px;padding: 5px;">
                <p style="width:80%; margin:auto; text-align: start;">
                  <label>Relationship:</label><br>
                  <span style="border-bottom: 1px solid #999; font-weight: bolder;">{{ $new_data['intake_children']['relationship_with_child_1'] }}</span>
                </p>
            </th>
        </tr>
        @endif
        @if(!empty($new_data['intake_children']['name_child_2'] ))

        <tr>
            <th style="font-family:sans-serif;color: #4D4D4D;font-size: 14px;padding: 5px;">
                <p style="width:80%; margin:auto; text-align: start;">
                  <label>Name of Child:</label><br>
                  <span style="border-bottom: 1px solid #999; font-weight: bolder;">{{ $new_data['intake_children']['name_child_2'] }}</span>
                </p>
            </th>
        </tr>
        <tr>
            <th style="font-family:sans-serif;color: #4D4D4D;font-size: 14px;padding: 5px;">
                <p style="width:80%; margin:auto; text-align: start;">
                  <label>Age of Child:</label><br>
                  <span style="border-bottom: 1px solid #999; font-weight: bolder;">{{ $new_data['intake_children']['age_of_child_2'] }}</span>
                </p>
            </th>
        </tr>
        <tr>
            <th style="font-family:sans-serif;color: #4D4D4D;font-size: 14px;padding: 5px;">
                <p style="width:80%; margin:auto; text-align: start;">
                  <label>Relationship:</label><br>
                  <span style="border-bottom: 1px solid #999; font-weight: bolder;">{{ $new_data['intake_children']['relationship_with_child_2'] }}</span>
                </p>
            </th>
        </tr>
        @endif
        @if(!empty($new_data['intake_children']['name_child_3'] ))
        <tr>
            <th style="font-family:sans-serif;color: #4D4D4D;font-size: 14px;padding: 5px;">
                <p style="width:80%; margin:auto; text-align: start;">
                  <label>Name of Child:</label><br>
                  <span style="border-bottom: 1px solid #999; font-weight: bolder;">{{ $new_data['intake_children']['name_child_3'] }}</span>
                </p>
            </th>
        </tr>
        <tr>
            <th style="font-family:sans-serif;color: #4D4D4D;font-size: 14px;padding: 5px;">
                <p style="width:80%; margin:auto; text-align: start;">
                  <label>Age of Child:</label><br>
                  <span style="border-bottom: 1px solid #999; font-weight: bolder;">{{ $new_data['intake_children']['age_of_child_3'] }}</span>
                </p>
            </th>
        </tr>
        <tr>
            <th style="font-family:sans-serif;color: #4D4D4D;font-size: 14px;padding: 5px;">
                <p style="width:80%; margin:auto; text-align: start;">
                  <label>Relationship:</label><br>
                  <span style="border-bottom: 1px solid #999; font-weight: bolder;">{{ $new_data['intake_children']['relationship_with_child_3'] }}</span>
                </p>
            </th>
        </tr>
        @endif
        @if(!empty($new_data['intake_children']['name_child_4'] ))
        <tr>
            <th style="font-family:sans-serif;color: #4D4D4D;font-size: 14px;padding: 5px;">
                <p style="width:80%; margin:auto; text-align: start;">
                  <label>Name of Child:</label><br>
                  <span style="border-bottom: 1px solid #999; font-weight: bolder;">{{ $new_data['intake_children']['name_child_4'] }}</span>
                </p>
            </th>
        </tr>
        <tr>
            <th style="font-family:sans-serif;color: #4D4D4D;font-size: 14px;padding: 5px;">
                <p style="width:80%; margin:auto; text-align: start;">
                  <label>Age of Child:</label><br>
                  <span style="border-bottom: 1px solid #999; font-weight: bolder;">{{ $new_data['intake_children']['age_of_child_4'] }}</span>
                </p>
            </th>
        </tr>
        <tr>
            <th style="font-family:sans-serif;color: #4D4D4D;font-size: 14px;padding: 5px;">
                <p style="width:80%; margin:auto; text-align: start;">
                  <label>Relationship:</label><br>
                  <span style="border-bottom: 1px solid #999; font-weight: bolder;">{{ $new_data['intake_children']['relationship_with_child_4'] }}</span>
                </p>
            </th>
        </tr>
        @endif
        @if(!empty($new_data['intake_children']['name_child_5'] ))

        <tr>
            <th style="font-family:sans-serif;color: #4D4D4D;font-size: 14px;padding: 5px;">
                <p style="width:80%; margin:auto; text-align: start;">
                  <label>Name of Child:</label><br>
                  <span style="border-bottom: 1px solid #999; font-weight: bolder;">{{ $new_data['intake_children']['name_child_5'] }}</span>
                </p>
            </th>
        </tr>
        <tr>
            <th style="font-family:sans-serif;color: #4D4D4D;font-size: 14px;padding: 5px;">
                <p style="width:80%; margin:auto; text-align: start;">
                  <label>Age of Child:</label><br>
                  <span style="border-bottom: 1px solid #999; font-weight: bolder;">{{ $new_data['intake_children']['age_of_child_5'] }}</span>
                </p>
            </th>
        </tr>
        <tr>
            <th style="font-family:sans-serif;color: #4D4D4D;font-size: 14px;padding: 5px;">
                <p style="width:80%; margin:auto; text-align: start;">
                  <label>Relationship:</label><br>
                  <span style="border-bottom: 1px solid #999; font-weight: bolder;">{{ $new_data['intake_children']['relationship_with_child_5'] }}</span>
                </p>
            </th>
        </tr>
        @endif
        <tr>
            <th>
                <h2 style="font-family:sans-serif;color: #2d6d95;text-transform: capitalize;text-align: start;width:79.5%; margin:auto;padding-top: 10px;">Religion/Spirituality</h2>
            </th>
        </tr>
        <tr>
            <th style="font-family:sans-serif;color: #4D4D4D;font-size: 14px;padding: 5px;">
                <p style="width:80%; margin:auto; text-align: start;">What is your religion?</p>
            </th>
        </tr>
        <tr>
            <th style="font-family:sans-serif;color: #4D4D4D;font-size: 14px;padding: 5px;">
                <p style="width:80%; margin:auto; text-align: start;">
                  <label>Religion:</label><br>
                  <span style="border-bottom: 1px solid #999; font-weight: bolder;">{{ $new_data['religion'] }}</span>
                </p>
            </th>
        </tr>
        <tr>
            <th style="font-family:sans-serif;color: #4D4D4D;font-size: 14px;padding: 5px;">
                <p style="width:80%; margin:auto; text-align: start;">Is spirituality important to you?</p>
            </th>
        </tr>
        <tr>
            <th style="font-family:sans-serif;color: #4D4D4D;font-size: 14px;padding: 5px;">
                <p style="width:80%; margin:auto; text-align: start;">
                  <label>Spirituality:</label><br>
                  <span style="border-bottom: 1px solid #999; font-weight: bolder;">{{ $new_data['spirituality'] }}</span>
                </p>
            </th>
        </tr>
        <tr>
            <th>
                <h1 style="font-family:sans-serif;color: #000;text-transform: capitalize;text-align: start;width:79.5%; margin:auto;padding-top: 10px;">Family History</h1>
            </th>
        </tr>
        <tr>
            <th style="font-family:sans-serif;color: #4D4D4D;font-size: 14px;padding: 5px;">
                <p style="width:80%; margin:auto; text-align: start;">Were you adopted?</p>
            </th>
        </tr>
        <tr>
            <th style="font-family:sans-serif;color: #4D4D4D;font-size: 14px;padding: 5px;">

                @if($new_data['adopted_radio'] == 'yes')
                    <p style="width:80%; margin:auto; text-align: start;">Yes</p>
                @endif
                @if($new_data['adopted_radio'] == 'no')
                    <p style="width:80%; margin:auto; text-align: start;">No</p>
                @endif
            </th>
        </tr>
        <tr>
            <th style="font-family:sans-serif;color: #4D4D4D;font-size: 14px;padding: 5px;">
                <p style="width:80%; margin:auto; text-align: start;">How old were you when you were adopted?</p>
            </th>
        </tr>
        <tr>
            <th style="font-family:sans-serif;color: #4D4D4D;font-size: 14px;padding: 5px;">
                <p style="width:80%; margin:auto; text-align: start;">
                  <label>Adopted Age:</label><br>
                  <span style="border-bottom: 1px solid #999; font-weight: bolder;">{{ $new_data['adopted_age'] }}</span>
                </p>
            </th>
        </tr>
        <tr>
            <th style="font-family:sans-serif;color: #4D4D4D;font-size: 14px;padding: 5px;">
                <p style="width:80%; margin:auto; text-align: start;">Do you have a relationship with your biological parents?</p>
            </th>
        </tr>

        @if(!empty($new_data['biological_parents']))
        <tr>
            <th style="font-family:sans-serif;color: #4D4D4D;font-size: 14px;padding: 5px;">
                <p style="width:80%; margin:auto; text-align: start;">
                  <label>Biological Parents:</label><br>
                  <span style="border-bottom: 1px solid #999; font-weight: bolder;">{{ $new_data['biological_parents'] }}</span>
                </p>
            </th>
        </tr>
        @endif
        <tr>
            <th style="font-family:sans-serif;color: #4D4D4D;font-size: 14px;padding: 5px;">
                <p style="width:80%; margin:auto; text-align: start;">
                  <label>Relationship of Parents:</label><br>
                  <span style="border-bottom: 1px solid #999; font-weight: bolder;">{{ $new_data['relationship_of_parents'] }}</span>
                </p>
            </th>
        </tr>
        <tr>
            <th style="font-family:sans-serif;color: #4D4D4D;font-size: 14px;padding: 5px;">
                <p style="width:80%; margin:auto; text-align: start;">Is your mother living?</p>
            </th>
        </tr>
        <tr>
            <th style="font-family:sans-serif;color: #4D4D4D;font-size: 14px;padding: 5px;">
                @if($new_data['is_mother_living_radio'] == 'yes')
                <p style="width:80%; margin:auto; text-align: start;">Yes</p>
                @endif
                @if($new_data['is_mother_living_radio'] == 'no')
                <p style="width:80%; margin:auto; text-align: start;">No</p>
                @endif
            </th>
        </tr>
        <tr>
            <th style="font-family:sans-serif;color: #4D4D4D;font-size: 14px;padding: 5px;">
                <p style="width:80%; margin:auto; text-align: start;">How is/was your relationship with your mother?</p>
            </th>
        </tr>
        <tr>
            <th style="font-family:sans-serif;color: #4D4D4D;font-size: 14px;padding: 5px;">
                <p style="width:80%; margin:auto; text-align: start;">
                  <label>Relationship:</label><br>
                  <span style="border-bottom: 1px solid #999; font-weight: bolder;">{{ $new_data['relationship_with_mother'] }}</span>
                </p>
            </th>
        </tr>
        <tr>
            <th style="font-family:sans-serif;color: #4D4D4D;font-size: 14px;padding: 5px;">
                <p style="width:80%; margin:auto; text-align: start;">Is your father living?</p>
            </th>
        </tr>
        <tr>
            <th style="font-family:sans-serif;color: #4D4D4D;font-size: 14px;padding: 5px;">
                @if($new_data['father_living_radio'] == 'yes')
                    <p style="width:80%; margin:auto; text-align: start;">Yes</p>
                @endif
                @if($new_data['father_living_radio'] == 'no')
                <p style="width:80%; margin:auto; text-align: start;">No</p>
            @endif
            </th>
        </tr>
        <tr>
            <th style="font-family:sans-serif;color: #4D4D4D;font-size: 14px;padding: 5px;">
                <p style="width:80%; margin:auto; text-align: start;">How is/was your relationship with your father?</p>
            </th>
        </tr>
        <tr>
            <th style="font-family:sans-serif;color: #4D4D4D;font-size: 14px;padding: 5px;">
                <p style="width:80%; margin:auto; text-align: start;">
                  <label>Relationship:</label><br>
                  <span style="border-bottom: 1px solid #999; font-weight: bolder;">{{ $new_data['relationship_with_father'] }}</span>
                </p>
            </th>
        </tr>
        <tr>
            <th style="font-family:sans-serif;color: #4D4D4D;font-size: 14px;padding: 5px;">
                <p style="width:80%; margin:auto; text-align: start;">How many siblings do you have?</p>
            </th>
        </tr>
        <tr>
            <th style="font-family:sans-serif;color: #4D4D4D;font-size: 14px;padding: 5px;">
                <p style="width:80%; margin:auto; text-align: start;">
                  <label>Sibling:</label><br>
                  <span style="border-bottom: 1px solid #999; font-weight: bolder;">{{ $new_data['intake_siblings'][0]['sibling_count'] }}</span>
                </p>
            </th>
        </tr>
        <tr>
            <th style="font-family:sans-serif;color: #4D4D4D;font-size: 14px;padding: 5px;">
                <p style="width:80%; margin:auto; text-align: start;">What is your birth order?</p>
            </th>
        </tr>
        <tr>
            <th style="font-family:sans-serif;color: #4D4D4D;font-size: 14px;padding: 5px;">
                <p style="width:80%; margin:auto; text-align: start;">
                  <label>Birth Order:</label><br>
                  <span style="border-bottom: 1px solid #999; font-weight: bolder;">{{ $new_data['birth_order'] }}</span>
                </p>
            </th>
        </tr>
        <tr>
            <th>
                <h2 style="font-family:sans-serif;color: #2d6d95;text-transform: capitalize;text-align: start;width:79.5%; margin:auto;padding-top: 10px;">Medical Conditions</h2>
            </th>
        </tr>
        <tr>
            <th style="font-family:sans-serif;color: #4D4D4D;font-size: 14px;padding: 5px;">
                <p style="width:80%; margin:auto; text-align: start;">Does anyone in your family have any medical conditions? If so, specify medical condition and member of family affected.</p>
            </th>
        </tr>
        <tr>
            <th style="font-family:sans-serif;color: #4D4D4D;font-size: 14px;padding: 5px;">
                <p style="width:80%; margin:auto; text-align: start;">
                  <label>Medical Conditions:</label><br>
                  <span style="border-bottom: 1px solid #999; font-weight: bolder;">{{ $new_data['medical_conditions'] }}</span>
                </p>
            </th>
        </tr>
        <tr>
            <th style="font-family:sans-serif;color: #4D4D4D;font-size: 14px;padding: 5px;">
                <p style="width:80%; margin:auto; text-align: start;">Do you have any family history of mental illness? If so, specify diagnosis and member of family affected.</p>
            </th>
        </tr>
        <tr>
            <th style="font-family:sans-serif;color: #4D4D4D;font-size: 14px;padding: 5px;">
                <p style="width:80%; margin:auto; text-align: start;">
                  <label>Mental Illness:</label><br>
                  <span style="border-bottom: 1px solid #999; font-weight: bolder;">{{ $new_data['mental_illness'] }}</span>
                </p>
            </th>
        </tr>
        <tr>
            <th style="font-family:sans-serif;color: #4D4D4D;font-size: 14px;padding: 5px;">
                <p style="width:80%; margin:auto; text-align: start;">Is there anything else that you want your therapist to know?</p>
            </th>
        </tr>
        <tr>
            <th style="font-family:sans-serif;color: #4D4D4D;font-size: 14px;padding: 5px;">
                <p style="width:80%; margin:auto; text-align: start;">
                  <label>Therapist:</label><br>
                  <span style="border-bottom: 1px solid #999; font-weight: bolder;">{{ $new_data['anything_else_know_therapist']}}</span>
                </p>
            </th>
        </tr>

        <tr>
            <th style="padding-top: 10px;padding-bottom: 10px;"><img src="{{$message->embed(asset('assets/images/logo.png'))}}" alt=""
                    style="width:400px;border-radius: 20%;height: 100px;object-fit: none;"></th>
        </tr>


    </table>

</body>
</html>
