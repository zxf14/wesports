$(function () {
    $.getJSON('json_run', function (data) {
    $('#barcharts').highcharts({
        credits: {
            enabled: false
        },
        chart: {
            type: 'column'
        },
        title: {
            text: '每月跑步距离统计'
        },
        xAxis: {
            categories: [
                '一月',
                '二月',
                '三月',
                '四月',
                '五月',
                '六月',
                '七月',
                '八月',
                '九月',
                '十月',
                '十一月',
                '十二月'
            ],
            crosshair: true
        },
        yAxis: {
            min: 0,
            title: {
                text: '总跑步路程 (km)'
            }
        },
        tooltip: {
            headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
            pointFormat: '<tr><td style="color:{series.color};padding:0"> </td>' +
            '<td style="padding:0"><b>跑步{point.y:.1f} km</b></td></tr>',
            footerFormat: '</table>',
            shared: true,
            useHTML: true
        },
        legend: {
                enabled: false
            },
        plotOptions: {
            column: {
                pointPadding: 0.2,
                borderWidth: 0
            }
        },
        series: [{
            name: '路程',
            data: data
        }]
    });
    });
});
