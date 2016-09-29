<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>
        <link rel="stylesheet" type="text/css" href="<?php echo e(asset('static/common.css')); ?>">
        <link rel="stylesheet" type="text/css" href="<?php echo e(asset('static/bootstrap/css/bootstrap.css')); ?>">
        <script type="text/javascript" src="<?php echo e(asset('static/jquery/jquery-1.8.2.min.js')); ?>"></script>
        <script type="text/javascript">
          
        </script>
        <script type="text/javascript" src="<?php echo e(asset('static/bootstrap/js/bootstrap.min.js')); ?>"></script>
        <script type="text/javascript" src="<?php echo e(asset('static/hasUserIdSession.js')); ?>"></script>
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
    <body style="width: 96%">
        <div class="box">
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
                       <?php if(isset($lifeMoneys)): ?>
                              <?php foreach($lifeMoneys as $lifeMoney): ?>
                                 <tr>
                                     <td><?php echo e($lifeMoney->id); ?></td>
                                     <td><?php echo e($lifeMoney->name); ?></td>
                                     <td><?php echo e($lifeMoney->money); ?></td>
                                     <td><?php echo e($lifeMoney->type); ?></td>
                                     <td><?php echo e($lifeMoney->created_at); ?></td>
                                     <td><?php echo e($lifeMoney->userId); ?></td>
                                     <td>
                                          <button type="button" class="btn btn-link">编辑</button>
                                          <button type="button" onclick="del(<?php echo e($lifeMoney->id); ?>);" class="btn btn-link">删除</button>
                                      </td>
                                  </tr>
                              <?php endforeach; ?>
                      <?php endif; ?>
                       </tbody>
                    </table>
          </div>
        </div>
        <div class="row">
            <div class="middle-div">
                <?php echo e($lifeMoneys->render()); ?>

            </div>
        </div>
        <div class="row">
            <form class="form-horizontal" action="/laravel/public/life/add" method="post" role="form">
              <div class="form-group">
                <label class="col-sm-2 control-label">描述:</label>
                <div class="col-sm-4">
                  <input name="name" class="form-control width300" type="text" required value="">
                </div>
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
                  <button id="submit" type="submit" class="btn btn-primary width100">确定</button>
                </div>
              </div>
            </form>
        </div>
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
