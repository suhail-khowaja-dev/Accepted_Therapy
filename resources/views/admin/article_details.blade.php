@extends('admin.layouts.master')
<style type="text/css">
    .newDix1 {
        padding: 0.65rem 0.4rem;
        font-size: 14px;
        opacity: 1;
        border-radius: 3px;
        outline: none;
        border: none;
        border-radius: 50px;
        background-color: #1572e8;
        color: #fff !important;
        margin-left: 57%;
    }

    .newDix1 a {
        color: #fff !important;
        padding: .65rem 1.4rem;
        font-size: 14px;
        opacity: 1;
        border-radius: 3px;
        outline: none;
        border: none;
        border-radius: 50px;
        background-color: #1572e8;
        color: #fff !important;
    }

</style>
@section('content')



    @if ($message = Session::get('article_update'))
        <div class="alert alert-warning alert-block" id="successBtn" style="background: #F7E7CE">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <strong id="test">{{ $message }}</strong>
        </div>
    @endif

    @if (session('article_add'))
        <div class="alert alert-success" id="successBtn">
            {{ session('article_add') }}
        </div>
    @endif
    @if (session('blog_hide'))
        <div class="alert alert-success" id="successBtn">
            {{ session('blog_hide') }}
        </div>
    @endif

  @if (Session::get('Testimonial_update'))
        <div class="alert alert-success" id="successBtn">
            {{ session('Testimonial_update') }}
        </div>
    @endif


    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="d-flex align-items-center">
                    <h4 class="card-title">
                        <h3 style="color:green">Clients Management</h3>
                        <button class="btn btn-primary btn-round ml-auto" data-toggle="modal" data-target="#addRowModal">
                            <i class="fa fa-plus"></i>
                            Add
                        </button>
                </div>
            </div>
        </div>
        <div class="card-body">
            <!-- Modal -->
            <div class="modal fade" id="addRowModal" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog" role="document" style="background-color: #1a2035!important;color: white">
                    <div class="modal-content">
                        <div class="modal-body">
                            <form method="post" action="{{ route('client_add_confirm') }}" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                         <!-- Link -->

                                         <input type="text" name="title" value="" class="form-control"
                                         placeholder="Enter Your Link" hidden="">

                                         @error('title')
                                         <p class="help-block" style="color: red">{{ $errors->first('title') }}
                                         </p>
                                         @enderror


                                     </div>
                                 </div>
                             </div>

                     
                                <br>
                                <div class="col-sm-3">
                                    <input type="file" name="image" id="author_img" value="Feature Image" width="100px" height="100px" 
                                    required="">
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
</div></h4>
            <div class="table-responsive">
                <table id="sort" class="display table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>Sr No</th>
                            <!-- <th>Link</th> -->
                            <th>Image</th>
                            <th>Status</th>
                            <th style="width: 10%">Action</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Sr No</th>
                            <!-- <th>Link</th> -->
                            <th>Image</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ($cms_content as $cms_content_detail)
                            <tr>

                                <td>{{ $cms_content_detail->id }}</td>
                                <!-- <td>{{ $cms_content_detail->title }}</td> -->
            <td><img src="{{url('uploads/clients/'.$cms_content_detail->image)}}" width="100px" height="100px"></td>
                                <td><a href="{{ route('client_action', ['id' => $cms_content_detail->id]) }}">
                                        @if ($cms_content_detail->status == 1)
                                            <button class="btn btn-info btn-sm"><i class="fa fa-thumbs-up"></i></button>
                                        @else
                                            <button class="btn btn-danger btn-sm"><i class="fa fa-thumbs-down"></i></button>
                                        @endif








                                    </a></td>



                                <td>
                                    <div class="form-button-action">
                                        <a href="{{ route('client_action_edit', ['id' => $cms_content_detail->id]) }}"
                                            target="_blank"> <button type="button" data-toggle="tooltip" title=""
                                                class="btn btn-link btn-primary btn-lg" data-original-title="Edit Task">
                                                <i class="fa fa-edit"></i>
                                            </button></a>
                                        <a href="{{ route('client_action_delete', ['id' => $cms_content_detail->id]) }}"
                                            onclick="return confirm('Are you sure you want to delete this article?');">
                                            <button type="button" data-toggle="tooltip" title=""
                                                class="btn btn-link btn-danger" data-original-title="Remove">
                                                <i class="fa fa-times"></i>
                                            </button></a>
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

























<script type="text/javascript">
    $(function(){
      $("#sort").dataTable({
        "aaSorting": [ [0,'desc'], [1,'desc'] ],
        "bPaginate": true,
        "bLengthChange": false,
        "bFilter": true,
        "bInfo": false,
        "searching":true,
        "bSort": false,
        "pageLength": 5
      });
    });
</script>


@endsection('content')
