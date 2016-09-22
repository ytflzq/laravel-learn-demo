<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>
        <link rel="stylesheet" type="text/css" href="{{asset('static/common.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('static/bootstrap/css/bootstrap.css')}}">
        <script type="text/javascript" src="{{asset('static/jquery/jquery-1.8.2.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('static/bootstrap/js/bootstrap.min.js')}}"></script>
        <style type="text/css">
        .middle-div{
            max-width: 300px;
            margin: 0 auto;
            padding-top: 50px;
            z-index: 100px;
            border-left-color: red;
        }
        .full-width{
            width: 100%;
        }
        </style>
    </head>
    <body>
        <div class="middle-div">
            <div>
                <div>

                    <h1 class="logo-name"></h1>

                </div>
                <p class="text-muted text-center">
                    <small>欢迎使用</small>
                </p>
                <form action="login" method="post"> 
                    {{ csrf_field() }}
                    <div id="loginFrom" role="form" method="post">
                        <div class="form-group">
                            <input type="email" name="username" value="" class="form-control" placeholder="用户名" required="">
                        </div>
                        <div class="form-group">
                            <input type="password" name="password" value="" class="form-control" placeholder="密码" required="">
                        </div>
                        <button id="submit" type="submit" class="btn btn-primary block full-width">登 录</button>
                         <p class="text-muted text-center"> 
                            {{$mes}}
                        </p> 

                    </div>
                </form>
            </div>
        </div>
    </body> 
</html>
    