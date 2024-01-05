
@extends('admin.layouts.master')

<style>
    .box1 {
        margin: 0 15px;
    }

    label {
        color: #8d9498 !important;
        font-family: gilroybold !important;
        font-size: 22px !important;
    }

    .thumbnailbox {
        height: 71px;
        width: 100px;
        border: 1px solid black;
        border-radius: 1px;
    }

    .newinput {
        padding: 1rem;
        font-family: gilroy;
        border-radius: 100px;
        outline: none;
        border: none;
        background-color: #F2F2F2;
        width: 100%;
    }

    .box {
        margin: 0 1rem;
    }

    .canceldiv {
        top: -11px;
        right: -13px;
    }

    .customclassicon {
        font-size: 27px !important;
        background-color: white !important;
        padding: 5px 10px 5px 10px !important;
        border-radius: 18px !important;
        cursor: pointer;
    }

    /* The container */
    .container {
        display: block;
        position: relative;
        padding-left: 35px;
        margin-bottom: 12px;
        cursor: pointer;
        font-size: 22px;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
    }

    .customcontainer {
        padding: .3rem 0 !important;
    }

    .modal-body {
        background-color: #0e101b2e;
    }

    /* Hide the browser's default radio button */
    .container input {
        position: absolute;
        opacity: 0;
        cursor: pointer;
    }

    /* Create a custom radio button */
    .checkmark {
        position: absolute;
        top: 0;
        left: 40;
        height: 16px;
        width: 16px;
        background-color: #eee;
        border-radius: 50%;
    }

    /* On mouse-over, add a grey background color */
    .container:hover input~.checkmark {
        background-color: #ccc;
    }

    /* When the radio button is checked, add a blue background */
    .container input:checked~.checkmark {
        background-color: #8d9498;
    }

    /* Create the indicator (the dot/circle - hidden when not checked) */
    .checkmark:after {
        content: "";
        position: absolute;
        display: none;
    }

    /* Show the indicator (dot/circle) when checked */
    .container input:checked~.checkmark:after {
        display: block;
    }

    /* Style the indicator (dot/circle) */
    .container .checkmark:after {
        top: 5px;
        left: 5px;
        width: 6px;
        height: 6px;
        border-radius: 50%;
        background: white;
    }
</style>
@section('content')
@if ($message = Session::get('save'))
<script type="text/javascript">  swal("Dear Sir!", "You have to Saved page and layout", "success"); </script>
@endif

@if ($message = Session::get('message_error'))
<script type="text/javascript">  swal("Dear Sir!", "In this same name Service  is already Exist", "error"); </script>
@endif
@if ($message = Session::get('dynamic_layout_updated'))
<script type="text/javascript">  swal("Dear Sir!", "Service content have been updated", "success"); </script>
@endif
<form action="{{route('dynamic_page_edit_confirm',['id'=>$dynamic_edit_layout->id])}}" method="POST" enctype="multipart/form-data">
    @csrf

    <div class="row">
       <div class="col-lg-6">
        <div class="form-group"><label>Types</label>

            <select class="form-control" name="type" aria-label="Default select example">

              <option value="1" {{$dynamic_edit_layout->type==1?'selected':''}}>Logistics & Warehouse</option>
              <option value="2" {{$dynamic_edit_layout->type==2?'selected':''}}>Delivery & Transportation</option>
          </select>
          @error('type')
          <p class="help-block" style="color: red">{{ $errors->first('type') }}
          </p>
          @enderror
      </div>
  </div>

  <div class="col-lg-6">
    <div class="form-group">
       <label>Title Name</label>
       <input type="text" name="page_name" value="{{$dynamic_edit_layout->page_name}}" class="form-control"
       placeholder="Enter Your Title Name"  >
       @error('page_name')
       <p class="help-block" style="color: red">{{ $errors->first('page_name') }}
       </p>
       @enderror
   </div>
