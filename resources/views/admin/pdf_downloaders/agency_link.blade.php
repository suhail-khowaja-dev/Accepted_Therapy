@extends('admin.layouts.master')

@section('content')
    

    <div class="col-md-12">
        <div class="card">

            <div class="card-header">

                <div class="d-flex align-items-center">

                    <h4 class="card-title">

                        <h3 style="color:green">Agency's Links</h3>

                </div>

            </div>

        </div>

        <div class="card-body">

            

            <div class="table-responsive">

                <table id="sort" class="display table table-striped table-hover">

                    <thead>

                        <tr>

                            <th>Sr No</th>

                            <th>Link</th>
                            
                            <th>Generate Password</th>
                            

                        </tr>

                    </thead>

                    <tfoot>

                        <tr>

                            <th>Sr No</th>

                            <th>Link</th>
                            
                            <th>Generate Password</th>
                            

                        </tr>

                    </tfoot>

                    <tbody>

                        @foreach ($user_links as $user_link)
                        
                            <tr>
                                <td>{{ $user_link->id }}</td>
                                <td>{{ route('show_card_login',['link'=> $user_link->generated_link]) ?? '' }}</td>
                                <td>
                                    
                                    @if ($user_link->link_used_count == 0 && !empty($user_link->request_for_password))
                                        <a href="{{ route('password_genrate', ['id' => $user_link->id]) }}">
                                            <button class="btn btn-info btn-sm"><i class="fa fa-unlock-alt" aria-hidden="true"></i> Generate Password</button>
                                        </a>
                                    @else
                                        
                                    @if (!empty($user_link->used_status))
                                        <a href="javascript:void()">
                                            <button class="btn btn-success btn-sm"><i class="fa fa-unlock-alt" aria-hidden="true"></i> Active Password</button>
                                        </a>
                                    @else
                                    <a href="javascript:void()">
                                        <button class="btn btn-warning btn-sm"><i class="fa fa-unlock-alt" aria-hidden="true"></i> N/A</button>
                                    </a>
                                    @endif 

                                    @endif
                                    
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
@if (Session::has('user_password_success'))
<script>
    swal('Password','{{ Session::get('user_password_success') }}','success');
</script>
@endif

@if (Session::has('user_password_fail'))
<script>
    swal('Password','{{ Session::get('user_password_fail') }}','error');
</script>
@endif

@endpush