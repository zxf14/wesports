$(function () {
	Highcharts.setOptions({
		timezoneOffset: -8,
		credits: {
			enabled: false
		},
		legend: {
			enabled: false
		},
		lang: {
			contextButtonTitle: "图表导出菜单",
			decimalPoint: ".",
			downloadJPEG: "下载JPEG图片",
			downloadPDF: "下载PDF文件",
			downloadPNG: "下载PNG文件",
			downloadSVG: "下载SVG文件",
			drillUpText: "返回 {series.name}",
			loading: "加载中",
			months: ["一月", "二月", "三月", "四月", "五月", "六月", "七月", "八月", "九月", "十月", "十一月", "十二月"],
			noData: "没有数据",
			numericSymbols: ["千", "兆", "G", "T", "P", "E"],
			printChart: "打印图表",
			resetZoom: "恢复缩放",
			resetZoomTitle: "恢复图表",
			shortMonths: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
			thousandsSep: ",",
			weekdays: ["星期一", "星期二", "星期三", "星期三", "星期四", "星期五", "星期六", "星期天"],
		},
	});
	
// $('.container').text(url);
	page=location.href.slice(-1);
    $.getJSON('/health/json_data/'+page, function (data) {
        Highcharts.chart('speed-linechart', {
            title: {
                text:''
            },
            
            xAxis: {
                categories:data[0]
            },
            tooltip: {
                dateTimeLabelFormats: {
                    millisecond: '%H:%M:%S.%L',
                    second: '%H:%M:%S',
                    minute: '%H:%M',
                    hour: '%H:%M',
                    day: '%Y-%m-%d',
                    week: '%m-%d',
                    month: '%Y-%m',
                    year: '%Y'
                },
                valueSuffix: 'km/h'
            },
            yAxis: {
                title: {
                    text: '时速（km/h)'
                }
            },
            legend: {
                enabled: false
            },
            plotOptions: {
                area: {
                    fillColor: {
                        linearGradient: {
                            x1: 0,
                            y1: 0,
                            x2: 0,
                            y2: 1
                        },
                        stops: [
                            [0, Highcharts.getOptions().colors[0]],
                            [1, Highcharts.Color(Highcharts.getOptions().colors[0]).setOpacity(0).get('rgba')]
                        ]
                    },
                    marker: {
                        radius: 2
                    },
                    lineWidth: 1,
                    states: {
                        hover: {
                            lineWidth: 1
                        }
                    },
                    threshold: null
                }
            },

            series: [{
                type: 'area',
                name: '时速',
                data: data[1]
            }]
        });
    });
});