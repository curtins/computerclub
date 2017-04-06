<html lang="en">
<head>
  <title>Jquery select2 ajax autocomplete example code with demo</title>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
</head>
<body>

<form>

<div style="width:520px;margin:0px auto;margin-top:30px;height:500px;">
  <h2>Select</h2>
  <select class="itemName form-control" style="width:300px" name="itemName"></select>
  <button type="button">Click Me!</button>

</div>

</form>

<script type="text/javascript">
      $('.itemName').select2({
        placeholder: 'Select an item',
        ajax: {
          url: '/ajaxpro.php',
          dataType: 'json',
          delay: 250,
          processResults: function (data) {
            return {
              results: data
            };
          },
          cache: true
        }
      });
</script>

</body>
</html>