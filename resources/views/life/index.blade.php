<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>
        <link rel="stylesheet" type="text/css" href="{{asset('static/common.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('static/bootstrap/css/bootstrap.css')}}">
        <script type="text/javascript" src="{{asset('static/index/js/jquery.min.js')}}"></script>
        <script type="text/javascript">
          
        </script>
        <script type="text/javascript" src="{{asset('static/bootstrap/js/bootstrap.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('static/hasUserIdSession.js')}}"></script>
        <style type="text/css">
        .middle-div{
            max-width: 300px;
            margin: 0 auto;
            padding-top: 10px;
            z-index: 100px;
        }
        td > .btn{
            padding: 0;
        }
        .width100{
          width: 100px;
        }
        .width200{
          width: 200px;
        }
        .width300{
          width: 300px;
        }
        .width400{
          width: 400px;
        }.width500{
          width: 500px;
        }.width600{
          width: 600px;
        }
        </style>
    </head>
    <body style="width: 100%">
        <div class="box">
          <div class="col-sm-12">
              <div class="btn-group hidden-xs" id="exampleTableEventsToolbar" role="group">
                <button data-toggle="modal" data-target="#addModal" type="button" class="btn btn-outline btn-default">
                    <i class="glyphicon glyphicon-plus" aria-hidden="true"></i>
                </button>
               <!--  <button type="button" class="btn btn-outline btn-default">
                    <i class="glyphicon glyphicon-heart" aria-hidden="true"></i>
                </button>
                <button type="button" class="btn btn-outline btn-default">
                    <i class="glyphicon glyphicon-trash" aria-hidden="true"></i>
                </button> -->
            </div>
          </div>
          <div class="col-sm-12">
          
                  <table class="table table-striped table-bordered table-hover table-condensed">
                      <caption>生活开支列表</caption>
                       <thead>
                          <tr>
                             <th>id</th>
                             <th>描述</th>
                             <th>费用</th>
                             <th>类型</th>
                             <th>消费时间</th>
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
                                     <td>{{$lifeMoney->created_at}}</td>
                                     <td>{{$lifeMoney->userId}}</td>
                                     <td>
                                          <button type="button" data-toggle="modal" data-target="#updateModal" class="btn btn-link">编辑</button>
                                          <button type="button" onclick="del({{$lifeMoney->id}});" class="btn btn-link">删除</button>
                                      </td>
                                  </tr>
                              @endforeach
                      @endif
                       </tbody>
                    </table>
          </div>
        </div>
        <div class="row">
            <div class="middle-div">
                {{$lifeMoneys->render()}}
            </div>
        </div>
        <div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                      <div class="modal-content">
                          <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                              <h4 class="modal-title" id="myModalLabel">新增生活开支</h4>
                          </div>
                          <div class="modal-body">
                            
                            <form class="form-horizontal" action="/laravel/public/life/add" method="post" role="form">
                            <div class="form-group">
                              <label class="col-sm-2 control-label">描述:</label>
                              <div class="col-sm-4">
                                <input name="name" class="form-control width300" type="text" required value="">
                              </div>
                            </div>
                            <div class="form-group">
                              <label class="col-sm-2 control-label">费用:</label>
                              <div class="col-sm-4">
                                <input name="money" class="form-control width300"  type="number" max="10000.01" min="0.00" step="0.01" required value="">
                              </div>
                            </div>
                             <div class="form-group">
                              <label class="col-sm-2 control-label">消费日期:</label>
                              <div class="col-sm-4">
                                <input name="useDate" class="form-control width300"  type="datetime">
                              </div>
                            </div>
                            <div class="form-group">
                              <label class="col-sm-2 control-label">类型</label>
                              <div class="col-sm-4">
                                <select name="type" required class="form-control width300">
                                  <option value="菜">菜</option>
                                  <option value="肉">肉</option>
                                  <option value="米">米</option>
                                  <option value="水电气费">水电气费</option>
                                  <option value="其他">其他</option>
                                </select>
                              </div>
                             
                            </div>
                            <div class="form-group">
                              <label class="col-sm-2 control-label"></label>
                              <div class="col-sm-4">
                                <button id="submit" type="submit" class="btn btn-primary width100">确定</button>
                              </div>
                            </div>
                          </form>

                          </div>
                          <!-- <div class="modal-footer">
                              <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
                              <button type="button" class="btn btn-primary">提交更改</button>
                          </div> -->
                      </div><!-- /.modal-content -->
                  </div><!-- /.modal -->
    </div>
    <div class="modal fade" id="updateModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                      <div class="modal-content">
                          <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                              <h4 class="modal-title" id="myModalLabel">编辑生活开支</h4>
                          </div>
                          <div class="modal-body">
                            
                            <form class="form-horizontal" action="/laravel/public/life/add" method="post" role="form">
                            <div class="form-group">
                              <label class="col-sm-2 control-label">描述:</label>
                              <div class="col-sm-4">
                                <input name="name" class="form-control width300" type="text" required value="">
                              </div>
                            </div>
                            <div class="form-group">
                              <label class="col-sm-2 control-label">费用:</label>
                              <div class="col-sm-4">
                                <input name="money" class="form-control width300"  type="number" max="10000.01" min="0.00" step="0.01" required value="">
                              </div>
                            </div>
                            <div class="form-group">
                              <label class="col-sm-2 control-label">类型</label>
                              <div class="col-sm-4">
                                <select name="type" required class="form-control width300">
                                  <option value="菜">菜</option>
                                  <option value="肉">肉</option>
                                  <option value="米">米</option>
                                  <option value="水电气费">水电气费</option>
                                  <option value="其他">其他</option>
                                </select>
                              </div>
                             
                            </div>
                            <div class="form-group">
                              <label class="col-sm-2 control-label"></label>
                              <div class="col-sm-4">
              
    <script type="text/javascript">
        function del(id) {
          if(confirm("你确定要删除当前选择项么")){
            $.post("/laravel/public/life/delete/"+id,function (result) {
                if (result==1) {
                  if ($(".middle-div").find(".active").find("span").length=0) {
                    window.location = "/laravel/public/life/index";
                  }else{
                    window.location = "/laravel/public/life/index?page="+$(".middle-div").find(".active").find("span").text();
                  }
                   
                }
            });  
          }
        }

    </script>
    </body> 
</html>
