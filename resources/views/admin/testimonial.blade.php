@extends('admin.layouts.master')

    @section('content')







    @if ($message = Session::get('article_update'))

    <div  class="alert alert-warning alert-block" id="successBtn" style="background: #F7E7CE">

        <button type="button"   class="close" data-dismiss="alert" >×</button>	

        <strong  id="test">{{ $message }}</strong>

    </div>

    @endif



    @if (session('article_add'))

    <div class="alert alert-success">

        {{ session('article_add') }}

    </div>

    @endif







    @if ($message = Session::get('testimonial_update'))
    <div  class="alert alert-success alert-block" id="successBtn" style="background: #F7E7CE">
        <button type="button"   class="close" data-dismiss="alert">×</button>   
        <strong  id="test">{{ $message }}</strong>
    </div>
    @endif

    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="d-flex align-items-center">
                  <h4 class="card-title">
                    <h3 style="color:green">Quote Management</h3>
                </h4>                                  
            </div>
        </div>
    </div>
    <div class="card-body">
        <!-- Modal -->

        <div class="table-responsive">

            <table id="sort" class="display table table-striped table-hover" >

                <thead>

                    <tr>

                        <th>Sr No</th>                      

                        <th>Quote name</th>

                        <!-- <th>Status</th> -->

                        <th>View</th>

                        <th style="width: 10%">Action</th>

                    </tr>

                </thead>

                <tfoot>

                    <tr>

                       <th>Sr No</th>  

                       <th>Quote name</th>

                       <!-- <th>Status</th> -->

                       <th>View</th>

                       <th>Action</th>

                   </tr>

               </tfoot>

               <tbody>

                @foreach($cms_content as $cms_content_detail)

                <tr>

                  <td>{{$cms_content_detail->id}}</td>                                           

                  <td>{{$cms_content_detail->name}}</td>

                  <td>

                    <i class="fa fa-view btn btn-primary" data-toggle="modal"

                    data-target="#myModal{{ $cms_content_detail->id }}">View</i>

                </td>

                <td>

                    <div class="form-button-action">

                        <a href="{{route('testimonial_action_delete' , ['id'=>$cms_content_detail->id])}}" onclick="return confirm('Are you sure you want to delete this Quote?');">                            <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="Remove">
                            <i class="fa fa-times"></i>
                        </button></a>
                    </div>
                </td>
            </tr>
            <div class="container">
                <div class="modal fade" id="myModal{{ $cms_content_detail->id }}" role="dialog">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header customModalHeaderT"
                            style="background-color: #1a2035!important;color: white"><b>Quote 
                            Management Detail</b>
                            <button type="button" class="close customModalClose"
                            data-dismiss="modal">&times;</button>
                            <h4 class="modal-title"></h4>
                        </div>
                        <div class="modal-body">
                            <div class="modal-body modalBody">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="recipient-name" class="col-form-label">
                                            Name:</label>
                                            <input type="text" class="form-control"
                                            value="{{ $cms_content_detail->name }}"
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
                            <div class="modal-body modalBody">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="recipient-name" class="col-form-label">
                                            Contact No:</label>
                                            <input type="text" class="form-control"
                                            value="{{ $cms_content_detail->phone }}"
                                            id="recipient-name" readonly="">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="recipient-name" class="col-form-label">
                                            Company Name:</label>
                                            <input type="text" class="form-control"
                                            value="{{ $cms_content_detail->company_name }}"
                                            id="recipient-name" readonly="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-body modalBody">
                                <div class="row">
                                  @if($cms_content_detail->services)
                                  <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="recipient-name" class="col-form-label">Services:</label>    
                                        <br>                      
                                        <select class="js-example-basic-multiple disabled"  multiple="true" readonly="readonly"> 
                                          @foreach (json_decode($cms_content_detail->services) as $services)
                                          <option value="{{ $services }}" selected="" readonly="readonly">{{ $services }}</option>
                                          @endforeach                              
                                      </select>
                                  </div>
                              </div>
                              @endif
                              @if($cms_content_detail->vehicles)
                              <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="recipient-name" class="col-form-label">How Are Your Inbounds Arriving?</label>
                                    <br>
                                    @foreach (json_decode($cms_content_detail->vehicles) as $vehicles)
                                    @if($vehicles)
                                    <input class="checkButtom" type="checkbox" id="vehicle1" name="vehicle[]" value="Container" checked="" >
                                    <label for="vehicle1">{{$vehicles}}</label>
                                    <br>
                                    @endif
                                    @endforeach   
                                </div>
                            </div>
                            @endif
                        </div>
                    </div>
                    <div class="modal-body modalBody">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="recipient-name"
                                    class="col-form-label">Descrition:</label>
                                    <input type="text" class="form-control"
                                    value="{{ $cms_content_detail->description }}"
                                    id="recipient-name" readonly="">
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                <label for="recipient-name"class="col-form-label">Image:</label><br>
                                <div class="attachedImage">
                                    @foreach($cms_content_detail->images_quotes as $images_quotes)
                                         <img src="storage/app/{{$images_quotes->name}}" width="120px" height="120px" style="object-fit: cover" >          
                                    @endforeach
                                </div>
                                </div>
                            </div>
                            <div class="modal-footer" style="width: 100%">
                                <button type="button" class="btn btn-danger"
                                data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <style>
        .attachedImage {
            width: 90%;
            margin: auto;
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            justify-content: center;
            
        }
    .modalBody {
        padding: 6px 16px;
    }


    </style>
                      

    @endforeach

    </tbody>

    </table>

    </div>

    </div>

    </div></div>



    <script type="text/javascript">

     $(document).ready(function() {

        var $progControl = $(".js-example-basic-multiple").select2({

            

        });



        $('.disabled').attr({'readonly': 'readonly'}).trigger('change');



    </script>

    @endsection('content')








