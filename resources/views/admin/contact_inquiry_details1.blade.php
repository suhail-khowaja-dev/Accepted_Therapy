@extends('admin.layouts.master')
@section('content')



   <div class="col-md-12">

    <div class="card">

        <div class="card-header">

            <div class="d-flex align-items-center">

              <h4 class="card-title">
            <h3 style="color:green">Contact Management</h3>


        </div>

    </div>

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
                                                <input id="addName" type="text" class="form-control"
                                                    placeholder="fill name">
                                            </div>
                                        </div>
                                        <div class="col-md-6 pr-0">
                                            <div class="form-group form-group-default">
                                                <label>Position</label>
                                                <input id="addPosition" type="text" class="form-control"
                                                    placeholder="fill position">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-group-default">
                                                <label>Office</label>
                                                <input id="addOffice" type="text" class="form-control"
                                                    placeholder="fill office">
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
                    <table id="sort" class="display table table-striped table-hover">
                        <thead>
                            <tr>
                                <th>S#</th>
                                <th>Full Name</th>
                                <th>Email</th>
                                <th style="width: 10%">View</th>


                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>S#</th>
                                <th>Full Name</th>
                                <th>Email</th>
                                <th>View</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($cms_content as $cms_content_detail)
                                <tr>
                                    <td> {{ $cms_content_detail->id }}</td>
                                    <td> {{ $cms_content_detail->full_name }}</td>
                                    <td>{{ $cms_content_detail->email }}</td>

                                    <td>
    <i class="fa fa-view btn btn-primary" data-toggle="modal"
        data-target="#myModal{{ $cms_content_detail->id }}">View</i>
                                    </td>

                                </tr>
                                <div class="container">
                                    <div class="modal fade" id="myModal{{ $cms_content_detail->id }}" role="dialog">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header customModalHeaderT"
                                                style="background-color: #1a2035!important;color: white"><b>Contact
                                                Management Detail</b>
                                                <button type="button" class="close customModalClose"
                                                data-dismiss="modal">&times;</button>
                                                <h4 class="modal-title"></h4>
                                            </div>
                                            <div class="modal-body">
                                                <div class="modal-body">
                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <label for="recipient-name" class="col-form-label">Full
                                                                Name:</label>
                                                                <input type="text" class="form-control"
                                                                value="{{ $cms_content_detail->full_name }}"
                                                                id="recipient-name" readonly="">

                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <label for="recipient-name"
                                                                class="col-form-label">Email:</label>
                                                                <input type="text" class="form-control"
                                                                value="{{ $cms_content_detail->email }}"
                                                                id="recipient-name" readonly="">
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>

                                                <div class="modal-body">
                                                    <div class="row">
                                                        <div class="col-sm-12">
                                                            <div class="form-group">
                                                                <label for="recipient-name"
                                                                class="col-form-label">Descrition:</label>
                                                                <input type="text" class="form-control"
                                                                value="{{ $cms_content_detail->message }}"
                                                                id="recipient-name" readonly="">
                                                            </div>

                                                            <div class="modal-footer">

                                                                <button type="button" class="btn btn-danger"
                                                                data-dismiss="modal">Close</button>

                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection
