<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>
        <link rel="stylesheet" type="text/css" href="{{asset('static/common.css')}}">
        <script type="text/javascript" src="{{asset('static/jquery/jquery-1.8.2.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('static/vue/vue.js')}}"></script>
        <script type="text/javascript" src="{{asset('static/hasUserIdSession.js')}}"></script>
        <style type="text/css">
        </style>
    </head>
    <body style="width: 96%">
        <div id = "map" style="width:100%;height:500px;">
            你的浏览器不支持html5
        </div>
    <div id="app">
      {{@message }}
    </div>
        <script type="text/javascript">
            var app = new Vue({
              el: '#app',
              data: {
                message: 'Hello Vue!'
              }
            });
        </script>
    </body> 
</html>
