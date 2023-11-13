<script>
    var countView = @json($countView);

    google.charts.load('current', {'packages':['corechart']});
    google.charts.setOnLoadCallback(drawChart);
    function drawChart() {
        var chartData = [
            ['Category', 'Value']
        ];
        for (var i = 0; i < countView.length; i++) {
            var item = countView[i];
            chartData.push([item.time, parseFloat(item.totalViews)]);
        }
        var data = google.visualization.arrayToDataTable(chartData);
        
        var options = {
            pieHole: 0.5,
            pieSliceTextStyle: {
                color: 'white',
            },
            legend: 'none', 
            backgroundColor: 'transparent', 
            pieStartAngle: 180,
            colors:['#33a852', '#ea4334', '#1e499a' ], 
        
        };
        
        var chart = new google.visualization.PieChart(document.getElementById('pengunjung-chart'));
        chart.draw(data, options);
    }
</script>