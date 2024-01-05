@extends('admin.layouts.master')

@section('content')


    <div class="col-md-12">
        <div class="card">

            <div class="card-header">

                <div class="d-flex align-items-center">

                    <h4 class="card-title">

                        <h3 style="color:green">Pdf Downloaders</h3>

                </div>

            </div>

        </div>

        <div class="card-body">



            <div class="table-responsive">

                <table id="sort" class="display table table-striped table-hover">

                    <thead>

                        <tr>

                            <th>Sr No</th>

                            <th>Name</th>

                            <th>Email</th>

                            <th>Status</th>


                            <th style="width: 10%">Action</th>

                        </tr>

                    </thead>

                    <tfoot>

                        <tr>

                            <th>Sr No</th>

                            <th>Name</th>

                            <th>Email</th>

                            <th>Status</th>

                            <th>Action</th>

                        </tr>

                    </tfoot>

                    <tbody>

                        @foreach ($pdf_downloaders as $user)
                            <tr>

                                <td>{{ $user->id }}</td>
                                <td>{{ $user->name ?? 'N/A'}}</td>
                                <td>{{ $user->email ?? 'N/A' }}</td>
                                <td>
                                    <a href="{{ route('pdf-downloader-users-status', ['id' => $user->id]) }}">
                                        @if ($user->status == 1)
                                            <button class="btn btn-info btn-sm"><i class="fa fa-thumbs-up"></i></button>
                                        @else
                                            <button class="btn btn-danger btn-sm"><i class="fa fa-thumbs-down"></i></button>
                                        @endif
                                    </a>
                                </td>
                                {{-- <td>
                                    <a href="{{ route('agency_links_show', ['id' => $user->id]) }}">
                                        <button class="btn btn-info btn-sm"><i class="fa fa-link" aria-hidden="true"></i></button>
                                    </a>
                                </td> --}}


                                 <td>
                                    <div class="form-button-action">

                                        <a href="{{ route('show_details', ['id' => $user->id]) }}">
                                            <button type="button" data-toggle="tooltip" title=""
                                                class="btn btn-link btn-primary btn-lg" data-original-title="View User Details">
                                                <i class="fa fa-eye"></i>
                                            </button>
                                        </a>


                                        <a href="{{ route("pdf-downloader-delete",['id'=> $user->id]) }}"
                                            onclick="return confirm('Are you sure you want to delete this Page?');">
                                            <button type="button" data-toggle="tooltip" title=""
                                                class="btn btn-link btn-danger" data-original-title="Remove">
                                                <i class="fa fa-times"></i>
                                            </button>
                                        </a>

                                        <a href="{{ route('pdf-downloader_edit', ['id' => $user->id]) }}">
                                            <button type="button" data-toggle="tooltip" title=""
                                                class="btn btn-link btn-primary btn-lg" data-original-title="Edit User Details">
                                                <i class="fa fa-edit"></i>
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
@if (Session::has('agency_user_status'))
<script>
    swal('Client Status','{{ Session::get('agency_user_status') }}','success');
</script>
@endif
@if (Session::has('updated'))
<script>
    swal('User Updated','{{ Session::get('updated') }}','success');
</script>
@endif
@if (Session::has('delete'))
<script>
    swal('User Delete','{{ Session::get('delete') }}','success');
</script>
@endif
@if (Session::has('agency_user_delete'))
<script>
    swal('Client Status','{{ Session::get('agency_user_delete') }}','success');
</script>
@endif

@endpush
