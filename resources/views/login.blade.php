<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>
        <link rel="stylesheet" type="text/css" href="{{asset('static/bootstrap/css/bootstrap.css')}}">
        <script type="text/javascript" src="{{asset('static/jquery/jquery-1.8.2.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('static/bootstrap/js/bootstrap.min.js')}}"></script>
    </head>
    <body>
        <h6>
    1.通过添加 .table-striped class，您将在 <tbody> 内的行上看到条纹<br/>
    2.通过添加 .table-bordered class，您将看到每个元素周围都有边框<br/>
    3.通过添加 .table-hover class，当指针悬停在行上时会出现浅灰色背景<br/>
    4.通过添加 .table-condensed class，行内边距（padding）被切为两半，以便让表看起来更紧凑<br/>
    5.下表中所列出的上下文类允许您改变表格行或单个单元格的背景颜色。这些类可被应用到 tr、td 或 th。<br/>
  <table class="table">
   <thead>
      <tr>
         <th>类</th>
         <th>描述</th>
      </tr>
   </thead>
   <tbody>
      <tr>
         <td>active</td>
         <td>对某一特定的行或单元格应用悬停颜色</td>
      </tr>
      <tr >
         <td>success</td>
         <td>表示一个成功的或积极的动作</td>
      </tr>
      <tr>
         <td>warning</td>
         <td>表示一个需要注意的警告</td>
      </tr>
      <tr>
         <td>danger</td>
         <td>表示一个危险的或潜在的负面动作</td>
      </tr>
   </tbody>
</table>

    6.通过把任意的 .table 包在 .table-responsive class 内，您可以让表格水平滚动以适应小型设备（小于 768px）。当在大于 768px 宽的大型设备上查看时，您将看不到任何的差别。
     </h6>
<table class="table table-striped table-bordered table-hover table-condensed">
  <caption>基本的表格</caption>
   <thead>
      <tr>
         <th>省名</th>
         <th>省会城市</th>
      </tr>
   </thead>
   <tbody>
      <tr>
         <td>四川省</td>
         <td>成都</td>
      </tr>
      <tr class="danger">
         <td>重庆市</td>
         <td>重庆</td>
      </tr>
      <tr class="danger">
         <td>上海市</td>
         <td>上海</td>
      </tr>
      <tr>
         <td>河北省</td>
         <td>石家庄</td>
      </tr>
      <tr>
         <td>河南省</td>
         <td>郑州</td>
      </tr>
   </tbody>
</table>
    </body>
</html>
