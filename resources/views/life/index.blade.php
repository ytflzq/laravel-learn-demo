<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>
        <link rel="stylesheet" type="text/css" href="{{asset('static/common.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('static/bootstrap/css/bootstrap.css')}}">
        <script type="text/javascript" src="{{asset('static/jquery/jquery-1.8.2.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('static/bootstrap/js/bootstrap.min.js')}}"></script>
        <style type="text/css">
        </style>
    </head>
    <body>
        <div class="row  border-bottom white-bg dashboard-header">
        <div class="col-sm-12">
                <table class="table table-striped table-bordered table-hover table-condensed">
                    <caption>省会城市介绍</caption>
                     <thead>
                        <tr>
                           <th>省名</th>
                           <th>省会城市</th>
                        </tr>
                     </thead>

                     <tbody>
                     @if(isset($results))
                            @foreach ($results as $value)
                               <tr>
                                   <td>四川省</td>
                                   <td>成都</td>
                                </tr>
                            @endforeach
                    @endif
                     </tbody>
                  </table>
        </div>

    </div>
    </body> 
</html>
    