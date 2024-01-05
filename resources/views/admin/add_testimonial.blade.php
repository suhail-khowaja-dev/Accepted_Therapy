@extends('admin.layouts.master')
@section('content')
    <div id="page-wrapper">






        @if (session('Content_update'))
            <div class="alert alert-success">
                {{ session('Content_update') }}
            </div>
        @endif



        <body>


            <form method="post" action="{{ route('testimonial_add_confirm') }}" enctype="multipart/form-data">
                @csrf


                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            Image name

                            <input type="text" name="title" value="" class="form-control"
                                placeholder="Enter your image name" required>

                            @error('title')
                                <p class="help-block" style="color: red">{{ $errors->first('title') }}
                                </p>
                            @enderror


                        </div>
                    </div>
                </div>


                <div class="form-group">
                    <label>Description</label>
                    <textarea class="ckeditor form-control" id="bericht" name="description" required></textarea>

                    @error('description')
                        <p class="help-block" style="color: red">{{ $errors->first('description') }}
                        </p>
                    @enderror
                </div>

                <div class="col-sm-3">
                    <input type="file" name="image" id="author_img" value="Feature Image">

                    @error('image')
                        <p class="help-block" style="color: red">{{ $errors->first('image') }}
                        </p>
                    @enderror
                </div>

                <p style="color:red"> Image Size Recommended: 102px * 102px<br>
                    Allow Ext: png|jpeg|jpg
                    <!-- <center>
            <button type="submit" name="submit" value="update" >Add</button>
            </center>  -->
                </p>
                <div class="form-group">

                    <input type="submit" name="submit" value="Add" class="btn btn-primary">
                </div>
            </form>
    </div>
    </div>
    </div>
    </div>



    </body>





    </div>
@endsection('content')
