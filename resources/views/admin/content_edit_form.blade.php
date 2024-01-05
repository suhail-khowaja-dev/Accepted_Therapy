@extends('admin.layouts.master')
@section('content')

@if ($message = Session::get('Content_update'))
<div  class="alert alert-success alert-block" id="successBtn" style="background: #F7E7CE">
    <button type="button"   class="close" data-dismiss="alert">×</button>	
    <strong  id="test">{{ $message }}</strong>
</div>
@endif
<body>              
    <form method="post" action="{{route('banner' ,['content_id'=>$content_detail->id])}}" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-lg-6">
                <div class="form-group">
                    <input type="text" name="page_name" class="form-control" value="{{$content_detail->page_name}}" readonly="">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="form-group">
                    <input type="text" name="title" class="form-control" value="{{$content_detail->title}}">
                </div>
            </div>

  @if(Auth::id()!=2)          
            <div class="col-lg-6">
                <div class="form-group">
                    <input type="text" name="resume" class="form-control" value="{{$content_detail->resume}}" >
                </div>
            </div>
            <div class="col-lg-6">
                <div class="form-group">
                    <input type="text" name="build_your" class="form-control" value="{{$content_detail->build_your}}">
                </div>
            </div>
            <div class="col-lg-12">
                <div class="form-group">
                    <input type="text" name="building_resume" class="form-control" value="{{$content_detail->building_resume}}">
                </div>
            </div>                                
        </div>
        <div class="form-group">
            <textarea class="ckeditor form-control" id="bericht" name="texteditor" >{{$content_detail->description}}</textarea>
        </div>
        <div class="form-group">
           @if($content_detail->image==null) 
           <img src="{{asset('assets/images/1x/clients.jpg')}}" width="85px" width="117" >
           @else  
           <img src="{{url('/uploads/cms/'.$content_detail->image)}}" width="85px" > 
           @endif
           <input type="file" name="content"  id="author_img">
           @error('content')
           <p class="help-block" style="color: red">{{$errors->first('content')}} 
           </p>
           @enderror      
           <p style="color:red" >  
            Image Size Recommended: 1110px * 1110px <br>
            Allow Ext: png|jpeg|jpg
           </p>
        </div>
         @else
                 <div class="col-lg-12">
                            <div class="form-group">
                                <label for="sectionName">Title:</label>
                                <input type="text" name="seo_title" class="form-control" placeholder="Title" value="{{ $content_detail->seo_title }}"  required="" />
                            </div></div>
                             <div class="col-lg-12">
                            <div class="form-group">
                                <label for="sectionName">Keyword:</label>
                                <input type="text" name="seo_keyword" class="form-control" placeholder="KeyWords" value="{{ $content_detail->seo_keyword }}" required="" />
                            </div></div>
                             <div class="col-lg-12">
                            <div class="form-group">
                                <label for="sectionName">Descriptions:</label>
                                 <input type="text" name="seo_descriptions"  class="form-control" placeholder="Desciptions" value="{{ $content_detail->seo_descriptions }}" required="">
                            </div>
                          </div>
              @endif
              <div class="col-lg-12">
        <div class="form-group">
            <button type="submit" name="submit" value="Update"  class="class btn btn-primary">Update</button>
        </div></div>
    </form>
</div>
</div>
</body>
@endsection('content')