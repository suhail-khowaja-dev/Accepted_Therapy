@extends('admin.layouts.master')



@section('content')

    



    <div class="col-md-12">

        <div class="card">



            <div class="card-header">



                <div class="d-flex align-items-center">



                    <h4 class="card-title">



                        <h3 style="color:green">Informed Consent Form</h3>



                </div>



            </div>



        </div>



        <div class="card-body">



            



            <div class="table-responsive">



                <table id="sort" class="display table table-striped table-hover">



                    <thead>



                        <tr>



                            <th>Sr No</th>



                            {{-- <th>Printed Name</th>



                            <th>Witness</th> --}}

                            

                            <th>Date/Time</th>

                            

                            <th>Signature</th>

                            

                            <th style="width: 10%">Action</th>



                        </tr>



                    </thead>



                    <tfoot>



                        <tr>



                            <th>Sr No</th>



                            {{-- <th>Printed Name</th>



                            <th>Witness</th> --}}

                            

                            <th>Date/Time</th>

                            

                            <th>Signature</th>

                            

                            <th>Action</th>



                        </tr>



                    </tfoot>



                    <tbody>



                        @foreach ($informed_consent_form_details as $informed_consent_form_detail)

                            <tr>



                                <td>{{ $informed_consent_form_detail->id }}</td>

                                {{-- <td>{{ $informed_consent_form_detail->printed_name ?? ''}}</td>

                                <td>{{ $informed_consent_form_detail->witness ?? ''}}</td> --}}

                                <td>{{ $informed_consent_form_detail->inform_consent_date_time != '' ? date('d/m/Y h:m:s A', strtotime($informed_consent_form_detail->inform_consent_date_time)) : 'N/A' }}</td>

                                <td>{{ $informed_consent_form_detail->rights_signature ?? 'N/A' }}</td>

                                

                               

                                 <td>

                                    <div class="form-button-action">



                                        <a href="{{ route('show_informed_consent_form_details', ['id' => $informed_consent_form_detail->id]) }}">

                                            <button type="button" data-toggle="tooltip" title=""

                                                class="btn btn-link btn-primary btn-lg" data-original-title="View Inform Consent Form Details">

                                                <i class="fa fa-eye"></i>

                                            </button>

                                        </a>



                                        

                                        <a href="{{ route("informed_consent_form_delete",['id'=> $informed_consent_form_detail->id]) }}"

                                            onclick="return confirm('Are you sure you want to delete this Page?');">

                                            <button type="button" data-toggle="tooltip" title=""

                                                class="btn btn-link btn-danger" data-original-title="Remove">

                                                <i class="fa fa-times"></i>

                                            </button>

                                        </a>







                                    </div>



                                </td>  



                            </tr>

                        @endforeach



                    </tbody>



                </table>



            </div>



        </div>



    </div>



    </div>

@endsection





@push('scripts')

@if (Session::has('informed_consent_delete'))

<script>

    swal('Referral Form','{{ Session::get('informed_consent_delete') }}','success');

</script>

@endif

@endpush