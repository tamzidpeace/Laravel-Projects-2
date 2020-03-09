<!DOCTYPE html>
<html>

<head>
    <title>Ajax Autocomplete Textbox in Laravel using JQuery</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style type="text/css">
        .box {
            width: 600px;
            margin: 0 auto;
        }
    </style>
</head>

<body>
    <br />
    <div class="container box">
        <h3 align="center">Ajax Autocomplete Textbox in Laravel using JQuery</h3><br />

        <div class="form-group">
            <div id="">
                <input type="text" name="countryList" id="countryList" class="form-control">
            </div>

            <input type="text" name="country_name" id="country_name" class="form-control input-lg"
                placeholder="Enter Country Name" />
            
        </div>

        
        {{ csrf_field() }}
    </div>
</body>

</html>

<script>
    $(document).ready(function(){

 $('#country_name').keyup(function(){ 
        var query = $(this).val();
        if(query != '')
        {
         var _token = $('input[name="_token"]').val();
         $.ajax({
          url:"{{ route('autocomplete.fetch') }}",
          method:"POST",
          data:{query:query, _token:_token},
          success:function(data){
           $('#countryList').fadeIn();  
                    //$('#countryList').html(data);
                    $('#countryList').val(data);
          }
         });
        }
    });

    $(document).on('click', 'li', function(){  
        $('#country_name').val($(this).text());  
        // $('#countryList').fadeOut();  
        $('#countryList').val(data);
    });  

});
</script>