    <!DOCTYPE HTML>  
    <html>  
      <head>  
        <link href="css/bootstrap-combined.min.css" rel="stylesheet">  
        <link rel="stylesheet" type="text/css" href="<?php echo e(asset('static/common.css')); ?>">
        <link rel="stylesheet" type="text/css" href="<?php echo e(asset('static/bootstrap/css/bootstrap.css')); ?>">
        <link rel="stylesheet" type="text/css" href="<?php echo e(asset('static/bootstrap/css/bootstrap-datetimepicker.min.css')); ?>">
        <script type="text/javascript" src="<?php echo e(asset('static/index/js/jquery.min.js')); ?>"></script>
        <script type="text/javascript" src="<?php echo e(asset('static/bootstrap/js/bootstrap.min.js')); ?>"></script>
        <script type="text/javascript" src="<?php echo e(asset('static/bootstrap/js/bootstrap-datetimepicker.js')); ?>"></script>
      </head>  
      <body>  
        <div id="datetimepicker" class="input-append date">  
          <input type="text" name="time" id="time"></input>  
          <span class="add-on">  
            <i data-time-icon="icon-time" data-date-icon="icon-calendar"></i>  
          </span>  
        </div>  

        <div class="input-append date form_datetime">
            <input size="16" type="text" value="" readonly>
            <span class="add-on"><i class="icon-th"></i></span>
        </div>
        <script type="text/javascript">  
          $('#datetimepicker').datetimepicker({  
            format: 'MM/dd/yyyy hh:mm:ss'
          });  
              $(".form_datetime").datetimepicker({
        format: "dd MM yyyy - hh:ii"
    });
        </script>  
      </body>  
    <html>  