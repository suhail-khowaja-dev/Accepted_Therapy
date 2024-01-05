<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Credit/Debit Card Payment Authorization</title>

    <style>
        .for-blur-background tbody {
            backdrop-filter: blur(2px);
        }
    </style>
</head>

<body>

    <table class="for-blur-background"
    style="height:100%;width:60%;margin-left:auto;margin-right: auto;background-repeat: no-repeat;background-size: cover; background-image:url({{$message->embed(asset('assets/images/background.png'))}});">
        <tr>
            <th>
                <img src='{{$message->embed(asset('assets/images/logo.png'))}}' alt=""
                    style="width:400px;border-radius: 20%;height: 100px;object-fit: none;">
            </th>
        </tr>
        <tr>
            <th>
                <h1 style="font-family:sans-serif;color: #2d6d95;text-transform: capitalize;text-align: center;width:79%; margin:auto; padding-top: 20px;padding-bottom: 20px;">Credit/Debit Card Payment Authorization</h1>
            </th>
        </tr>
        <tr>
            <th style="font-family:sans-serif;color: #4D4D4D;font-size: 14px;padding: 5px;">
                <p style="width:80%; margin:auto; text-align: start;">
                  <label>Date:</label><br>
                  <span style="border-bottom: 1px solid #999; font-weight: bolder;">{{$new_data['date'] }}</span>
                </p>
            </th>
        </tr>
        <tr>
            <th style="font-family:sans-serif;color: #4D4D4D;font-size: 14px;padding: 5px;">
                <p style="width:80%; margin:auto; text-align: start;">
                  <label>Name:</label><br>
                  <span style="border-bottom: 1px solid #999; font-weight: bolder;">{{$new_data['name'] }}</span>
                </p>
            </th>
        </tr>
        <tr>
            <th style="font-family:sans-serif;color: #4D4D4D;font-size: 14px;padding: 10px;">
                <ul style="width:80%; margin:auto; text-align: start;">
                    @if(!empty($new_data['credit_card_checkbox_details']))
                    @foreach(json_decode($new_data['credit_card_checkbox_details']) as $val)
                    @if($val == 1)
                        <li>I understand that payment is due at the time of service, including treatment expenses that are not covered by insurance, such as missed appointments, late cancelations, deductibles, and co-payments. I will have the option with paying with check, cash, or credit card at the time of service.</li>
                    @endif
                    @if($val == 2)
                    <li>I recognize that for all credit or debit card transactions, Accepted Therapy Services charges a $2.00 transaction convenience fee. This fee will be applied to each credit card transactions that occurs after April 4, 2022.</li>
                    @endif
                    @if($val == 3)
                    <li>If I do not cancel at least 24 hours before my appointment or I do not show up to my appointment, I recognize that Accepted Therapy Services will charge my card a late cancel or no-show fee of $75. If there are unforeseen circumstance, I will contact my therapist and inform them and I recognize that the late fee will be at their discretion in the event of these circumstances.</li>
                    @endif
                    @endforeach
                    @endif

            </ul>
            </th>
        </tr>
        <tr>
            <th style="font-family:sans-serif;color: #4D4D4D;font-size: 14px;padding: 5px;">
                <p style="width:80%; margin:auto; text-align: start;">
                  <label>Name on Card:</label><br>
                  <span style="border-bottom: 1px solid #999; font-weight: bolder;">{{$new_data['name_on_card'] }}</span>
                </p>
            </th>
        </tr>
        <tr>
            <th style="font-family:sans-serif;color: #4D4D4D;font-size: 14px;padding: 5px;">
                <p style="width:80%; margin:auto; text-align: start;">
                  <label>Card Type:</label><br>
                  @if($new_data['card_type'] == 1 )
                  <span style="border-bottom: 1px solid #999; font-weight: bolder;">American Express</span>
                  @endif
                  @if($new_data['card_type'] == 2 )
                  <span style="border-bottom: 1px solid #999; font-weight: bolder;">Discover</span>
                  @endif
                  @if($new_data['card_type'] == 3 )
                  <span style="border-bottom: 1px solid #999; font-weight: bolder;">Mastercard</span>
                  @endif
                  @if($new_data['card_type'] == 4 )
                  <span style="border-bottom: 1px solid #999; font-weight: bolder;">Visa</span>
                  @endif
                </p>
            </th>
        </tr>
        <tr>
            <th style="font-family:sans-serif;color: #4D4D4D;font-size: 14px;padding: 5px;">
                <p style="width:80%; margin:auto; text-align: start;">
                  <label>Last 4 Card Number:</label><br>
                  <span style="border-bottom: 1px solid #999; font-weight: bolder;">{{ $new_data['last_four_card_no']}}</span>
                </p>
            </th>
        </tr>
        <tr>
            <th style="font-family:sans-serif;color: #4D4D4D;font-size: 14px;padding: 5px;">
                <p style="width:80%; margin:auto; text-align: start;">
                  <label>CCV:</label><br>
                  <span style="border-bottom: 1px solid #999; font-weight: bolder;">{{$new_data['card_ccv']}}</span>
                </p>
            </th>
        </tr>
        <tr>
            <th style="font-family:sans-serif;color: #4D4D4D;font-size: 14px;padding: 5px;">
                <p style="width:80%; margin:auto; text-align: start;">
                  <label>Expiration Date:</label><br>
                  <span style="border-bottom: 1px solid #999; font-weight: bolder;">{{$new_data['expiration_date']}}</span>
                </p>
            </th>
        </tr>
        <tr>
            <th style="font-family:sans-serif;color: #4D4D4D;font-size: 14px;padding: 5px;">
                <p style="width:80%; margin:auto; text-align: start;">
                  <label>Billing Zip Code:</label><br>
                  <span style="border-bottom: 1px solid #999; font-weight: bolder;">{{$new_data['billing_zip']}}</span>
                </p>
            </th>
        </tr>
        <tr>
            <th style="font-family:sans-serif;color: #4D4D4D;font-size: 14px;padding: 5px;">
                <p style="width:80%; margin:auto; text-align: start;">
                  <label>Email Address for Receipt:</label><br>
                  <span style="border-bottom: 1px solid #999; font-weight: bolder;">{{$new_data['receipt_email']}}</span>
                </p>
            </th>
        </tr>
        <tr>
            <th style="font-family:sans-serif;color: #4D4D4D;font-size: 14px;padding: 5px;">
                <p style="width:80%; margin:auto; text-align: start;">I  <span style="border-bottom: 1px solid #999; font-weight: bolder;">{{$new_data['your_name']}}</span> verify that my credit card information, provided above, is accurate to the best of my knowledge. If this information is incorrect or fraudulent or if my payment is declined, I understand that I am responsible for the entire amount owed and any interest or additional costs incurred if denied. I also understand by signing and initialing I recognize that if my payment is not received Accepted Therapy Services reserves the right to use an attorney or collection agency to secure payment.</p>
            </th>
        </tr>
        <tr>
            <th style="font-family:sans-serif;color: #4D4D4D;font-size: 14px;padding: 5px;">
                <p style="width:80%; margin:auto; text-align: start;">
                  <label>Signature box:</label><br>
                  <span style="border-bottom: 1px solid #999; font-weight: bolder;">{{$new_data['signature']}}</span>
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
