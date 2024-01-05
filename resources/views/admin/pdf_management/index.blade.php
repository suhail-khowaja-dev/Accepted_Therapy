@extends('admin.layouts.master')

@section('content')
    <div class="col-md-12">
        <div class="card">

            <div class="card-header">

                <div class="d-flex align-items-center">

                    <h4 class="card-title">

                        <h3 style="color:green">PDF Management</h3>

                        {{-- <button class="btn btn-primary btn-round ml-auto">

                            <a href="{{ route('add_new_package') }}" style="color: #f7f7f7"> <i
                                class="fa fa-plus"></i>Add</a>

                            </button> --}}
                </div>

            </div>

        </div>

        <div class="card-body">

            <!-- Modal -->

            <div class="modal fade" id="addRowModal" tabindex="-1" role="dialog" aria-hidden="true">

                <div class="modal-dialog" role="document" style="background-color: #1a2035!important;color: white">

                    <div class="modal-content">

                        <div class="modal-body">

                            <form method="post" action="{{ route('dynamic_page_add') }}" enctype="multipart/form-data">

                                @csrf

                                <div class="row">

                                    <div class="col-lg-6">

                                        <div class="form-group"><label>Types</label>



                                            <select class="form-control" name="type" aria-label="Default select example">



                                                <option value="1">Logistics & Warehouse</option>

                                                <option value="2">Delivery & Transportation</option>

                                            </select>

                                            @error('type')
                                                <p class="help-block" style="color: red">{{ $errors->first('type') }}

                                                </p>
                                            @enderror

                                        </div>

                                    </div>



                                    <div class="col-lg-6">

                                        <div class="form-group">

                                            <label>Title Name</label>

                                            <input type="text" name="page_name" value="" class="form-control"
                                                placeholder="Enter Your Title Name">

                                            @error('page_name')
                                                <p class="help-block" style="color: red">{{ $errors->first('page_name') }}

                                                </p>
                                            @enderror

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

                                    <input type="file" name="image" id="author_img" value="Feature Image"
                                        width="100px" height="100px" required="">

                                    @error('image')
                                        <p class="help-block" style="color: red">{{ $errors->first('image') }}

                                        </p>
                                    @enderror

                                </div>

                                {{-- <p style="color:red"> Image Size Recommended: 507px * 269px<br>

                                    Allow Ext: png|jpeg|jpg

                                </p> --}}

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

                            <th>PDF</th>

                            <th>Download</th>

                            <th style="width: 10%">Action</th>

                        </tr>

                    </thead>

                    <tfoot>

                        <tr>

                            <th>Sr No</th>


                            <th>PDF</th>

                            <th>Download</th>

                            <th>Action</th>

                        </tr>

                    </tfoot>

                    <tbody>

                        <tr>
                            <td> {{ $pdf[0]->id ?? '' }} </td>
                            <td> <iframe src="{{ asset('uploads/cms/' . $pdf[0]->pdf ?? '') }}"></iframe></td>
                            <td> <a href="{{ asset('uploads/cms/' . $pdf[0]->pdf) }}" target="_blank"
                                    class="btn btn-large pull-left" download=""><i class="fa fa-download fa-lg"
                                        aria-hidden="true"></i></a></td>
                            <td>
                                <div class="form-button-action">
                                    <a href="{{ route('pdf-edit', ['id' => $pdf[0]->id]) }}">
                                        <button type="button" data-toggle="tooltip" title=""
                                            class="btn btn-link btn-primary btn-lg" data-original-title="Edit Task">
                                            <i class="fa fa-edit"></i>
                                        </button>
                                    </a>


                                </div>
                            </td>
                        </tr>




                        </td>

                    </tbody>

                </table>

            </div>

        </div>

    </div>

    </div>
@endsection
@push('scripts')
    @if (Session::has('package_status'))
        <script>
            toastr.success('{{ Session::get('package_status') }}')
        </script>
    @endif

    @if (Session::has('delete'))
        <script>
            toastr.success('{{ Session::get('delete') }}')
        </script>
    @endif

    @if (Session::has('updated'))
        <script>
            toastr.success('{{ Session::get('updated') }}')
        </script>
    @endif

@endpush
