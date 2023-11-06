google.charts.load('current', {'packages':['corechart']});
        google.charts.setOnLoadCallback(drawChart);

    function drawChart() {

        var data = google.visualization.arrayToDataTable([
            ['Category', 'Value'],
            ['Minggu',     3904],
            ['Bulan',     52910],
            ['Tahun',     241401],
        ]);

        var options = {
            pieHole: 0.5,
            pieSliceTextStyle: {
                color: 'white',
            },
            legend: 'none', 
            backgroundColor: 'transparent', 
            pieStartAngle: 180,
            colors:['blue', 'red', 'green' ], 
        
        };

        var chart = new google.visualization.PieChart(document.getElementById('pengunjung-chart'));
        chart.draw(data, options);
    }