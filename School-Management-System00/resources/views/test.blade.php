<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js">
    </script>

    <script>
        function getMessage() {
          $.ajax({
             type:'POST',
             url:'/getmsg',
             data:'_token = <?php echo csrf_token() ?>',
             success:function(data) {
                $("#msg").html(data.msg);
             }
          });
       }
    </script>
    </head>

    <body>
        <div id='msg'>This message will be replaced using Ajax.
            Click the button to replace the message.</div>
        <?php
       //echo Form::button('Replace Message',['onClick'=>'getMessage()']);
    ?>
     <button type="submit" onclick="getMessage()" class="btn btn-primary">Submit</button>
    </body>

</body>

</html>