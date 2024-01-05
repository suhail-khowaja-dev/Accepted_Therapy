@extends('admin.layouts.master')
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


@if(session()->has('dynamic_layout_status'))
      <script type="text/javascript">  swal("Dear Sir!", "Layout content have been changed", "success"); </script>
      @endif

    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="d-flex align-items-center">
                    <h4 class="card-title">
                        <h3 style="color:green">Page Management</h3>

                </div>
            </div>
        </div>
        <div class="card-body">
            <!-- Modal -->


            <div class="table-responsive">
                <table id="sort" class="display table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>Sr No</th>
                            <th>Title Name</th>

                            <th style="width: 10%">Action</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Sr No</th>
                            <th>Title Name</th>

                            <th>Action</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ($page_list as $cms_content_detail)
                            <tr>

                                <td>{{$cms_content_detail->id }}</td>
                                <td>{{$cms_content_detail->title }}</td>
sa

            <td><a href="{{route('page_edit',['id' => $cms_content_detail->id]) }}" target="_blank">          <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit Task" >
           <i class="fa fa-edit"></i>
            </button></a>
            </a></td>




                            </tr>

                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    </div>
@endsection('content')
