@extends('admin.layouts.master')
@section('content')






@if ($message = Session::get('article_update'))
<div  class="alert alert-warning alert-block" id="successBtn" style="background: #F7E7CE">
  <button type="button"   class="close" data-dismiss="alert" >×</button>	
  <strong  id="test">{{ $message }}</strong>
</div>
@endif

<body>

 <form method="post" action="{{route('client_edit_confirm' ,['id'=>$content_detail->id])}}" enctype="multipart/form-data">
  @csrf

  <div class="row">
   <!--  <div class="col-lg-12">
      <div class="form-group">
        Link
        <input type="text" name="title" class="form-control" value="{{$content_detail->title}}">
      </div>
    </div> -->
  </div>

                          <div class="col-sm-3">
                            <br/>
                            <div>  Image
                            </div> 
                            @if($content_detail->image==null) 
                            <img src="{{asset('assets/images/1x/clients.jpg')}}" width="85px" width="117" >
                            @else  
                            <img src="{{url('/uploads/clients/'.$content_detail->image)}}" width="85px" width="117" >
                            @endif
                          </div>  <br> <div class="col-sm-3">
                           <input type="file" name="image"  id="author_img" value="Feature Image">
                           @error('image')
                           <p class="help-block" style="color: red">{{$errors->first('image')}} 
                           </p>
                           @enderror
                           <p style="color:red">  Image Size Recommended: 507px * 269px
                           Allow Ext: png|jpeg|jpg </p></div>
                           <div class="col-sm-3">
                            <button type="submit" name="submit" value="update" class="btn btn-primary">Update</button>
                          </div>


                        </form>

                      </div></div>
                    </div>
                  </body>
                  <script type="text/javascript">
                    setTimeout(()=>{
                      var po = document.getElementById('successBtn')
                      if(po != null){
                        po.style.display = 'none'
                      }
                    },5000)
                  </script>
                </div>
                @endsection('content')

