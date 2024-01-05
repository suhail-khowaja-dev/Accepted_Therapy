@extends('admin.layouts.master')
@section('content')
        <div id="page-wrapper">






            @if (session('Content_update'))
            <div class="alert alert-success">
                {{ session('Content_update') }}
            </div>
            @endif



<body>{{-- 
<form action="{{route('banner')}}}" method=post>
@csrf --}}
    <div class="container">
        <div class="row">
            <div class="col-md-7 offset-3 mt-4">
                <div class="card-body">
                    <form method="post" action="{{route('contact_edit_confirm' ,['id'=>$content_detail->id])}}" enctype="multipart/form-data" >
                        @csrf
<div class="row">
    <div class="col-sm-6 mt-3">                        
        <div class="form-group form-group-default">
            <label>Name</label>
            <input  type="text"  placeholder="Enter User Name" class="form-control" name="full_name" value="{{$content_detail->full_name}}" required />
            @error('full_name')
            <p class="help-block" style="color: red">{{$errors->first('full_name')}} 
                                                   </p>
           @enderror
        </div>
    </div>
    <div class="col-md-6 mt-3">
        <div class="form-group form-group-default">
            <label>Email</label>
            <input  type="email" class="form-control" name="email" placeholder="Enter User Email" value="{{$content_detail->email}}" required />
       
            @error('email')
            <p class="help-block" style="color: red">{{$errors->first('email')}} 
                                                   </p>
           @enderror    
        </div>
    </div>
    <div class="col-md-6 mt-3">
        <div class="form-group form-group-default">
            <label>Contact</label>
            <input  type="number" class="form-control" name="phone_number" placeholder="Enter user contact #" value="{{$content_detail->phone_number}}" required />
            @error('phone_number')
            <p class="help-block" style="color: red">{{$errors->first('phone_number')}} 
                                                   </p>
           @enderror
     
        </div>
    </div>
    <div class="col-md-6 mt-3">
        <div class="form-group form-group-default">
            <label>Subject</label>
            <input  type="text" name="subject" class="form-control" placeholder="Enter user Subject"  value="{{$content_detail->subject}}" required />
        </div>
    </div>
                                                            
    <div class="col-md-12 mt-3">
		<div class="form-group form-group-default">
			<label>Description</label>
	
            <textarea class="ckeditor form-control" class="form-control" id ="bericht" name="discription" >{{$content_detail->discription}}</textarea>
  
            @error('discription')
                 <p class="help-block" style="color: red">{{$errors->first('discription')}} 
                                                        </p>
                @enderror
        </div>
	</div>

    <input type="submit" name="submit" value="submit">
                    </form>
                </div>
            </div>
        </div>
    </div>



</body>



</div>
@endsection('content')