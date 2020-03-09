<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>

    <div id="app">
        {{-- {{ message }} --}}
{{message}}
    </div>






    {{-- vue code --}}
    <div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.5.16/vue.min.js">
        </script>

        <script>
            var app = new Vue({
  el: '#app',
  data: {
    message: 'Hello Vue!'
  }
})
        </script>
    </div>






</body>

</html>