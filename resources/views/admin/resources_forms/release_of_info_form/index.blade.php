@extends('admin.layouts.master')

@section('content')
    

    <div class="col-md-12">
        <div class="card">

            <div class="card-header">

                <div class="d-flex align-items-center">

                    <h4 class="card-title">

                        <h3 style="color:green">Release of Information Form</h3>

                </div>

            </div>

        </div>

        <div class="card-body">

            

            <div class="table-responsive">

                <table id="sort" class="display table table-striped table-hover">

                    <thead>

                        <tr>

                            <th>Sr No</th>

                            <th>Your Name</th>

                            <th>Date of Birth</th>
                            
                            <th>Person/Agency</th>
                            
                            <th>Reason</th>

                            <th>Signature</th>
                            
                            <th style="width: 10%">Action</th>

                        </tr>

                    </thead>

                    <tfoot>

                        <tr>

                            <th>Sr No</th>

                            <th>Your Name</th>

                            <th>Date of Birth</th>
                            
                            <th>Person/Agency</th>
                            
                            <th>Reason</th>

                            <th>Signature</th>
                            
                            <th>Action</th>

                        </tr>

                    </tfoot>

                    <tbody>

                        @foreach ($release_info_form_details as $release_info_form_detail)
                            <tr>

                                <td>{{ $release_info_form_detail->id }}</td>
                                <td>{{ $release_info_form_detail->your_name ?? 'N/A'}}</td>
                                <td>{{ $release_info_form_detail->date != '' ? date('m/d/Y', strtotime($release_info_form_detail->date)) : 'N/A' }}</td>
                                <td>{{ $release_info_form_detail->person_or_agency_name ?? 'N/A'}}</td>
                                <td>{{ $release_info_form_detail->reason ?? 'N/A' }}</td>
                                <td>{{ $release_info_form_detail->signature ?? 'N/A' }}</td>
                                
                               
                                 <td>
                                    <div class="form-button-action">

                                        <a href="{{ route('show_release_of_information_form_details', ['id' => $release_info_form_detail->id]) }}">
                                            <button type="button" data-toggle="tooltip" title=""
                                                class="btn btn-link btn-primary btn-lg" data-original-title="View Credit Card Form Details">
                                                <i class="fa fa-eye"></i>
                                            </button>
                                        </a>

                                        
                                        <a href="{{ route("release_of_information_form_delete",['id'=> $release_info_form_detail->id]) }}"
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
@if (Session::has('release_info_delete'))
<script>
    swal('Release of Information Form','{{ Session::get('release_info_delete') }}','success');
</script>
@endif
@endpush