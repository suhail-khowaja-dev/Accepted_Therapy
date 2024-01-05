@extends('admin.layouts.master')



@section('content')

    



    <div class="col-md-12">

        <div class="card">



            <div class="card-header">



                <div class="d-flex align-items-center">



                    <h4 class="card-title">



                        <h3 style="color:green">Sliding Scale Form</h3>



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



                            <th>Date</th>

                            

                            <th>Signature</th>

                            

                            <th style="width: 10%">Action</th>



                        </tr>



                    </thead>



                    <tfoot>



                        <tr>



                            <th>Sr No</th>



                            <th>Name</th>



                            <th>Date</th>

                            

                            <th>Signature</th>

                            

                            <th>Action</th>



                        </tr>



                    </tfoot>



                    <tbody>



                        @foreach ($sliding_scale_form_details as $sliding_scale_form_detail)

                            <tr>



                                <td>{{ $sliding_scale_form_detail->id }}</td>

                                <td>{{ $sliding_scale_form_detail->name ?? 'N/A'}}</td>

                                <td>{{ $sliding_scale_form_detail->date != '' ? date('m/d/Y', strtotime($sliding_scale_form_detail->date)) : 'N/A' }}</td>

                                <td>{{ $sliding_scale_form_detail->signature ?? 'N/A' }}</td>

                                

                               

                                 <td>

                                    <div class="form-button-action">



                                        <a href="{{ route('show_sliding_scale_form_details', ['id' => $sliding_scale_form_detail->id]) }}">

                                            <button type="button" data-toggle="tooltip" title=""

                                                class="btn btn-link btn-primary btn-lg" data-original-title="View Sliding Scale Form Details">

                                                <i class="fa fa-eye"></i>

                                            </button>

                                        </a>



                                        

                                        <a href="{{ route("sliding_scale_form_delete",['id'=> $sliding_scale_form_detail->id]) }}"

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
@if (Session::has('sliding_scale_delete'))
<script>
    swal('Sliding Scale Fee Application Form','{{ Session::get('sliding_scale_delete') }}','success');
</script>
@endif
@endpush