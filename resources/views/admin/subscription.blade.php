@extends('admin.layouts.master')
@section('content')
     


@if ($message = Session::get('article_update'))
<div  class="alert alert-warning alert-block" id="successBtn" style="background: #F7E7CE">
    <button type="button"   class="close" data-dismiss="alert" >×</button>	
    <strong  id="test">{{ $message }}</strong>
</div>
@endif

            @if (session('Subscription_delete'))
            <div class="alert alert-danger">
                {{ session('Subscription_delete') }}
            </div>
            @endif
                            <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <div class="d-flex align-items-center">
                                      <h4 class="card-title">
                                        <h3 style="color:green">Subscriptions Management</h3>  
                                        </div>
                                      </div>
                                </div>
                                <div class="card-body">
                                    <!-- Modal -->
                                    <div class="modal fade" id="addRowModal" tabindex="-1" role="dialog" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header no-bd">
                                                    <h5 class="modal-title">                                                     
                                      </h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">               
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <a href="{{route('subs_message')}}">
<button type="button" class="btn btn-primary"> Subscription Message</button>
</a>                                    
                                    <div class="table-responsive">
                                        <table id="sort" class="display table table-striped table-hover" >
                                            <thead>
                                                <tr>
                                               <th>Sr No</th>  
                                               <th>Name</th>                             
                                               <th>Email</th>
                                         
                                             <th style="width: 10%">Action</th>
                                                </tr>
                                            </thead>
                                            <tfoot>
                                                <tr>
                                           <th>Sr No</th>
                                            <th>Name</th>     
                                            <th>Email</th>
                                           
                                            <th>Action</th>
                                              </tr>
                                            </tfoot>
                                            <tbody>
                        @foreach($subscription as $cms_content_detail)
                                                <tr>
     <td>{{$cms_content_detail->id}}</td>
      <td>{{$cms_content_detail->name}}</td>                                            
    <td>{{$cms_content_detail->email}}</td>
    


                                                    <td>
                                        <div class="form-button-action">
                
<a href="{{route('subscribtion_delete' , ['id'=>$cms_content_detail->id])}}" onclick="return confirm('Are you sure you want to delete this subscription?');">                            <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="Remove">
                                                                <i class="fa fa-times"></i>
                                                            </button></a>
                                                        </div>
                                                    </td>
                                                </tr>
                   
@endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
</div></div>
























@endsection('content')




    
    
