<html lang="en">

<head>
  <title>Laravel 5 - Dynamic autocomplete search using select2 JS Ajax</title>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
</head>

<body>

<div class="container">

  <h2>Laravel 5 - Dynamic autocomplete search using select2a JS Ajax</h2>
  <br/>
  <select class="itemName form-control" style="width:500px;" name="itemName"></select>

</div>

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

</body>
</html>