@extends('admin.layouts.master')
    @section('content')



    @if (session('Content_delete'))
    <div class="alert alert-success">
        {{ session('Content_delete') }}
    </div>
    @endif

    <div class="col-md-12">

        <div class="card">
            <div class="card-header">
                <h3 style="color:green">CMS MANAGEMENT</h3>
                {{-- <div class="d-flex align-items-center">
                    <i class="fa fa-view btn btn-primary" data-toggle="modal" data-target="#addRowModal">View</i>

                </div> --}}
            </div>
            <div class="card-body">        
                <div class="modal fade" id="addRowModal" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header no-bd">
                                <h5 class="modal-title">
                                    <span class="fw-mediumbold">
                                    New</span> 
                                    <span class="fw-light">
                                        Row
                                    </span>
                                </h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <p class="small">Create a new row using this form, make sure you fill them all</p>
                                <form>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="form-group form-group-default">
                                                <label>Name</label>
                                                <input id="addName" type="text" class="form-control" placeholder="fill name">
                                            </div>
                                        </div>
                                        <div class="col-md-6 pr-0">
                                            <div class="form-group form-group-default">
                                                <label>Position</label>
                                                <input id="addPosition" type="text" class="form-control" placeholder="fill position">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-group-default">
                                                <label>Office</label>
                                                <input id="addOffice" type="text" class="form-control" placeholder="fill office">
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer no-bd">
                                <button type="button" id="addRowButton" class="btn btn-primary">Add</button>
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="table-responsive">
                    <table id="sort" class="display table table-striped table-hover" >
                        <thead>
                            <tr>
                                <th>Sr No</th>     
                                <th>Page Name</th>
                                <th>Title</th>
                                <!-- <th>Status</th> -->
                                <th style="width: 10%">Action</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Sr No</th>     
                                <th>Page Name</th>
                                <th>Title</th>

                                <th>Action</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach($cms_content as $cms_content_detail)
                            <tr>
                                <td>{{$cms_content_detail->id}}</td>
                                <td>{{$cms_content_detail->page_name}}</td>
                                <td>{{$cms_content_detail->title}}</td>
                                <td>
                                    <div class="form-button-action">
                                      <a href="{{route('content_edit' , ['id'=>$cms_content_detail->id])}}">           <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit Task">
                                        <i class="fa fa-edit"></i>
                                    </button></a>
                                </div>
                            </td>
                        </tr>                     
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div></div>



























    @endsection('content')









