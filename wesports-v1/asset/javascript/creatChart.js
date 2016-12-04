
        // 基于准备好的dom，初始化echarts实例
        var myChart = echarts.init(document.getElementById('barcharts'));

        // 指定图表的配置项和数据
        var option = {
            title: {
                text: '周记录'
            },
            tooltip: {},
            legend: {
                data:['公里']
            },
            xAxis: {
                data: ["周一","周二","周三","周四","周五","周六","周日"]
            },
            yAxis: {},
            series: [{
                name: '公里',
                type: 'bar',
                data: [5.2, 6.3, 3.2, 7.2, 9.8, 4.3,5.0]
            }]
        };

        // 使用刚指定的配置项和数据显示图表。
        myChart.setOption(option);
