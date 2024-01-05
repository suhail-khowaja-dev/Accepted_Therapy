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
                <!-- Modal -->
                {{-- <div class="modal fade" id="addRowModal" tabindex="-1" role="dialog" aria-hidden="true">
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
                </div> --}}

                <div class="table-responsive">
                    <table id="sort" class="display table table-striped table-hover">
                        {{-- <thead> --}}
                            <tbody>
                            <tr>
                                <tr>
                                    <th>Sr No</th>
                                    <td>{{ $contact_details->id }}</td>
                                </tr>
                                <tr>
                                    <th>Full Name</th>
                                    <td>{{ $contact_details->full_name }}</td>
                                </tr>
                                <tr>
                                    <th>Email</th>
                                    <td>{{ $contact_details->email }}</td>
                                </tr>
                                <tr>
                                    <th>Message</th>
                                    <td>{{ $contact_details->message }}</td>
                                </tr>
                                <tr>
                                    <th>Location</th>
                                    <td>{{ $contact_details->location ?? 'N/A' }}</td>
                                </tr>
                                <tr>
                                    <th>Inquiry Date</th>
                                    <td>{!! date('m/d/Y:h:i A', strtotime($contact_details->created_at)) !!}</td>
                                </tr>

                            </tr>
                            </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection
