<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>
        <link rel="stylesheet" type="text/css" href="{{asset('static/common.css')}}">
        <script type="text/javascript" src="{{asset('static/jquery/jquery-1.8.2.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('static/echarts/echarts.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('static/hasUserIdSession.js')}}"></script>
        <style type="text/css">
        </style>
    </head>
    <body style="width: 96%">
        <select id = 'year' onchange = "onchangeYear();">
            <option value="2016" selected ='selected'>2016年</option>
            <option value="2017">2017年</option>
        </select>
        <div id = "map" style="width:100%;height:500px;">
            你的浏览器不支持html5
        </div>
        <script type="text/javascript">
        $(function() {
            onchangeYear();
        });

        function onchangeYear () {
            var year = $("#year").val();
            init(year);
        }
        function init (year) {
            var myChart = echarts.init(document.getElementById('map'));
            $.get("life/mapData", { 'year': year},function(data){
                // alert(data);
                var option = {
                        title: {
                            text: year+'年家庭支出情况',
                            position:'center'
                        },
                        tooltip: {
                            trigger: 'axis'
                        },
                        legend: {
                            data:['支出情况' ]
                        },
                        xAxis:  {
                            type: 'category',
                            boundaryGap: false,
                            data: ['一月','二月','三月','四月','五月','六月','七月','八月','九月','十月','十一月',"十二月"]
                        },
                        yAxis: {
                            type: 'value',
                            axisLabel: {
                                formatter: '{value} RMB'
                            }
                        },
                        series: [
                            {
                                name:'支出情况',
                                type:'line',
                                data:data.outdata,
                                markPoint: {
                                    data: [
                                        {name: '周最低', value: -2, xAxis: 1, yAxis: -1.5}
                                    ]
                                },
                                markLine: {
                                    data: [
                                        {type: 'average', name: '平均值'},
                                        [{
                                            symbol: 'none',
                                            x: '90%',
                                            yAxis: 'max'
                                        }, {
                                            symbol: 'circle',
                                            label: {
                                                normal: {
                                                    position: 'start',
                                                    formatter: '最大值'
                                                }
                                            },
                                            type: 'max',
                                            name: '最高点'
                                        }]
                                    ]
                                }
                            }
                        ]
                    };
                myChart.setOption(option);
            });
        
        }
        
        </script>
    </body> 
</html>