</div>
</div>

@if(Auth::id()!=2)
<div class="row">
    <div class="col-lg-12">
        <div class="form-group">
            <label>Short Description</label>
           <input type="text" class="form-control" name="short_descriptions" value="{{$dynamic_edit_layout->short_descriptions}}" required>
            

            @error('short_descriptions')
            <p class="help-block" style="color: red">{{ $errors->first('short_descriptions') }}
            </p>
            @enderror
        </div>
    </div>
  </div>
  <div class="row">
    <div class="col-lg-12">
        <div class="form-group">
            <label>Second Description</label>
           <!-- <input type="text" class="form-control" name="second_descriptions" value="{{$dynamic_edit_layout->second_descriptions}}" required> -->
             <textarea class="ckeditor form-control" id="bericht" name="second_descriptions"
            required rows="4" cols="50" style="min-width: 100%">{!!$dynamic_edit_layout->second_descriptions!!}</textarea>

            @error('second_descriptions')
            <p class="help-block" style="color: red">{{ $errors->first('second_descriptions') }}
            </p>
            @enderror
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="form-group">
            <label>Description</label>
            <textarea class="ckeditor form-control" id="bericht" name="descriptions"
            required>{!!$dynamic_edit_layout->descriptions!!}</textarea>

            @error('descriptions')
            <p class="help-block" style="color: red">{{ $errors->first('descriptions') }}
            </p>
            @enderror
        </div>
    </div>
</div>
   <div class="row">

    <div class="col-sm-12">
<div><img src="{{url('uploads/types_services/'.$dynamic_edit_layout->home_image)}}" width="100px"></div>  
       <label>Home Image &nbsp</label>
 
       <input type="file" name="home_image" id="author_img"  width="100px" height="100px"> 

       @error('home_image')
       <p class="help-block" style="color: red">{{ $errors->first('home_image') }}
       </p>
       @enderror
    </div>
    &nbsp
    <div class="col-sm-12">
    <div><img src="{{url('uploads/types_services/'.$dynamic_edit_layout->image)}}" width="100px"></div>  
     <label>Front Image &nbsp&nbsp</label>

     <input type="file" name="image" id="author_img"  width="100px" height="100px">          
     @error('image')
     <p class="help-block" style="color: red">{{ $errors->first('image') }}
     </p>
     @enderror
    </div>

    &nbsp
  <div class="col-sm-12">
    <div><img src="{{url('uploads/types_services/'.$dynamic_edit_layout->header_image)}}" width="100px"></div>  
    <label>Header Image</label>
    <input type="file" name="header_image" id="author_img"  width="100px" height="100px">
    @error('header_image')
    <p class="help-block" style="color: red">{{ $errors->first('header_image') }}
    </p>
    @enderror
    </div>
  </div>
    <p style="color:red"> Image Size Recommended: 507px * 269px<br>
      Allow Ext: png|jpeg|jpg
    </p>

     @else

                            <div class="form-group">
                                <label for="sectionName">Title:</label>
                                <input type="text" name="seo_title" class="form-control" placeholder="Title" value="{{ $dynamic_edit_layout->seo_title }}"  required="" />
                            </div>
                            <div class="form-group">
                                <label for="sectionName">Keyword:</label>
                                <input type="text" name="seo_keyword" class="form-control" placeholder="KeyWords" value="{{ $dynamic_edit_layout->seo_keyword }}" required="" />
                            </div>
                            <div class="form-group">
                                <label for="sectionName">Descriptions:</label>
                                 <input type="text" name="seo_descriptions"  class="form-control" placeholder="Desciptions" value="{{ $dynamic_edit_layout->seo_descriptions }}" required="">
                            </div>

 @endif
    <div class="modal-footer no-bd" style="margin-right:92%">
        <button type="submit" id="" class="btn btn-primary">Update</button>
        
    </div>
</form>
</div>
</div>





@endsection
