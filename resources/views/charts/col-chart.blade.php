<script>
    var countPeraturan = @json($countPer);
    google.charts.load("current", { packages: ['corechart'] });
    google.charts.setOnLoadCallback(drawChart);
    function drawChart() {
        var chartData = [
            ["Element", "Density", { role: "style" }]
        ];

        for (var i = 0; i < countPeraturan.length; i++) {
            var item = countPeraturan[i];
            console.log(item.countPeraturan);
            chartData.push([item.jenis_peraturan, item.countPeraturan, "#055CA5"]);
        }

        var data = google.visualization.arrayToDataTable(chartData);

        var view = new google.visualization.DataView(data);
        view.setColumns([0, 1,
            {
                calc: "stringify",
                sourceColumn: 1,
                type: "string",
                role: "annotation"
            },
            2
        ]);

        var options = {
            chartArea: { width: '94%', height: '80%' },
            width: 650,
            height: 400,
            bar: { groupWidth: "50%" },
            legend: { position: "none" },
            vAxis: {
                viewWindow: {
                    min: 0, // Adjust this value as needed
                }
            }
        };

        var chart = new google.visualization.ColumnChart(document.getElementById("peraturan-chart"));
        chart.draw(view, options);
    }

</script>
