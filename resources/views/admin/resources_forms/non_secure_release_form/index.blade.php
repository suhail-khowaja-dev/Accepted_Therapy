@extends('admin.layouts.master')

@section('content')
    

    <div class="col-md-12">
        <div class="card">

            <div class="card-header">

                <div class="d-flex align-items-center">

                    <h4 class="card-title">

                        <h3 style="color:green">Non Secure Release Form</h3>

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

                            <th>Date of Birth</th>
                            
                            <th>Signature</th>
                            
                            <th style="width: 10%">Action</th>

                        </tr>

                    </thead>

                    <tfoot>

                        <tr>

                            <th>Sr No</th>

                            <th>Name</th>

                            <th>Date of Birth</th>
                            
                            <th>Signature</th>
                            
                            <th>Action</th>

                        </tr>

                    </tfoot>

                    <tbody>

                        @foreach ($non_secure_form_details as $non_secure_form_detail)
                            <tr>

                                <td>{{ $non_secure_form_detail->id }}</td>
                                <td>{{ $non_secure_form_detail->name ?? 'N/A'}}</td>
                                <td>
                                    {{ !empty($non_secure_form_detail->date_of_birth) ? date('m/d/Y', strtotime($non_secure_form_detail->date)) : 'N/A' }}
                                </td>
                                <td>{{ $non_secure_form_detail->signature ?? 'N/A'}}</td>
                                
                               
                                 <td>
                                    <div class="form-button-action">

                                        <a href="{{ route('show_non_secure_release_form_details', ['id' => $non_secure_form_detail->id]) }}">
                                            <button type="button" data-toggle="tooltip" title=""
                                                class="btn btn-link btn-primary btn-lg" data-original-title="View Non Secure Form Details">
                                                <i class="fa fa-eye"></i>
                                            </button>
                                        </a>

                                        
                                        <a href="{{ route("non_secure_release_form_delete",['id'=> $non_secure_form_detail->id]) }}"
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
@if (Session::has('non_secure_delete'))
<script>
    swal('Non Secure Release Form','{{ Session::get('non_secure_delete') }}','success');
</script>
@endif
@endpush