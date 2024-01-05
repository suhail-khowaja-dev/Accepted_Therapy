@extends('admin.layouts.master')
@section('content')
    @if (session()->has('success'))
        <script type="text/javascript">
            swal("Dear Sir!", "Layout content have been successfully updated", "success");
        </script>
    @endif

    <body>
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
                        <input type="text" name="page_name" class="form-control" placeholder="Enter Your Title Name">
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
                            <p class="help-block" style="color: red">{{ $errors->first('descriptions') }}
                            </p>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-2">
                    <label>Header Image</label>
                    <input type="file" name="header_image" id="author_img" width="100px" height="100px">

                    @error('header_image')
                        <p class="help-block" style="color: red">{{ $errors->first('header_image') }}
                        </p>
                    @enderror
                </div>

                <div class="col-sm-2">
                    <label>Front Image</label>
                    <input type="file" name="image" id="author_img" width="100px" height="100px">

                    @error('image')
                        <p class="help-block" style="color: red">{{ $errors->first('image') }}
                        </p>
                    @enderror
                </div>
            </div>
            <p style="color:red"> Image Size Recommended: 507px * 269px<br>
                Allow Ext: png|jpeg|jpg
            </p>
            <div class="modal-footer no-bd" style="margin-right:92%">
                <button type="submit" id="" class="btn btn-primary">Add</button>

            </div>
        </form>
        </div>
        </div>
    @endsection
