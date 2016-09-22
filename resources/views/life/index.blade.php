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
            padding-top: 10px;
            z-index: 100px;
        }
        .btn{
            padding: 0;
        }
        </style>
    </head>
    <body style="width: 95%">
        <div class="row  border-bottom white-bg dashboard-header">
        <div class="col-sm-12">
                <table class="table table-striped table-bordered table-hover table-condensed">
                    <caption>生活开支列表</caption>
                     <thead>
                        <tr>
                           <th>id</th>
                           <th>描述</th>
                           <th>费用</th>
                           <th>类型</th>
                           <th>创建时间</th>
                           <th>创建人</th>
                           <th>操作</th>
                        </tr>
                     </thead>

                     <tbody>
                     @if(isset($lifeMoneys))
                            @foreach ($lifeMoneys as $lifeMoney)
                               <tr>
                                   <td>{{$lifeMoney->id}}</td>
                                   <td>{{$lifeMoney->name}}</td>
                                   <td>{{$lifeMoney->money}}</td>
                                   <td>{{$lifeMoney->type}}</td>
                                   <td>{{$lifeMoney->createDate}}</td>
                                   <td>{{$lifeMoney->userId}}</td>
                                   <td>
                                        <button type="button" class="btn btn-link">编辑</button>
                                        <button type="button" onclick="del({{$lifeMoney->id}});" class="btn btn-link">删除</button>
                                    </td>
                                </tr>
                            @endforeach
                    @endif
                     </tbody>
                  </table>
        </div>
        <div class="middle-div">
            {{$lifeMoneys->render()}}
        </div>

    </div>
    <script type="text/javascript">
        function del(id) {
          $.post("");  
        }
    </script>
    </body> 
</html>
    