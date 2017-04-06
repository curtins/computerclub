@extends('layouts.bootstrap')

@section('content')


       <div class="col-md-4">


                      <div class="row">

                           <div class="col-xs-offset-7 "><b>Last Name - GVR#</b></div>


                      </div>    

                       <div class="row">

                           <div class="col-xs-offset-7 col-xs-5 width:550px;top-margin:0px auto;margin-top:30px;height:200px;"> 
                              
                              
                                   
                                    <select id="selectitem" class="itemName form-control"  style="width:300px" name="itemName"></select>
                           

                        </div>     

                            
                       
        </div>
 
@stop


@section('scripts')

  <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>

   
</script>
  
@stop





  