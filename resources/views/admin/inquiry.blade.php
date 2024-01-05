@extends('admin.layouts.master')
@section('content')
<style>
    button.deleteButton {
    border: none;
    background-color: transparent;
    color: black;
    cursor: pointer;
}
</style>
    @if ($message_error = Session::get('message_error'))
        <div class="alert alert-warning alert-block" id="successBtn" style="background: #F7E7CE">
            <button type="button" class="close" data-dismiss="alert">×</button>

            <strong id="test">{{ $message_error }}</strong>

        </div>
    @endif

    @if (session('article_add'))
        <div class="alert alert-success" id="successBtn">

            {{ session('article_add') }}

        </div>
    @endif



    @if (session()->has('faq_status'))
        <script type="text/javascript">
            swal("Dear Sir!", "Successfully status have been changed", "success");
        </script>
    @endif

    @if (Session::has('deleted_faq'))
        <div class="alert alert-success d-flex justify-content-between align-items-center">
            <p style="margin:0;">{{ Session::get('deleted_faq') }}</p>
        </div>
        <br>
    @endif

    @if (Session::has('success'))
        <div class="alert alert-success d-flex justify-content-between align-items-center">
            <p style="margin:0;">{{ Session::get('success') }}</p>
        </div>
        <br>
    @endif
    @if (Session::has('delete'))
        <div class="alert alert-success d-flex justify-content-between align-items-center">
            <p style="margin:0;">{{ Session::get('delete') }}</p>
        </div>
        <br>
    @endif


    <div class="col-md-12">

        <div class="card">

            <div class="card-header">

                <div class="d-flex align-items-center">

                    <h4 class="card-title">

                        <h3 style="color:green">Contact Management</h3>

                        {{-- <button class="btn btn-primary btn-round ml-auto">

                            <a href="{{ route('add_new_faq_type') }}" style="color: #f7f7f7"> <i
                                    class="fa fa-plus"></i>Add</a>

                        </button> --}}

                </div>

            </div>

        </div>

        <div class="card-body">

            <div class="table-responsive">

                <table id="sort" class="display table table-striped table-hover">

                    <thead>

                        <tr>

                            @if (count($contact_details) > 0)
                                
                            <th>
                                <div class="d-flex align-items-center">
                                    <label><input type="checkbox" class="select-all form-control mr-2"> </label>
                                    <button type="button" class="deleteButton delete-link ">
                                        <div class="fa fa-trash"></div>
                                    </button>
                                </div>
                            </th>
                            @endif
                            <th>Sr No</th>

                            <th>Full Name</th>

                            <th>Email</th>

                            <th>Message</th>

                            <th>Location</th>

                            <th>Inquiry Date</th>

                            <th style="width: 10%">Action</th>

                        </tr>

                    </thead>

                    <tfoot>

                        <tr>

                            @if (count($contact_details) > 0)
                                
                            <th>
                                <div class="d-flex align-items-center">
                                    <label><input type="checkbox" class="select-all form-control mr-2"> </label>
                                    <button type="button" class="deleteButton delete-link ">
                                        <div class="fa fa-trash"></div>
                                    </button>
                                </div>
                            </th>
                            @endif
                            <th>Sr No</th>



                            <th>Full Name </th>

                            <th>Email</th>

                            <th>Message</th>
                            
                            <th>Location</th>

                            <th>Inquiry Date</th>

                            <th>Action</th>

                        </tr>

                    </tfoot>

                    <tbody>

                        @foreach ($contact_details as $contact)
                            <tr>

                                <th><input type="checkbox" name="delete-checkbox[]" class="delete-checkbox" value="{{ $contact->id ?? '' }}"></th>

                             

                                <td>{{ $contact->id ?? '' }}</td>


                                <td>{{ $contact->full_name ?? '' }}</td>

                                <td>{{ $contact->email ?? '' }}</td>

                                <td>{{ Str::limit($contact->message, 20) }}</td>
                                
                                <td>{{ !empty($contact->location) ? Str::limit($contact->location, 20) : 'N/A' }}</td>

                                <td>{!! date('m/d/Y h:i A', strtotime($contact->created_at)) !!}</td>

                                <td>
                                    <div class="form-button-action">

                                        <a href="{{ route('contact_details', ['id' => $contact->id]) }}">
                                            <button type="button" data-toggle="tooltip" title=""
                                                class="btn btn-link btn-primary btn-lg" data-original-title="View Details">
                                                <i class="fa fa-eye"></i>
                                            </button>
                                        </a>

                                        <a href="{{ route('contact_delete', ['id' => $contact->id]) }}"
                                            onclick="return confirm('Are you sure you want to delete this Page?');">
                                            <button type="button" data-toggle="tooltip" title=""
                                                class="btn btn-link btn-danger" data-original-title="Remove">
                                                <i class="fa fa-times"></i>
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
    <script>
        $(document).ready(function() {
            // Handle select all checkbox
            $('.select-all').click(function() {
                $('.delete-checkbox').prop('checked', this.checked);
                console.log("here")
            });

            $('#select-all').click(function() {
                $('.delete-checkbox').prop('checked', this.checked);
            });

            // Handle individual checkboxes
            $('.delete-checkbox').change(function() {
                if (!this.checked) {
                    $('.select-all').prop('checked', false);
                } else {
                    if ($('.delete-checkbox:checked').length == $('.delete-checkbox').length) {
                        $('.select-all').prop('checked', true);
                    }
                }
            });

            // Handle delete operation
            $('.delete-link').click(function(e) {
                e.preventDefault();
                var id = $(this).data('id');
                var selectedItems = $('.delete-checkbox:checked');

                if (selectedItems.length == 0 && !id) {
                    alert('Please select at least one item to delete.');
                    return false;
                }

                var ids = [];

                if (id) {
                    ids.push(id);
                } else {
                    selectedItems.each(function() {
                        ids.push($(this).val());
                    });
                }

                if (confirm('Are you sure you want to delete the selected items?')) {
                    
                    $.ajax({
                        type: 'POST',
                        url: '{{ route("delete_quries") }}',
                        data: {
                            _token: '{{ csrf_token() }}',
                            ids: ids
                        },
                        success: function(response) {
                            if (response.status == 'success') {
                                toastr.success('Items deleted successfully.');
                                setTimeout(() => {
                                    window.location.reload();
                                }, 600);
                                // Refresh or update the page here
                            } else {
                                alert('Error deleting items.');
                            }
                        },
                        error: function() {
                            alert('Error deleting items.');
                        }
                    });
                }
            });
        });
    </script>
@endpush
