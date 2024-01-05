<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sliding Scale Fee Application</title>

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
                <h1 style="font-family:sans-serif;color: #2d6d95;text-transform: capitalize;text-align: center;width:79%; margin:auto; padding-top: 20px;padding-bottom: 20px;">Sliding Scale Fee Application</h1>
            </th>
        </tr>
        <tr>
            <th style="font-family:sans-serif;color: #4D4D4D;font-size: 14px;padding: 5px;">
                <p style="width:80%; margin:auto; text-align: start;">
                  <label>Date:</label><br>
                  <span style="border-bottom: 1px solid #999; font-weight: bolder;">{{ $new_data['date'] }}</span>
                </p>
            </th>
        </tr>
        <tr>
            <th style="font-family:sans-serif;color: #4D4D4D;font-size: 14px;padding: 5px;">
                <p style="width:80%; margin:auto; text-align: start;">
                  <label>Name:</label><br>
                  <span style="border-bottom: 1px solid #999; font-weight: bolder;">{{ $new_data['name'] }}</span>
                </p>
            </th>
        </tr>
        <tr>
            <th style="font-family:sans-serif;color: #4D4D4D;font-size: 14px;padding: 5px;">
                <p style="width:80%; margin:auto; text-align: start;">Sliding scale rate is based on family size and annual income. This form will be help me to figure out which level of the sliding scale you qualify for. This application will be reevaluated every six months or in the event of financial change in the household. The sliding scale rate is not applicable to anyone with insurance coverage that is in network with Accepted Therapy Services.</p>
            </th>
        </tr>
        <tr>
            <th>
                <h2 style="font-family:sans-serif;color: #2d6d95;text-transform: capitalize;text-align: start;width:79.5%; margin:auto;padding-top: 5px;">Household Members</h2>
            </th>
        </tr>
        <tr>
            <th style="font-family:sans-serif;color: #4D4D4D;font-size: 14px;padding: 5px;">
                <p style="width:80%; margin:auto; text-align: start;">Please list all dependent members of your household and their date of birth. If you have a dependent who is over the age of 18, additional information may be requested.</p>
            </th>
        </tr>
        <tr>
            <th style="font-family:sans-serif;color: #4D4D4D;font-size: 14px;padding: 5px;">
                <p style="width:80%; margin:auto; text-align: start; display: flex; align-items: center; justify-content: space-between;">


                    <span>
                    <label style="font-weight: bolder;color: #2d6d95;">S.No:</label><br>
                    @if(!empty($new_data['get_scale_household']))
                    @foreach ($new_data['get_scale_household'] as $members )
                    <span style="border-bottom: 1px solid #999;font-weight: bolder;">{{$members['id']}}</span>
                    </span>
                    @endforeach
                    @endif


                    <span>
                    <label style="font-weight: bolder;color: #2d6d95;">Name:</label><br>
                    @if(!empty($new_data['get_scale_household'] ))
                    @foreach ($new_data['get_scale_household'] as $members )
                    <span style="border-bottom: 1px solid #999;font-weight: bolder;">{{$members['name']}}</span>
                    </span>
                    @endforeach
                    @endif


                    <span>
                    <label style="font-weight: bolder;color: #2d6d95;">Relationship to you:</label><br>
                    @if(!empty($new_data['get_scale_household']))
                    @foreach ($new_data['get_scale_household'] as $members )
                    <span style="border-bottom: 1px solid #999;font-weight: bolder;">{{$members['relationship_to_you']}}</span>
                    </span>
                    @endforeach
                    @endif


                    <span>
                    <label style="font-weight: bolder;color: #2d6d95;">Date:</label><br>
                    @if(!empty($new_data['get_scale_household']))
                    @foreach ($new_data['get_scale_household'] as $members )
                    <span style="border-bottom: 1px solid #999;font-weight: bolder;">{{$members['date_of_birth']}}</span>

                    </span>
                    @endforeach
                    @endif



                </p>
            </th>
        </tr>
        <tr>
            <th>
                <h2 style="font-family:sans-serif;color: #2d6d95;text-transform: capitalize;text-align: start;width:79.5%; margin:auto;padding-top: 5px;">Household Expenses</h2>
            </th>
        </tr>
        <tr>
            <th style="font-family:sans-serif;color: #4D4D4D;font-size: 14px;padding: 5px;">
                <p style="width:80%; margin:auto; text-align: start;">This is a list of all of your monthly household expenses. I will take these expenses into consideration when determining your sliding scale fee rate.</p>
            </th>
        </tr>

        @if(!empty($new_data['rent_mortgage_amount'] ))
        <tr>
            <th style="font-family:sans-serif;color: #4D4D4D;font-size: 14px;padding: 5px;">
                <p style="width:80%; margin:auto; text-align: start;">
                  <label>Rent/Mortgage:</label><br>
                  <span style="border-bottom: 1px solid #999; font-weight: bolder;">${{$new_data['rent_mortgage_amount'] }}</span>
                </p>
            </th>
        </tr>
        @endif
        @if(!empty($new_data['electricity_amount'] ))
        <tr>
            <th style="font-family:sans-serif;color: #4D4D4D;font-size: 14px;padding: 5px;">
                <p style="width:80%; margin:auto; text-align: start;">
                  <label>Electricity:</label><br>
                  <span style="border-bottom: 1px solid #999; font-weight: bolder;">${{$new_data['electricity_amount'] }}</span>
                </p>
            </th>
        </tr>
        @endif
        @if(!empty($new_data['water_sewer_gas_amount'] ))
        <tr>
            <th style="font-family:sans-serif;color: #4D4D4D;font-size: 14px;padding: 5px;">
                <p style="width:80%; margin:auto; text-align: start;">
                  <label>Water/Sewer/Gas:</label><br>
                  <span style="border-bottom: 1px solid #999; font-weight: bolder;">${{$new_data['water_sewer_gas_amount'] }}</span>
                </p>
            </th>
        </tr>
        @endif
        @if(!empty($new_data['car_payments_amount'] ))
        <tr>
            <th style="font-family:sans-serif;color: #4D4D4D;font-size: 14px;padding: 5px;">
                <p style="width:80%; margin:auto; text-align: start;">
                  <label>Car Payment(s):</label><br>
                  <span style="border-bottom: 1px solid #999; font-weight: bolder;">${{ $new_data['car_payments_amount'] }}</span>
                </p>
            </th>
        </tr>
        @endif
        @if(!empty($new_data['phone_amount'] ))
        <tr>
            <th style="font-family:sans-serif;color: #4D4D4D;font-size: 14px;padding: 5px;">
                <p style="width:80%; margin:auto; text-align: start;">
                  <label>Phone:</label><br>
                  <span style="border-bottom: 1px solid #999; font-weight: bolder;">${{ $new_data['phone_amount'] }}</span>
                </p>
            </th>
        </tr>
        @endif
        @if(!empty($new_data['insurance_car_home_renter_amount '] ))
        <tr>
            <th style="font-family:sans-serif;color: #4D4D4D;font-size: 14px;padding: 5px;">
                <p style="width:80%; margin:auto; text-align: start;">
                  <label>Insurances (car, home, renter):</label><br>
                  <span style="border-bottom: 1px solid #999; font-weight: bolder;">${{ $new_data['insurance_car_home_renter_amount'] }}</span>
                </p>
            </th>
        </tr>
        @endif
        @if(!empty($new_data['other_explain_amount'] ))

        <tr>
            <th style="font-family:sans-serif;color: #4D4D4D;font-size: 14px;padding: 5px;">
                <p style="width:80%; margin:auto; text-align: start;">
                  <label>Other (Explain):</label><br>
                  <span style="border-bottom: 1px solid #999; font-weight: bolder;">${{ $new_data['other_explain_amount'] }}</span>
                </p>
            </th>
        </tr>
        @endif
        <tr>
            <th>
                <h2 style="font-family:sans-serif;color: #2d6d95;text-transform: capitalize;text-align: start;width:79.5%; margin:auto;padding-top: 5px;">Household Income</h2>
            </th>
        </tr>
        <tr>
            <th style="font-family:sans-serif;color: #4D4D4D;font-size: 14px;padding: 5px;">
                <p style="width:80%; margin:auto; text-align: start;">Total all sources of income for each box and place the total amount in the second column. Then denote whether the income is received monthly or annually.</p>
            </th>
        </tr>
        <tr>
            <th style="font-family:sans-serif;color: #4D4D4D;font-size: 14px;padding: 5px;">
                @if(!empty($new_data['frequency_1']))
                <p style="width:80%; margin:auto; text-align: start; display: flex; align-items: center; justify-content: space-between;">
                    <span>
                    <label style="font-weight: bolder;color: #2d6d95;">Source of Income:</label><br>
                    @foreach ( json_decode($new_data['frequency_1']) as  $frequency1)
                    @if($frequency1 == 1)
                        <span s
                        tyle="border-bottom: 1px solid #999;font-weight: bolder;">Wages, salaries, or tips</span>
                    @endif
                    @if($frequency1 == 2)
                        <span style="border-bottom: 1px solid #999;font-weight: bolder;">Unemployment Worker’s comp. Social Security Disability Public assistance Survivor benefits Pension or retirement</span>
                    @endif
                    @if($frequency1 == 3)
                        <span style="border-bottom: 1px solid #999;font-weight: bolder;">Wages, salaries, or tips</span>
                    @endif
                    @endforeach
                    </span>
                    <span>
                    <label style="font-weight: bolder;color: #2d6d95;">Amount:</label><br>
                    <span style="border-bottom: 1px solid #999;font-weight: bolder;">${{ $new_data['amount_1'] }}</span>
                    </span>
                    <span>
                    <label style="font-weight: bolder;color: #2d6d95;">Frequency:</label><br>
                    @foreach ( json_decode($new_data['frequency_1']) as  $frequency1)
                        @if($frequency1 == 1)
                        <span style="border-bottom: 1px solid #999;font-weight: bolder;">monthly</span>
                        @endif
                        @if($frequency1 == 2)
                        <span style="border-bottom: 1px solid #999;font-weight: bolder;">Yearly</span>
                        @endif
                    @endforeach
                    </span>
                </p>
                @endif
                @if(!empty($new_data['frequency_2']))
                <p style="width:80%; margin:auto; text-align: start; display: flex; align-items: center; justify-content: space-between;">
                    <span>
                    <label style="font-weight: bolder;color: #2d6d95;">Source of Income:</label><br>
                    <span style="border-bottom: 1px solid #999;font-weight: bolder;">Unemployment Worker’s comp. Social Security Disability Public assistance Survivor benefits Pension or retirement</span>
                    </span>
                    <span>
                    <label style="font-weight: bolder;color: #2d6d95;">Amount:</label><br>
                    <span style="border-bottom: 1px solid #999;font-weight: bolder;">${{ $new_data['amount_2'] }}</span>
                    </span>
                    <span>
                    <label style="font-weight: bolder;color: #2d6d95;">Frequency:</label><br>
                    @foreach ( json_decode($new_data['frequency_2']) as  $frequency2)
                        @if($frequency2 == 1)
                        <span style="border-bottom: 1px solid #999;font-weight: bolder;">monthly</span>
                        @endif
                        @if($frequency2 == 2)
                        <span style="border-bottom: 1px solid #999;font-weight: bolder;">Yearly</span>
                        @endif
                    @endforeach
                    </span>
                </p>
                @endif
                @if(!empty($new_data['frequency_3']))

                <p style="width:80%; margin:auto; text-align: start; display: flex; align-items: center; justify-content: space-between;">
                    <span>
                    <label style="font-weight: bolder;color: #2d6d95;">Source of Income:</label><br>
                    <span style="border-bottom: 1px solid #999;font-weight: bolder;">Child Support Rent Royalties Alimony</span>
                    </span>
                    <span>
                    <label style="font-weight: bolder;color: #2d6d95;">Amount:</label><br>
                    <span style="border-bottom: 1px solid #999;font-weight: bolder;">${{ $new_data['amount_3'] }}</span>
                    </span>
                    <span>
                    <label style="font-weight: bolder;color: #2d6d95;">Frequency:</label><br>
                    @foreach ( json_decode($new_data['frequency_3']) as  $frequency3)
                        @if($frequency3 == 1)
                        <span style="border-bottom: 1px solid #999;font-weight: bolder;">monthly</span>
                        @endif
                        @if($frequency3 == 2)
                        <span style="border-bottom: 1px solid #999;font-weight: bolder;">Yearly</span>
                        @endif
                    @endforeach
                    </span>
                </p>
                @endif

                @if(!empty($new_data['frequency_4']))

                <p style="width:80%; margin:auto; text-align: start; display: flex; align-items: center; justify-content: space-between;">
                    <span>
                    <label style="font-weight: bolder;color: #2d6d95;">Source of Income:</label><br>
                    <span style="border-bottom: 1px solid #999;font-weight: bolder;">Child Support Rent Royalties Alimony</span>
                    </span>
                    <span>
                    <label style="font-weight: bolder;color: #2d6d95;">Amount:</label><br>
                    <span style="border-bottom: 1px solid #999;font-weight: bolder;">${{ $new_data['amount_4'] }}</span>
                    </span>
                    <span>
                    <label style="font-weight: bolder;color: #2d6d95;">Frequency:</label><br>
                    @foreach ( json_decode($new_data['frequency_4']) as  $frequency4)
                        @if($frequency4 == 1)
                        <span style="border-bottom: 1px solid #999;font-weight: bolder;">monthly</span>
                        @endif
                        @if($frequency4 == 2)
                        <span style="border-bottom: 1px solid #999;font-weight: bolder;">Yearly</span>
                        @endif
                    @endforeach
                    </span>
                </p>
                @endif
            </th>
        </tr>
        <tr>
            <th style="font-family:sans-serif;color: #4D4D4D;font-size: 12px;padding: 5px;">
                <p style="width:80%; margin:auto; text-align: center;">(Please be available to provide supporting documentation of your income upon request.)</p>
            </th>
        </tr>
        <tr>
            <th style="font-family:sans-serif;color: #4D4D4D;font-size: 14px;padding: 5px;">
                <p style="width:80%; margin:auto; text-align: start;">I  <span style="border-bottom: 1px solid #999; font-weight: bolder;">{{ $new_data['your_name'] }}</span> understand that I am being considered for a sliding scale fee at Accepted Therapy Services.
                    I also understand that I may not meet criteria for a sliding scale. I further understand that that if my financial situation changes, I am expected to notify Accepted Therapy Services prior to my next session so that my sliding scale rate can be reassessed for need.</p>
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
                <p style="width:80%; margin:auto; text-align: start;">{{($new_data['created_at'])->format('m/d/Y')}}</p>
            </th>
        </tr>


        <tr>
            <th style="padding-top: 10px;padding-bottom: 10px;"><img src="{{$message->embed(asset('assets/images/logo.png'))}}" alt=""
                    style="width:400px;border-radius: 20%;height: 100px;object-fit: none;"></th>
        </tr>


    </table>

</body>
</html>
