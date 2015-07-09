{{-- Scripts (jQuery is loaded) --}}


{{-- Source --}}
<script type="text/javascript">
    // Resource chart options.
    var resourceChart = {
        object: {},
        data: [],
        options: {
            backgroundColor: '#F0F0F0',
            fontName: 'Verdana',
            chartArea: {width: '100%', height: '100%'},
            isStacked: false,
            legend: {position: 'none'},
            hAxis: {
                textPosition: 'none',
                format: ['HH:mm:ss']
            },
            animation: {
                duration: 500,
                easing: 'inAndOut'
            },
            vAxis: {
                textPosition: 'in',
                minValue: 0,
                maxValue: 100
            }
        },
        maxRows: 12
    };

    // Player chart options.
    var playerChart = {
        object: {},
        data: [],
        options: {
            backgroundColor: '#F0F0F0',
            fontName: 'Verdana',
            chartArea: {width: '100%', height: '100%'},
            legend: {position: 'none'},
            hAxis: {textPosition: 'none'},
            animation: {
                duration: 500,
                easing: 'inAndOut'
            },
            vAxis: {
                textPosition: 'in',
                minValue: 0,
                maxValue: 20
            }
        },
        maxRows: 12
    };

    // The refresh rate of the charts in miliseconds.
    var chartRefreshRate = 5000;
    // The refresh interval;
    var interval;

    // Load the Visualization API and the piechart package.
    google.load('visualization', '1.0', {'packages': ['corechart']});
    google.setOnLoadCallback(initCharts);

    function initCharts() {
        // Initialize the charts.
        resourceChart.object = new google.visualization.AreaChart(document.getElementById('chart-resources'));
        playerChart.object = new google.visualization.AreaChart(document.getElementById('chart-players'));

        // Initialize the chart data.
        resourceChart.data = new google.visualization.DataTable();
        resourceChart.data.addColumn('string', "Time");
        resourceChart.data.addColumn('number', "CPU usage");
        resourceChart.data.addColumn('number', "RAM usage");

        // Create zero data
        for (var r = 0; r < resourceChart.maxRows; r++) {
            resourceChart.data.addRow(['00:00:00', 0, 0]);
        }

        playerChart.data = new google.visualization.DataTable();
        playerChart.data.addColumn('string', "Time");
        playerChart.data.addColumn('number', "Concurrent players");

        // Create zero data
        for (var p = 0; p < playerChart.maxRows; p++) {
            playerChart.data.addRow(['00:00:00', 0]);
        }

        // Finally, start the refresh interval.
        interval = setInterval(updateCharts, chartRefreshRate);
        updateCharts();
    }

    function updateCharts() {
        $.getJSON("/dashboard/players", function (data) {
            playerChart.data.addRow(data);
            if (playerChart.data.getNumberOfRows() > playerChart.maxRows) playerChart.data.removeRow(0);
            playerChart.object.draw(playerChart.data, playerChart.options);
        });

        $.getJSON("/dashboard/resource", function (data) {
//            data[2] = Math.round(data[2] / 1024 / 1024); // Format memory to MBs.
            resourceChart.data.addRow(data);
            if (resourceChart.data.getNumberOfRows() > resourceChart.maxRows) resourceChart.data.removeRow(0);
            resourceChart.object.draw(resourceChart.data, resourceChart.options);
        });
    }
</script>

{{-- HTML loaded --}}
<script type="text/javascript">
    $(document).ready(function () {

    });
</script>