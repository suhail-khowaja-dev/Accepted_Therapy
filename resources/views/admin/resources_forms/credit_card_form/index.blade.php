@extends('admin.layouts.master')

@section('content')
    

    <div class="col-md-12">
        <div class="card">

            <div class="card-header">

                <div class="d-flex align-items-center">

                    <h4 class="card-title">

                        <h3 style="color:green">Credit/Debit Card Form</h3>

                </div>

            </div>

        </div>

        <div class="card-body">

            

            <div class="table-responsive">

                <table id="sort" class="display table table-striped table-hover">

                    <thead>

                        <tr>

                            <th>Sr No</th>

                            <th>Name</th>

                            <th>Date/Time</th>
                            
                            <th>Name</th>
                            
                            <th>Signature</th>
                            
                            <th style="width: 10%">Action</th>

                        </tr>

                    </thead>

                    <tfoot>

                        <tr>

                            <th>Sr No</th>

                            <th>Name</th>

                            <th>Date/Time</th>
                            
                            <th>Name</th>
                            
                            <th>Signature</th>
                            
                            <th>Action</th>

                        </tr>

                    </tfoot>

                    <tbody>

                        @foreach ($credit_card_form_details as $credit_card_form_detail)
                            <tr>

                                <td>{{ $credit_card_form_detail->id }}</td>
                                <td>{{ $credit_card_form_detail->name ?? 'N/A'}}</td>
                                <td>{{ $credit_card_form_detail->date != '' ? date('D M Y h:m:s A', strtotime($credit_card_form_detail->date)) : 'N/A' }}</td>
                                <td>{{ $credit_card_form_detail->name_on_card ?? 'N/A'}}</td>
                                <td>{{ $credit_card_form_detail->card_type ?? 'N/A' }}</td>
                                <td>{{ $credit_card_form_detail->receipt_email ?? 'N/A' }}</td>
                                
                               
                                 <td>
                                    <div class="form-button-action">

                                        <a href="{{ route('show_credit_card_form_details', ['id' => $credit_card_form_detail->id]) }}">
                                            <button type="button" data-toggle="tooltip" title=""
                                                class="btn btn-link btn-primary btn-lg" data-original-title="View Credit Card Form Details">
                                                <i class="fa fa-eye"></i>
                                            </button>
                                        </a>

                                        
                                        <a href="{{ route("credit_card_form_delete",['id'=> $credit_card_form_detail->id]) }}"
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
@if (Session::has('credit_card_delete'))
<script>
    swal('Referral Form','{{ Session::get('credit_card_delete') }}','success');
</script>
@endif
@endpush