@extends('admin.layouts.master')

@section('content')
    

    <div class="col-md-12">
        <div class="card">

            <div class="card-header">

                <div class="d-flex align-items-center">

                    <h4 class="card-title">

                        <h3 style="color:green">Telehealth Treatment Consent Form</h3>

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

                            <th>Signature</th>
                            
                            <th style="width: 10%">Action</th>

                        </tr>

                    </thead>

                    <tfoot>

                        <tr>

                            <th>Sr No</th>

                            <th>Name</th>

                            <th>Signature</th>
                            
                            <th>Action</th>

                        </tr>

                    </tfoot>

                    <tbody>

                        @foreach ($telehealth_form_details as $telehealth_form_detail)
                            <tr>

                                <td>{{ $telehealth_form_detail->id }}</td>
                                <td>{{ $telehealth_form_detail->your_name ?? 'N/A'}}</td>
                                <td>{{ $telehealth_form_detail->signature ?? 'N/A' }}</td>
                               
                                 <td>
                                    <div class="form-button-action">

                                        <a href="{{ route('show_telehealth_form_details', ['id' => $telehealth_form_detail->id]) }}">
                                            <button type="button" data-toggle="tooltip" title=""
                                                class="btn btn-link btn-primary btn-lg" data-original-title="View Telehealth Treatment Consent Form Details">
                                                <i class="fa fa-eye"></i>
                                            </button>
                                        </a>

                                        
                                        <a href="{{ route("telehealth_form_delete",['id'=> $telehealth_form_detail->id]) }}"
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
@if (Session::has('telehealth_delete'))
<script>
    swal('Telehealth Treatment Consent Form','{{ Session::get('telehealth_delete') }}','success');
</script>
@endif
@endpush