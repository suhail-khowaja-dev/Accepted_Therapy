@extends('admin.layouts.master')
@section('content')






    @if (session()->has('success'))
        <script type="text/javascript">
            swal("Dear Sir!", "Layout content have been successfully updated", "success");
        </script>
    @endif

    <body>
        <form method="POST" action="{{ route('page_edit_confirm', ['id' => $dynamic_layout_content->id]) }}"
            enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-lg-6">
                    <div class="form-group">

                        <input type="text" name="title" class="form-control" value="{{ $dynamic_layout_content->title }}">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">

                        <input type="text" name="site_name" class="form-control"
                            value="{{ $dynamic_layout_content->site_name }}">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="form-group">
                        <input type="text" name="site_name_full" class="form-control"
                            value="{{ $dynamic_layout_content->site_name_full }}">
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="form-group">
                        <input type="text" name="company_provides" class="form-control"
                            value="{{ $dynamic_layout_content->company_provides }}">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label></label>
                <textarea class="ckeditor form-control" id="bericht" name="descriptions">

                  <?php echo $dynamic_layout_content->descriptions; ?>

            </textarea>
            </div>
            @if ($dynamic_layout_content->id == 2 or $dynamic_layout_content->id == 4 or $dynamic_layout_content->id == 5)
                <div class="col-sm-3">
                    <br />
                    <div>
                    </div>

                    @if ($dynamic_layout_content->image == null)
                        <img src="{{ asset('img/1x/article.png') }}" width="85px" width="117">
                    @else
                        <img src="{{ url('/uploads/dynamic_page/' . $dynamic_layout_content->image) }}" width="85px"
                            width="117">
                    @endif
                </div> <br>
                <div class="col-sm-3">
                    <input type="file" name="image" id="author_img" value="Feature Image">
                    @error('image')
                        <p class="help-block" style="color: red">{{ $errors->first('image') }}
                        </p>
                    @enderror
                    <p style="color:red"> Image Size Recommended: 507px * 269px
                        Allow Ext: png|jpeg|jpg </p>

                </div>
            @endif
            <div class="col-sm-3">
                <button type="submit" name="submit" value="update" class="btn btn-primary">Update</button>
            </div>
        </form>
        </div>
        </div>
        </div>
    </body>
    <script type="text/javascript">
        setTimeout(() => {
            var po = document.getElementById('successBtn')
            if (po != null) {
                po.style.display = 'none'
            }
        }, 5000)
    </script>
    </div>
@endsection('content')
