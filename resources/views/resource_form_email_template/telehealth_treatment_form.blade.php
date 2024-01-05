<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Telehealth Treatment Consent</title>

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
                <h1 style="font-family:sans-serif;color: #2d6d95;text-transform: capitalize;text-align: center;width:79%; margin:auto; padding-top: 20px;padding-bottom: 20px;">Telehealth Treatment Consent</h1>
            </th>
        </tr>
        <tr>
            <th>
                <h4 style="font-family:sans-serif;color: #000;text-transform: capitalize;text-align: start;width:79%; margin:auto;padding-top: 10px;">Information and Informed Consent for Telehealth Treatment</h4>
            </th>
        </tr>
        <tr>
            <th style="font-family:sans-serif;color: #4D4D4D;font-size: 14px;padding: 5px;">
                <p style="width:80%; margin:auto; text-align: start;">Telehealth is live two-way audio and/or video electronic communications that allows therapists and clients to meet outside of a physical office setting.</p>
            </th>
        </tr>
        <tr>
            <th>
                <h2 style="font-family:sans-serif;color: #2d6d95;text-transform: capitalize;text-align: start;width:79%; margin:auto;padding-top: 10px;">Client Understanding</h2>
            </th>
        </tr>
        <tr>
            <th style="font-family:sans-serif;color: #4D4D4D;font-size: 14px;padding: 10px;">
                <ul style="width:80%; margin:auto; text-align: start;">
                    @if($new_data['client_understanding_checkboxes'])
                    @foreach (json_decode($new_data['client_understanding_checkboxes']) as $client_understanding)
                        @if($client_understanding == 1)
                            <li> I understand that telehealth services are completely voluntary and that
                                I can withdraw this consent at any time.</li>
                        @endif
                        @if($client_understanding == 2)
                            <li> I understand that none of the telehealth sessions will be recorded or
                                photographed.</li>
                        @endif
                        @if($client_understanding == 3)
                            <li> I agree not to make or allow audio or video recordings of any portion of
                                the sessions.</li>
                        @endif
                        @if($client_understanding == 4)
                            <li> I understand that the laws that protect privacy and the confidentiality
                                of client information also apply to telehealth, and that no information
                                obtained in the use of telehealth that identifies me will be disclosed
                                to other entities without my consent.</li>
                        @endif
                        @if($client_understanding == 5)
                            <li> I understand that telehealth is performed over a secure communication
                                system that is almost impossible for anyone else to access. I understand
                                that any internet-based communication is not 100 % guaranteed to be
                                secure.</li>
                        @endif
                        @if($client_understanding == 6)
                            <li>I agree that my therapist and Accepted Therapy Services will not be held
                                responsible if any outside party gains access to my personal information
                                by bypassing the security measures of the communication system. </li>
                        @endif
                        @if($client_understanding == 7)
                            <li>I understand there are potential risks to this technology, including
                                interruptions, unauthorized access, and technical difficulties.</li>
                        @endif
                        @if($client_understanding == 8)
                             <li> I understand that I or my therapist may discontinue the telehealth
                                sessions at any time if it is felt that the video technology is not
                                adequate for the situation. </li>
                        @endif
                        @if($client_understanding == 9)
                             <li>I understand that if there is an emergency during a telehealth session,
                                then my therapist may call emergency services and/or my emergency
                                contact.</li>
                        @endif
                        @if($client_understanding == 10)
                             <li> understand that this form is signed in addition to the Notice of
                                Privacy Practices and Consent to Treatment and that all office policies
                                and procedures apply to telehealth services.</li>
                        @endif
                        @if($client_understanding == 11)
                             <li>I understand that if the video conferencing connection drops while I am
                                in a session, I will have an additional phone line available to contact
                                my therapist, or I will make additional plans with my therapist ahead of
                                time for recontact. My therapist may choose to use a different means of
                                technology (Zoom, FaceTime, Google Meets) for completion of my session;
                                however, these other means may not be HIPPA compliant.</li>
                        @endif
                        @if($client_understanding == 12)
                             <li> I understand my therapist will advise me about what telehealth platform
                                to
                                use and she will establish a video conference session. I also recognize
                                that
                                if I am more than 10 minutes late to a telehealth session, I will be
                                charged
                                the standard no-show fee.</li>
                        @endif
                        @if($client_understanding == 13)
                             <li>I understand a “no show” or late fee of $75.00 will be charged if I miss an appointment or do not cancel within 24 hours of scheduled appointment. I understand credit card or other form of payment will be established before the first session and that insurance is not responsible for any late or no-show fees accrued.</li>
                        @endif
                    @endforeach
                    @endif
            </ul>
            </th>
        </tr>
        <tr>
            <th>
                <h2 style="font-family:sans-serif;color: #2d6d95;text-transform: capitalize;text-align: start;width:79%; margin:auto;padding-top: 10px;">Therapy Tools</h2>
            </th>
        </tr>
        <tr>
            <th style="font-family:sans-serif;color: #4D4D4D;font-size: 14px;padding: 10px;">
                <ul style="width:80%; margin:auto; text-align: start;">
                <li>Core Beliefs</li>
                <li>Diary Card</li>
                <li>Thought Record</li>
                <li>Timeline</li>
            </ul>
            </th>
        </tr>
        <tr>
            <th>
                <h2 style="font-family:sans-serif;color: #2d6d95;text-transform: capitalize;text-align: start;width:79%; margin:auto;padding-top: 10px;">Book Recommendations</h2>
            </th>
        </tr>
        <tr>
            <th style="font-family:sans-serif;color: #4D4D4D;font-size: 14px;padding: 10px;">
                <ul style="width:80%; margin:auto; text-align: start;">
                    <li><a href="https://www.amazon.com/Body-Keeps-Score-Healing-Trauma/dp/0143127748/ref=sr_1_1?keywords=the+body+keeps+the+score&qid=1658644037&s=books&sprefix=the+body+%2Cstripbooks%2C119&sr=1-1" target="_blank">The Body Keeps the Score: Brain, Mind, and Body in the Healing of Trauma</a> by Bessel van der Kolk</li>
                    <li><a href="https://www.amazon.com/Atlas-Heart-Meaningful-Connection-Experience/dp/0399592555/ref=tmm_hrd_swatch_0?_encoding=UTF8&qid=1658644420&sr=1-1" target="_blank">Atlas of the Heart: Mapping Meaningful Connection and the Language of Healing Experience</a> by Brené Brown</li>
                    <li><a href="https://www.amazon.com/Complex-PTSD-Surviving-RECOVERING-CHILDHOOD/dp/1492871842/ref=sr_1_4?keywords=complex+ptsd&qid=1658644346&s=books&sprefix=complex+pts%2Cstripbooks%2C114&sr=1-4" target="_blank">Complex PTSD: From Surviving to Thriving: A Guide and Map for Recovering from Childhood Trauma</a> by Pete Walker</li>
                    <li><a href="https://www.amazon.com/Getting-Past-Your-Self-Help-Techniques/dp/1609619951/ref=sr_1_22?crid=1IBUS7MYDEXKE&keywords=therapy+books&qid=1658644193&s=books&sprefix=therapy+books%2Cstripbooks%2C121&sr=1-22" target="_blank">Getting Past Your Past: Take Control of Your Life with Self-Help Techniques from EMDR Therapy</a> by Francine Shapiro</li>
                    <li><a href="https://www.amazon.com/Grief-Recovery-Handbook-Anniversary-Expanded/dp/0061686077/ref=sr_1_1?crid=1PBEZBZ2IS0SL&keywords=the+grief+recovery+handbook&qid=1658643712&sprefix=the+grief%2Caps%2C139&sr=8-1" target="_blank">The Grief Recovery Handbook</a> by John James and Russell Friedman</li>
            </ul>
            </th>
        </tr>
        <tr>
            <th>
                <h2 style="font-family:sans-serif;color: #2d6d95;text-transform: capitalize;text-align: start;width:79%; margin:auto;padding-top: 10px;">Client Consent</h2>
            </th>
        </tr>
        <tr>
            <th style="font-family:sans-serif;color: #4D4D4D;font-size: 14px;padding: 5px;">
                <p style="width:80%; margin:auto; text-align: start;">I  <span style="border-bottom: 1px solid #999; font-weight: bolder;">{{ $new_data['your_name'] }}</span> here by give my informed consent for the use of telehealth in my care.</p>
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
