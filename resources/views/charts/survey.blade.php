<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script>
var surveyUI = @json($survey_ui);
var searchUX = @json($search_ux);
var klngkpn_doc = @json($klngkpn_doc);
var valid_doc = @json($valid_doc);


google.charts.load("current", {packages:['corechart']});

// ===========================================================
// ====================CHARTS: SURVEY UI======================
// ===========================================================
google.charts.setOnLoadCallback(drawSurveyUI);
function drawSurveyUI() {
    var chartData = [
        ["Element", "Density", { role: "style" } ]
    ]

    for (var i = 0; i < surveyUI.length; i++) {
        const item = surveyUI[i];
        chartData.push([item.rate, item.count, "#122fb0"]);
    }

    var data = google.visualization.arrayToDataTable(chartData);

    var view = new google.visualization.DataView(data);
    view.setColumns([0, 1,
    { calc: "stringify",
        sourceColumn: 1,
        type: "string",
        role: "annotation" },
    2]);

    var options = {
        width: '150%',
        height: 400,
        bar: {groupWidth: "70%"},
        legend: { position: "none" },
        backgroundColor: 'transparent', 
    };
    var survey_ui = new google.visualization.ColumnChart(document.getElementById("survey_ui"));
    survey_ui.draw(view, options);
}

// ===========================================================
// ====================CHARTS: SEARCH UX======================
// ===========================================================
google.charts.setOnLoadCallback(drawSearchUX);
function drawSearchUX() {
    var chartData = [
        ["Element", "Density", { role: "style" } ]
    ]

    for (var i = 0; i < searchUX.length; i++) {
        const item = searchUX[i];
        chartData.push([item.rate, item.count, "#122fb0"]);
    }

    console.log(chartData)
    var data = google.visualization.arrayToDataTable(chartData);

    var view = new google.visualization.DataView(data);
    view.setColumns([0, 1,
    { calc: "stringify",
        sourceColumn: 1,
        type: "string",
        role: "annotation" },
    2]);

    var options = {
        width: '150%',
        height: 400,
        bar: {groupWidth: "70%"},
        legend: { position: "none" },
        backgroundColor: 'transparent', 
    };
    var charts = new google.visualization.ColumnChart(document.getElementById("search_ux"));
    charts.draw(view, options);
}

// ===========================================================
// ===============CHARTS: KELENGKAPAN DOKUMEN=================
// ===========================================================
google.charts.setOnLoadCallback(drawKelengkapanDokumen);
function drawKelengkapanDokumen() {
    var chartData = [
        ["Element", "Density", { role: "style" } ]
    ]

    for (var i = 0; i < klngkpn_doc.length; i++) {
        const item = klngkpn_doc[i];
        chartData.push([item.rate, item.count, "#122fb0"]);
    }

    console.log(chartData)
    var data = google.visualization.arrayToDataTable(chartData);

    var view = new google.visualization.DataView(data);
    view.setColumns([0, 1,
    { calc: "stringify",
        sourceColumn: 1,
        type: "string",
        role: "annotation" },
    2]);

    var options = {
        width: '150%',
        height: 400,
        bar: {groupWidth: "70%"},
        legend: { position: "none" },
        backgroundColor: 'transparent', 
    };
    var charts = new google.visualization.ColumnChart(document.getElementById("kelengkapan_dokumen"));
    charts.draw(view, options);
}


// ===========================================================
// ===============CHARTS: VALIDADED DOKUMEN=================
// ===========================================================
google.charts.setOnLoadCallback(drawValidadedDockumen);
function drawValidadedDockumen() {
    var chartData = [
        ["Element", "Density", { role: "style" } ]
    ]

    for (var i = 0; i < valid_doc.length; i++) {
        const item = valid_doc[i];
        chartData.push([item.rate, item.count, "#122fb0"]);
    }

    console.log(chartData)
    var data = google.visualization.arrayToDataTable(chartData);

    var view = new google.visualization.DataView(data);
    view.setColumns([0, 1,
    { calc: "stringify",
        sourceColumn: 1,
        type: "string",
        role: "annotation" },
    2]);

    var options = {
        width: '150%',
        height: 400,
        bar: {groupWidth: "70%"},
        legend: { position: "none" },
        backgroundColor: 'transparent', 
    };
    var charts = new google.visualization.ColumnChart(document.getElementById("validaded_dokumen"));
    charts.draw(view, options);
}

$(window).resize(function() {
    drawSurveyUI();
    drawSearchUX();
    drawKelengkapanDokumen();
    drawValidadedDockumen();
})
</script>