<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- link & script --}}

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    {{-- end of link & scr--}}
    <title>Document</title>
</head>

<body>

    {{-- form --}}

    <div class="container">
        <form class="">
            
            <div class="form-group">
                <label for="country">Country</label>
                <select class="form-control" id="country" name="country">
                    <option value="">Select Country</option>
                    @foreach ($countries as $key=> $value)
                    <option value=" {{$key}} "> {{$value}} </option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="district">District</label>
                <select name="district" id="district" class="form-control form-control-sm">
                    <option value="">Select District</option>
                </select>
            </div>
            
        </form>
    </div>





    {{-- end of form --}}

    {{-- script --}}
    <script>
        $(document).ready(function() {
            //console.log("it's working");
            $('select[name="country"]').on('change', function(){
                var country_id = $(this).val();
                if(country_id) {
                    
                    $.ajax({
                        url:  '/getStates/'+country_id,
                        method:'GET',
                        dataType:'json',
                        
                        success:function(data) {
                            console.log(data);
                            $('select[name="district"]').empty();
                            $.each(data, function(key, value){
                                $('select[name="district"]')
                                .append('<option value="'+ key +'">'+ value +'</option>');
                            });
                        }
                    });
                    
                }
            });
        });
    </script>
    {{-- end of script --}}
</body>

</html>