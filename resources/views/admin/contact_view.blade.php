
@extends('admin.layouts.master')
@section('content')

<div class="row">
                  
              </div>
              <!-- /. ROW  -->
              <div class="row">
                  <div class="col-md-12">
                     <div >
   
    <div class="row pad-top-botm ">
       <div class="col-lg-5 col-md-5 col-sm-5">
         
       
       </div>
        <div class="col-lg-5 col-md-5 col-sm-5">
          
        <u>     <strong>   TransferZone.</strong>
        </u>    <br />
       <h3><b> {{$contact_details->full_name}}
          </b> </h3> 
       </div>
   </div>
   <div  class="row text-center contact-info">
       <div class="col-lg-12 col-md-12 col-sm-12">
           <hr />
           <span>
               <strong>Email : {{$contact_details->email}}</strong> 
           </span>
           <span>
               <strong>Call :{{$contact_details->email}}</strong> 
           </span>
            <span>
               <strong>Fax :</strong>  +012340-908- 890 
           </span>
           <hr />
       </div>
   </div>

   <div  class="row pad-top-botm client-info">
       <div class="col-lg-6 col-md-6 col-sm-6">
       <h4>  <strong>Client Information</strong></h4>
         <strong> </strong>
           <br />
           
           <b>subject :{{$contact_details->subject}}</b>
            <br />
               USA
           <br />
           <b>Call :{{$contact_details->phone_number}}</b> 
            <br />
           <b>E-mail :{{$contact_details->email}}</b> 
                <b>
     
       </div>
       </div>
      
   </div>
   



<div>
          
    <center>      <h4>  <strong>Description</strong></h4>
     </center>
    1.   {{$contact_details->discription}}
    </div>


                      </table>
             </div>
                <hr />
            <div class="ttl-amts">
                <h4> <strong>  </strong> </h4>
           </div>
       </div>
   </div>
    <div class="row">
       <div class="col-lg-12 col-md-12 col-sm-12">
          <strong> Important: </strong>
           <ol>
                
               <li>
                   https://designprosca.com/TransferZone 

               </li>
           </ol>
           </div>
       </div>
    
</div>






    </div>
</div>



    </div>
    
  </div>
</div>
</form>
@endsection('content')