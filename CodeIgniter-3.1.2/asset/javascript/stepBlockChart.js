$(function () {
    $.getJSON('json_step', function (data) {
    $('#stepDayChart').highcharts({
        chart: {
            type: 'heatmap',
            marginTop: 40,
            marginBottom: 80
        },
        title: {
            text: data['month']+'月步数表'
        },
        xAxis: {
            categories: ['第1周', '第2周', '第3周', '第4周', '第5周']
        },
        yAxis: {
            categories: ['周日','周一', '周二', '周三', '周四', '周五','周六'],
            title: null
        },
        colorAxis: {
            min: 0,
            minColor: '#FFFFFF',
            maxColor: Highcharts.getOptions().colors[0]
        },
        legend: {
            align: 'right',
            layout: 'vertical',
            margin: 0,
            verticalAlign: 'top',
            y: 25,
            symbolHeight: 280
        },
        tooltip: {
            formatter: function () {
                return '<b>' + this.series.xAxis.categories[this.point.x]+ 
                this.series.yAxis.categories[this.point.y]  + '</b> 您走了 <br><b>'  +
                    this.point.value+ '步</b>';
            }
        },
        series: [{
            name: 'Sales per employee',
            borderWidth: 1,
            data: data['step'],
            dataLabels: {
                enabled: true,
                color: '#000000'
            }
        }]
    });
    });
});
