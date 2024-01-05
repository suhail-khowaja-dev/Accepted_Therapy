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

Dear {{$contact_detail['name']}},
<br>

<br>
Email: {{$contact_detail['email']}}
<br>
Contact us: {{$contact_detail['phone_number']}}

<br>
Message:
{!!$contact_detail['description']!!}
