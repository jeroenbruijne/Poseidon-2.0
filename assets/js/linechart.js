$(function () { 
    var myChart = Highcharts.chart('container', {
        chart: {
            type: 'line'
        },
        title: {
            text: 'Fruit Consumption'
        },
        xAxis: {
            categories: ['15', '17', '19', '21', '23', '25']
        },
        yAxis: {
            title: {
                text: 'Temperaturen (°C)'
            }
        },
        series: [{
            name: 'Binnen',
            data: [1, 0, 4]
        }]
    });
});