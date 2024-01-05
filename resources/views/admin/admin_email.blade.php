<style>
    * {
        font-family: sans-serif;
    }

    tbody tr.data:nth-child(odd) {
        background-color: #f2f2f2
    }

    tbody tr.data td {
        padding: 15px 0;
    }

</style>
<h2>Dear {{ session()->get('user') }}:</h2>
<h3>
    <?php
    $feature = DB::table('center_sections')->first();
    ?>
    You are receiving this email because we received a Customization Resume/Cover request for your account.

</h3>

<div style="border: 2px solid #701a22 ;padding: 10px;">
    <table style="width: 100%;">
        <tr>
            <td style="background-color:#ff394a;width: 100%;padding:25px 10px;">
                <table style="width: 100%;">
                    <tr>
                        <td style="width:63%">
                            <img src="{{ config('app.url') }}/uploads/logo/{{ $feature->header }}"  height="" width="16%" alt="logo">
                        </td>
                        <td style="text-align:right;color:#fff">
                            <span style="    color: #fff;
                            font-family: sans-serif;font-size: 20px;">Business Building Resume</span> <br /> <br />
                        </td>
                    </tr>
                </table>
            </td>
        </tr>

        <tr>
            <table style="width: 100%;margin-bottom:40px">
                <tr>
                    <td style="width: 50%;
                    color: #ff394a;
                    font-size: 30px;
                    ;
                    ">
                        Details
                    </td>
                    <td style="width: 50%;text-align: right;">
                        <table style="width: 100%;">
                            <tr>
                                <td style="width: 50%;
                                ">

                                </td>
                            <tr>

                                <td style="width: 100%;text-align: right;">
                                    <span style="    color: #ff394a;
                                    font-family: sans-serif;font-size: 18px;">Date :</span> <span
                                        style="color:#25292d;padding-left:10px;font-family: sans-serif;font-size: 18px;">{{ session()->get('cus_date') }}</span>
                                </td>
                            </tr>
                            <tr>

                                <td style="width: 100%;text-align: right;">
                                    <span style="    color: #ff394a;
                                    font-family: sans-serif;font-size: 18px;">Your Id :</span> <span
                                        style="color:#25292d;padding-left:10px;font-family: sans-serif;font-size: 18px;">{{ session()->get('id') }}</span>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </tr>
        <tr>
            <table style="width: 100%;margin-bottom:40px">
                <tr>
                    <td style="width: 100%">
                        <span style="    color: #25292d;
                        font-family: sans-serif;font-size: 18px;">First Name :</span> <span
                            style="color:#ff394a;padding-left:10px;font-family: sans-serif;font-size: 18px;">{{ session()->get('cus_first_name') }}</span>
                    </td>
                </tr>
                <br>
                <br>
                <tr>
                    <td style="width: 100%">
                        <span style="    color: #25292d;
                        font-family: sans-serif;font-size: 18px;">Last Name :</span> <span
                            style="color:#ff394a;padding-left:10px;font-family: sans-serif;font-size: 18px;">{{ session()->get('cus_last_name') }}</span>
                    </td>
                </tr>
                <br>
                <br>
                <tr>
                    <td style="width: 100%">
                        <span style="    color: #25292d;
                        font-family: sans-serif;font-size: 18px;">E-mail :</span> <span
                            style="color:#ff394a;padding-left:10px;font-family: sans-serif;font-size: 18px;">{{ session()->get('cus_email') }}</span>
                    </td>
                </tr>
                <br>
                <br>
                <tr>
                    <td style="width: 100%">
                        <span style="    color: #25292d;
                        font-family: sans-serif;font-size: 18px;">Telephone:</span> <span
                            style="color:#ff394a;padding-left:10px;font-family: sans-serif;font-size: 18px;">{{ session()->get('cus_telephone') }}</span>
                    </td>
                </tr>
                <br>
                <br>
                <tr>
                    <td style="width: 100%">
                        <span style="    color: #25292d;
                        font-family: sans-serif;font-size: 18px;">Contact :</span> <span
                            style="color:#ff394a;padding-left:10px;font-family: sans-serif;font-size: 18px;">
                            <br>{{ session()->get('cus_contact') }} <br> </span>
                    </td>
                </tr>
                <br>
                <br>
                <tr>
                    <td style="width: 100%">
                        <span
                            style="    color: #25292d;
                        font-family: sans-serif;font-size: 18px;">{{ session()->get('what_industry_customize') }}</span>
                        <span style="color:#ff394a;padding-left:10px;font-family: sans-serif;font-size: 18px;">
                            <br>{{ session()->get('cus_industry') }}</span>
                    </td>
                </tr>
                <br>
                <br>

                <tr>
                    <td style="width: 100%">
                        <span
                            style="    color: #25292d;
                        font-family: sans-serif;font-size: 18px;">{{ session()->get('help_with_us_customize') }}</span>
                        <span style="color:#ff394a;padding-left:10px;font-family: sans-serif;font-size: 18px;">
                            <br>{{ session()->get('cus_resume_customize') }} <br>
                            {{ session()->get('cus_cover_customize') }} <br>
                            {{ session()->get('cus_linkedin_profile') }} <br>
                            {{ session()->get('cus_interview_prep') }} <br>

                    </td>
                </tr>
                <br>
                <br>
                <tr>
                    <td style="width: 100%">
                        <span
                            style="    color: #25292d;
                        font-family: sans-serif;font-size: 18px;">{{ session()->get('career_change_customize') }}</span>
                        <span
                            style="color:#ff394a;padding-left:10px;font-family: sans-serif;font-size: 18px;"><br>{{ session()->get('cus_search_career') }}</span>
                    </td>
                </tr>
                <br>
                <br>




                <tr>
                    <td style="width: 100%">
                        <span
                            style="    color: #25292d;
                        font-family: sans-serif;font-size: 18px;">{{ session()->get('resume_service_customize') }}</span>
                        <span style="color:#ff394a;padding-left:10px;font-family: sans-serif;font-size: 18px;">
                            <br>{{ session()->get('cus_resume_service') }}</span>
                    </td>
                </tr>
                <br>
                <br>




                <tr>
                    <td style="width: 100%">
                        <span style="    color: #25292d;
                        font-family: sans-serif;font-size: 18px;">{{ session()->get('how_many_jobs_customize') }}
                            :</span> <span
                            style="color:#ff394a;padding-left:10px;font-family: sans-serif;font-size: 18px;">
                            <br>{{ session()->get('cus_job_applied') }}
                            <br>{{ session()->get('cus_job_interviews') }}</span>

                    </td>
                </tr>
                <br>
                <br>



                <tr>
                    <td style="width: 100%">
                        <span style="    color: #25292d;
                        font-family: sans-serif;font-size: 18px;">{{ session()->get('list_up_to_3_customize') }}
                            :</span> <span
                            style="color:#ff394a;padding-left:10px;font-family: sans-serif;font-size: 18px;"><br>{{ session()->get('cus_target_jobs') }}</span>
                    </td>
                </tr>
                <br>
                <br>




                <tr>
                    <td style="width: 100%">
                        <span
                            style="    color: #25292d;
                        font-family: sans-serif;font-size: 18px;">{{ session()->get('referred_by_someone_customize') }}</span>
                        <span style="color:#ff394a;padding-left:10px;font-family: sans-serif;font-size: 18px;"> <br>
                            {{ session()->get('cus_referred_resume') }} <br>
                            {{ session()->get('dont_resume') }}</span>
                    </td>
                </tr>
                <br>
                <br>



                <tr>
                    <td style="width: 100%">
                        <span style="    color: #25292d;
    font-family: sans-serif;font-size: 18px;">{{ session()->get('about_our_services_customize') }}
                            :</span> <span
                            style="color:#ff394a;padding-left:10px;font-family: sans-serif;font-size: 18px;">{{ session()->get('cus_social') }}</span>
                    </td>
                </tr>
                <tr>
                    <td style="width: 100%">
                        <span style="    color: #25292d;
                        font-family: sans-serif;font-size: 18px;">{{ session()->get('package_name_customize') }}
                            :</span> <span
                            style="color:#ff394a;padding-left:10px;font-family: sans-serif;font-size: 18px;">{{ session()->get('cus_hidden_package_name') }}</span>
                    </td>
                </tr>
                <tr>
                    <td style="width: 100%">
                        <span style="    color: #25292d;
                        font-family: sans-serif;font-size: 18px;">{{ session()->get('package_amount_customize') }}
                            :</span> <span
                            style="color:#ff394a;padding-left:10px;font-family: sans-serif;font-size: 18px;">{{ session()->get('cus_hidden_package_price') }}</span>
                    </td>
                </tr>
                <tr>
                    <td style="width: 100%">
                        <span style="    color: #25292d;
                        font-family: sans-serif;font-size: 18px;">{{ session()->get('package_type_customize') }}
                            :</span> <span
                            style="color:#ff394a;padding-left:10px;font-family: sans-serif;font-size: 18px;">{{ session()->get('cus_hidden_package_title') }}</span>
                    </td>
                </tr>
                <br>
                <br>

            </table>
        </tr>
        <tr>
            <h4>

                Thanks and regards:<br>
                <br>
                <br>
                <strong>Business Building</strong>
            </h4>
    </table>

</div>
