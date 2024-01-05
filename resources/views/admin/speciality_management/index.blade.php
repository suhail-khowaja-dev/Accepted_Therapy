@extends('admin.layouts.master')

@section('content')

    @if ($message_error = Session::get('message_error'))

        <div class="alert alert-warning alert-block" id="successBtn" style="background: #F7E7CE">

            <button type="button" class="close" data-dismiss="alert">×</button>

            <strong id="test">{{ $message_error }}</strong>

        </div>

    @endif

    @if (session('article_add'))

        <div class="alert alert-success" id="successBtn">

            {{session('article_add')}}

        </div>

    @endif







    @if(session()->has('speciality_management_status'))

    <script type="text/javascript">  swal("Dear Sir!", "Successfully status have been changed", "success"); </script>

    @endif

   @if(Session::has('speciality_member_deleted'))
    <div class="alert alert-success d-flex justify-content-between align-items-center">
        <p style="margin:0;">{{ Session::get('speciality_member_deleted') }}</p>        
    </div>
    <br>
@endif

@if(Session::has('success'))
    <div class="alert alert-success d-flex justify-content-between align-items-center">
        <p style="margin:0;">{{ Session::get('success') }}</p>
    </div>
    <br>
@endif



    <div class="col-md-12">

        <div class="card">

            <div class="card-header">

                <div class="d-flex align-items-center">

                    <h4 class="card-title">

                        <h3 style="color:green">Specialities Management</h3>

                           <button class="btn btn-primary btn-round ml-auto" >

                            <a href="{{route('add_speciality')}}" style="color: #f7f7f7">  <i class="fa fa-plus"></i>Add</a>

                        </button>

                </div>

            </div>

        </div>

        <div class="card-body">

            <div class="table-responsive">

                <table id="sort" class="display table table-striped table-hover">

                    <thead>

                        <tr>

                            <th>Sr No</th>

                             <th>Abbreviation</th>

                            <th>Description</th>

                            <th>Status</th>


                            <th style="width: 10%">Action</th>

                        </tr>

                    </thead>

                    <tfoot>

                        <tr>

                            <th>Sr No</th>

                             <th>Abbreviation</th>

                            <th>Description</th>

                            <th>Status</th>



                            <th>Action</th>

                        </tr>

                    </tfoot>

                    <tbody>

                        @foreach ($specialities as $speciality)

                            <tr>



                                <td>{{$speciality->id ?? '' }}</td>

                                <td>{{$speciality->speciality_title ?? ''}}</td>

                                <td>{{$speciality->description ?? '' }}</td>

                                <td><a href="{{route('speciality_status' , ['id'=>$speciality->id])}}">  @if($speciality->status==1)

                                <button class="btn btn-info btn-sm"><i class="fa fa-thumbs-up"></i></button>

                                @else

                                <button class="btn btn-danger btn-sm"><i class="fa fa-thumbs-down"></i></button>

                                @endif</a></td>



            <td> <div class="form-button-action">

                <a href="{{route('edit_speciality',['id' => $speciality->id]) }}">
                    <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit Task" >
                        <i class="fa fa-edit"></i>
                    </button>
                </a>

                <a href="{{route('speciality_delete' , ['id'=>$speciality->id])}}" onclick="return confirm('Are you sure you want to delete this Page?');">
                    <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="Remove">
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

