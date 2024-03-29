@extends('admin.layouts.master')

@section('content')
    






    {{-- @if (session()->has('schedule_status'))

    <script type="text/javascript">  swal("Dear Sir!", "{{ session()->get('schedule_status') }}", "success"); </script>

    @endif

   @if (Session::has('schedule_delete'))
    <div class="alert alert-success d-flex justify-content-between align-items-center">
        <p style="margin:0;">{{ Session::get('schedule_delete') }}</p>        
    </div>
    <br>
@endif

@if (Session::has('success'))
    <div class="alert alert-success d-flex justify-content-between align-items-center">
        <p style="margin:0;">{{ Session::get('success') }}</p>
    </div>
    <br>
@endif --}}



    <div class="col-md-12">
        <div class="card">

            <div class="card-header">

                <div class="d-flex align-items-center">

                    <h4 class="card-title">

                        <h3 style="color:green">Intake Form</h3>

                       
                </div>

            </div>

        </div>

        <div class="card-body">

            <!-- Modal -->

            <div class="modal fade" id="addRowModal" tabindex="-1" role="dialog" aria-hidden="true">

                <div class="modal-dialog" role="document" style="background-color: #1a2035!important;color: white">

                    <div class="modal-content">

                        <div class="modal-body">
                            {{-- {{route('dynamic_page_add')}} --}}
                            <form method="post" action="" enctype="multipart/form-data">

                                @csrf

                                <div class="row">

                                    <div class="col-lg-6">

                                        <div class="form-group"><label>Types</label>



                                            <select class="form-control" name="type" aria-label="Default select example">



                                                <option value="1">Logistics & Warehouse</option>

                                                <option value="2">Delivery & Transportation</option>

                                            </select>



                                        </div>

                                    </div>



                                    <div class="col-lg-6">

                                        <div class="form-group">

                                            <label>Title Name</label>

                                            <input type="text" name="page_name" value="" class="form-control"
                                                placeholder="Enter Your Title Name">

                                        </div>

                                    </div>

                                </div>



                                <div class="row">

                                    <div class="col-lg-12">

                                        <div class="form-group">

                                            <label>Description</label>

                                            <textarea class="ckeditor form-control" id="bericht" name="descriptions" required></textarea>



                                            @error('descriptions')
                                                <p class="help-block" style="color: red">
                                                    {{ $errors->first('descriptions') }}

                                                </p>
                                            @enderror

                                        </div>

                                    </div>
                                </div>



                                <div class="col-sm-3">

                                    <input type="file" name="image" id="author_img" value="Feature Image" width="100px"
                                        height="100px" required="">

                                    @error('image')
                                        <p class="help-block" style="color: red">{{ $errors->first('image') }}

                                        </p>
                                    @enderror

                                </div>

                                <p style="color:red"> Image Size Recommended: 507px * 269px<br>

                                    Allow Ext: png|jpeg|jpg

                                </p>

                                <div class="modal-footer no-bd">

                                    <button type="submit" id="" class="btn btn-primary">Add</button>

                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>

                                </div>

                            </form>

                        </div>

                    </div>

                </div>

            </div>



            <div class="table-responsive">

                <table id="sort" class="display table table-striped table-hover">

                    <thead>

                        <tr>

                            <th>Sr No</th>

                            <th>Client Name</th>

                            <th>Email</th>
                            
                            <th>Phone</th>
                            
                            <th>Preferred Therapist</th>
                            
                            <th>City</th>

                            <th style="width: 10%">Action</th>

                        </tr>

                    </thead>

                    <tfoot>

                        <tr>

                            <th>Sr No</th>

                            <th>Client Name</th>

                            <th>Email</th>
                            
                            <th>Phone</th>
                            
                            <th>Preferred Therapist</th>
                            
                            <th>City</th>

                            <th>Action</th>

                        </tr>

                    </tfoot>

                    <tbody>

                        @foreach ($intake_form_details as $intake_form_detail)
                            <tr>

                                <td>{{ $intake_form_detail->id }}</td>
                                <td>{{ $intake_form_detail->client_full_name ?? ''}}</td>
                                <td>{{ $intake_form_detail->client_email ?? ''}}</td>
                                <td>{{ $intake_form_detail->client_phone ?? ''}}</td>
                                <td>{{ $intake_form_detail->client_preferred_therapist_name ?? ''}}</td>
                                <td>{{ $intake_form_detail->client_city ?? ''}}</td>
                               
                                 <td>
                                    <div class="form-button-action">

                                        <a href="{{ route('show_intake_form_details', ['id' => $intake_form_detail->id]) }}">
                                            <button type="button" data-toggle="tooltip" title=""
                                                class="btn btn-link btn-primary btn-lg" data-original-title="View Intake Form Details">
                                                <i class="fa fa-eye"></i>
                                            </button>
                                        </a>

                                        
                                        <a href="{{ route("show_intake_form_delete",['id'=> $intake_form_detail->id]) }}" onclick="return confirm('Are you sure you want to delete this Page?');">
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
@if (Session::has('intake_delete'))
<script>
    swal('Intake Form','{{ Session::get('intake_delete') }}','success');
</script>
@endif
@endpush