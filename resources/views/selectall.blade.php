
@extends('layouts.bootstrap')

@section('content')



<div class="col-md-12">

     <div id="main" class="row">



                   





                    <!-- sidebar content -->
                    <div id="sidebar" class="col-sm-3">
                        @include('includes.lsidebar')
                    </div>

                    <!-- main content -->

                  
    



                    <div id="content " class="col-sm-6 vertical-center">
                      
                      <table class="table  table-bordered  background: #eae9db;">                       
                          
                        <tbody>
                          <tr><td  ><strong>Name:</strong></td>
                            <td  >
                            
                               

                             <a href="/edit/{{$memberid}}">{{ $members->FIRST_NAME }}, 
                              {{ $members->LAST_NAME }} - {{$members->GVR_NUMBER}}</a>


                            
                             


                              
                              
                              
                              </td>
                         </tr> 

                           <tr  >  
                            <td  ><strong>Address:<strong></td>
                            <td  >  {{ $members->PROPERTY_ADDRESS }} </td>                          
                          </tr>

                          <tr  >  
                            <td  ><strong>ZIP:<strong></td>
                            <td  >  {{ $members->MAILING_ZIP }} </td>                          
                          </tr>

                          <tr>  
                            <td  ><strong>Telephone:<strong></td>
                            <td  >  {{ $members->TELEPHONE }} </td>                          
                          </tr>

                           <tr>  
                            <td  ><strong>Email:<strong></td>
                            <td  >  {{ $members->email }} </td>                          
                          </tr>

                           <tr>  
                            <td  ><strong>Membership:<strong></td>
                            <td  >  {{ $members->MEMBERSHIP_TYPE }} </td>                          
                          </tr>                          
                          
                          <tr>  
                            <td  ><strong>Computer Type:<strong></td>
                            <td  >  {{ $members->COMPUTER_TYPE}} </td>                          
                          </tr>


                          @if (   $renewalstatus   == "1" )
                             <tr bgcolor="#32CD32">
                              <td  ><strong>Expiration Date:<strong></td>        
                              <td  > {{ Carbon\Carbon::parse($members->EXPIRE_DATE)->format('m-d-Y') }} </td> 
                            </tr>
                          @else

                           <tr bgcolor="#FF6347">
                              <td  ><strong>Expiration Date:<strong></td>        
                              <td  > {{ Carbon\Carbon::parse($members->EXPIRE_DATE)->format('m-d-Y') }} </td> 
                            </tr>


                        @endif
                          
                          <tr>  
                            <td  ><strong>Change Date:   <strong></td>
                            <td  > {{ Carbon\Carbon::parse($members->DATE_CHANGED)->format('m-d-Y') }} </td>                       
                          </tr>



                          @if (($members->MEMBERSHIP_TYPE) == 'F')

                          <tr>  
                            <td  ><strong>Primary Member:<strong></td>
                            <td  ><strong> {{ $familyprimary[0]->LAST_NAME }}, {{ $familyprimary[0]->FIRST_NAME}} - {{ $familyprimary[0]->GVR_NUMBER}}</strong></td>                          
                          </tr>

                          @endif

                           

                           
                           
                          
                        </tbody>
                      </table>

                    </div>

                     <!-- sidebar content -->
                      <div id="sidebar" class="col-sm-3">
                        @include('includes.rsidebar')
                      </div>
                       
              </div>


            


             

     </div>
                  

</div>

@stop





 

@section('scripts')

  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" />
   

   

          

     
    
  
      
  </script>
  
@stop





  