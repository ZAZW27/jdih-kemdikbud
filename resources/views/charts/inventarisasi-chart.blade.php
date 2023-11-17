<script>
    var peraturanData = @json($per);
var combinedDataArray = [];

// Function to filter 'tahun_' fields for the four most recent years
function filterRecentYears(fields) {
    var currentYear = new Date().getFullYear();
    return fields.filter(field => {
        var year = parseInt(field.split('_')[1]);
        return year >= currentYear - 3 && year <= currentYear;
    });
}

// Map to store combined data for IDs greater than 15
var combinedDataMap = {};

// Loop through peraturanData and combine recent tahun fields
for (var i = 0; i < peraturanData.length; i++) {
    var item = peraturanData[i];

    // Extract all 'tahun_' fields dynamically and filter for the four most recent years
    var recentTahunFields = filterRecentYears(Object.keys(item));

    // Combine 'tahun_' fields into a single field
    var combinedTahun = recentTahunFields.reduce((total, field) => total + (+item[field] || 0), 0);

    // Check if ID is greater than 15
    if (item.jenis_id > 15) {
        // Combine data for IDs greater than 15 into 'peraturan lainnya'
        if (!combinedDataMap['peraturan lainnya']) {
            combinedDataMap['peraturan lainnya'] = {
                jenis_id: 15,
                jenis: 'peraturan lainnya',
                combinedTahun: 0
            };
        }
        combinedDataMap['peraturan lainnya'].combinedTahun += combinedTahun;
    } else {
        // Store the combined data for each record in the array
        combinedDataArray.push({
            jenis_id: item.jenis_id,
            jenis: item.jenis,
            combinedTahun: combinedTahun
        });
    }
}

// Add combined data for IDs greater than 15 to the array
combinedDataArray.push(...Object.values(combinedDataMap));

// Output the array of combined data
console.log(combinedDataArray);

    // GOOGLE CHARTSSSSSS
    // google.charts.load("current", { packages: ['corechart'] });
    // google.charts.setOnLoadCallback(drawChart);

    // function drawChart() {
    //     var chartData = [
    //         ["Element", "Density", { role: "style" }]
    //     ];

    //     for (var i = 0; i < combinedPeraturanData.length; i++) {
    //         var item = combinedPeraturanData[i];
    //         // console.log(item.combinedPeraturanData);
    //         chartData.push([item.jenis, item.combinedTahun, "#055CA5"]);
    //     }

    //     var data = google.visualization.arrayToDataTable(chartData);

    //     var view = new google.visualization.DataView(data);
    //     view.setColumns([0, 1,
    //         {
    //             calc: "stringify",
    //             sourceColumn: 1,
    //             type: "string",
    //             role: "annotation"
    //         },
    //         2
    //     ]);

    //     var options = {
    //         chartArea: { width: '94%', height: '80%' },
    //         width: 650,
    //         height: 400,
    //         bar: { groupWidth: "50%" },
    //         legend: { position: "none" },
    //         vAxis: {
    //             viewWindow: {
    //                 min: 0, // Adjust this value as needed
    //             }
    //         }
    //     };

    //     var chart = new google.visualization.ColumnChart(document.getElementById("inventarisasi-chart"));
    //     chart.draw(view, options);
    // }
</script>
