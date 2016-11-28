$(function() {
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
	$('#speed-linechart').highcharts({

		title: {
			text: ' ',
			x: -20 //center
		},
		subtitle: {
			text: ' ',
			x: -20
		},
		xAxis: {
			categories: [' ', ' ', ' ', ' ', ' ', ' ',
				' ', ' ', ' ', ' ', ' ', ' '
			]
		},
		yAxis: {
			title: {
				text: '时速 (km/h)'
			},
			plotLines: [{
				value: 0,
				width: 1,
				color: '#808080'
			}]
		},
		tooltip: {
			valueSuffix: 'km/h'
		},
		legend: {
			layout: 'vertical',
			align: 'right',
			verticalAlign: 'middle',
			borderWidth: 0
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
				lineWidth: 1,
				threshold: null
			}
		},
		series: [{
			name: '时速',
			data: [3.9, 4.2, 5.7, 8.5, 7.9, 5.2, 7.0, 6.6, 4.2, 5.3, 6.6, 4.8]
		}]
	});
});