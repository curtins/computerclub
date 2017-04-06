@extends('layouts.bootstrap')

@section('content')


<div class="col-md-12">


                      <div class="row">

                           <div class="  lead"><b>Last Name or GVR#</b></div>


                      </div>    

                              <div class="row">

                                  <div class=" margin-top: 1.5em;   width:550px;top-margin:0px auto;margin-top:30px;height:200px;"> 
                                      
                                      
                                          
                                     <select id="selectitem" class="itemName form-control"  style="width:300px" name="itemName"></select></div>
                                   
                              </div>

                              <div class="row spacer">

                                <div class="span4"></div>
                              
                              </div>


                               <div class="row spacer">


                               <div><a href="{{action('Select2AutocompleteController@getMember')}}">Link name/Embedded Button</a></div> 
                              
                              

                              
                              </div>


                            
                   

                            
                       
        </div>


 


        
 










@stop


@section('scripts')

  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>

  <script type="text/javascript">

      $('.itemName').select2({
        placeholder: 'Select an item',
        ajax: {
           url: '/select2-autocomplete-ajax', 
          dataType: 'json',
          delay: 250,
          processResults: function (data) {
            return {
              results:  $.map(data, function (item) {
                    return {
                        text: item.last_name + ', ' + item.first_name + ' - ' + item.gvr_number + ' - ' + item.membership_type,
                        id: item.id
                    }
                })
            };
          },
          cache: true
        }
      });
      
  </script>
  
@stop





  