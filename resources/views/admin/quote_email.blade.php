   <style type="text/css">
       .bold{
        color: black;
        font-weight: bold;
       }

   </style>
    <div class="container">
         
                      
             
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                         <b>  <label for="recipient-name" class="col-form-label bold">
                                            Name: </label></b> {{ $cms_content_detail['name'] }}
                                           
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                          <b> <label for="recipient-name"
                                            class="col-form-label bold">Email: </label></b> {{ $cms_content_detail->email }}
                                          
                                        </div>
                                    </div>
                                </div>
                           
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                         <b>    <label for="recipient-name" class="col-form-label bold">
                                            Contact No: </label> </b> {{ $cms_content_detail->phone }}
                                           
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                           <b>  <label for="recipient-name" class="col-form-label bold">
                                            Company Name: </label></b> {{ $cms_content_detail->company_name }}
                                            
                                        </div>
                                    </div>
                                </div>
                          
                           
                                <div class="row">
                                  @if($cms_content_detail->services)
                                  <div class="col-sm-6">
                                    <div class="form-group">
                                         <b> <label for="recipient-name" class="col-form-label bold">Services:</label>    
                                       </b>                                        
                                          @foreach (json_decode($cms_content_detail->services) as $services)
                                         {{ $services }}, 
                                          @endforeach                              
                                      
                                  </div>
                              </div>
                              @endif
                              @if($cms_content_detail->vehicles)
                              <div class="col-sm-6">
                                <div class="form-group">
                                    <b>  <label for="recipient-name" class="col-form-label bold">How Are Your Inbounds Arriving?</label>
                                      </b>
                                    @foreach (json_decode($cms_content_detail->vehicles) as $vehicles)
                                    @if($vehicles)
                                   
                                   <b>  <label for="vehicle1">{{$vehicles}}, </label>
                                    </b>
                                    @endif
                                    @endforeach   
                                </div>
                            </div>
                            @endif
                        </div>
                  
                  
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                   <b>  <label for="recipient-name"
                                    class="col-form-label bold">Descrition:</label></b> 
                                   {{ $cms_content_detail->description }}
                                </div>
                            </div>
                            @if(!$cms_content_detail->images_quotes->isEmpty())
                            <div class="col-sm-12">
                                <div class="form-group">
                               <b>  <label for="recipient-name"class="col-form-label bold">Images:</label></b> <br>
                                <div class="attachedImage">
                                    @foreach($cms_content_detail->images_quotes as $images_quotes)
                                         <img src="{{ config('app.url') }}/storage/app/{{$images_quotes->name}}" width="120px" height="120px" style="object-fit: cover" >          
                                    @endforeach
                                </div>
                                </div>
                            </div>
                           @endif
                        </div>
                  
           