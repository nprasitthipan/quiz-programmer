<!DOCTYPE html>
<html>

<head>
    <title>QUIZ 4</title>
    <script src="jquery.min.js"></script>
    <script src="Chart.min.js"></script>
   
    <style type="text/css">
        /* Chart.js */
        @-webkit-keyframes chartjs-render-animation {
            from {
                opacity: 0.99
            }

            to {
                opacity: 1
            }
        }

        @keyframes chartjs-render-animation {
            from {
                opacity: 0.99
            }

            to {
                opacity: 1
            }
        }

        .chartjs-render-monitor {
            -webkit-animation: chartjs-render-animation 0.001s;
            animation: chartjs-render-animation 0.001s;
        }
    </style>
</head>

<body>
    <table style="width: 100%">
        <tbody>
            <tr>
                <td style="width: 50%">
                    <div class="chartjs-size-monitor" style="position: absolute; left: 0px; top: 0px; right: 0px; bottom: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;">
                        <div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                            <div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0">
                        
                            </div>
                        </div>
                        <div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                            <div style="position:absolute;width:200%;height:200%;left:0; top:0">
                        
                            </div>
                        </div>
                    </div>
                    <canvas id="chart1" width="945" height="472" class="chartjs-render-monitor" style="display: block; height: 250px; width: 576px;"></canvas>
                </td>
                <td>
                    <div class="chartjs-size-monitor" style="position: absolute; left: 0px; top: 0px; right: 0px; bottom: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;">
                        <div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                            <div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0">
                        
                            </div>
                        </div>
                        <div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                            <div style="position:absolute;width:200%;height:200%;left:0; top:0">
                        
                            </div>
                        </div>
                    </div>
                    <canvas id="chart2" width="945" height="472" class="chartjs-render-monitor" style="display: block; height: 378px; width: 756px;"></canvas>
                </td>
            </tr>
        </tbody>
    </table>
    <script>
        var url = "https://www.trcloud.co/test/api.php";
        $.ajax({
            url: url,
            type: "post",
            dataType: "json",
            success: function(res) {

                var labels = [];
                var data = [];

                $.each(res, function(index, item) {
                    labels.push(item.City);
                    data.push(item.Population);
                });


                var ctx = document.getElementById("chart1").getContext('2d');
                var myChart = new Chart(ctx, {
                    type: 'bar',
                    data: {
                        labels: labels,
                        datasets: [{
                            label: 'Range by Country',
                            data: data,
                            backgroundColor: [
                                'rgba(255, 99, 132, 0.2)', //red
                                'rgba(54, 162, 235, 0.2)', //blue
                                'rgba(255, 206, 86, 0.2)', //yellow
                                'rgba(75, 192, 192, 0.2)', //green
                                'rgba(153, 102, 255, 0.2)', //purple
                                'rgba(255, 159, 64, 0.2)', //orange
                                'rgba(255, 99, 132, 0.2)', //red
                                'rgba(54, 162, 235, 0.2)', //blue
                                'rgba(255, 206, 86, 0.2)', //yellow
                                'rgba(75, 192, 192, 0.2)', //green
                                'rgba(153, 102, 255, 0.2)', //purple
                                'rgba(255, 159, 64, 0.2)'
                            ],
                            borderColor: [
                                'rgba(255,99,132,1)',
                                'rgba(54, 162, 235, 1)',
                                'rgba(255, 206, 86, 1)',
                                'rgba(75, 192, 192, 1)',
                                'rgba(153, 102, 255, 1)',
                                'rgba(255, 159, 64, 1)',
                                'rgba(255,99,132,1)',
                                'rgba(54, 162, 235, 1)',
                                'rgba(255, 206, 86, 1)',
                                'rgba(75, 192, 192, 1)',
                                'rgba(153, 102, 255, 1)',
                                'rgba(255, 159, 64, 1)'
                            ],
                            borderWidth: 1
                        }]
                    },
                    options: {
                        scales: {
                            yAxes: [{
                                ticks: {
                                    beginAtZero: true
                                }
                            }]
                        }
                    }
                });

                var ctx = document.getElementById("chart2").getContext('2d');
                var myChart = new Chart(ctx, {
                    type: 'pie',
                    data: {
                        labels: labels,
                        datasets: [{
                            label: 'Range by Country',
                            data: data,
                            backgroundColor: [
                                'rgba(255, 99, 132, 0.2)', //red
                                'rgba(54, 162, 235, 0.2)', //blue
                                'rgba(255, 206, 86, 0.2)', //yellow
                                'rgba(75, 192, 192, 0.2)', //green
                                'rgba(153, 102, 255, 0.2)', //purple
                                'rgba(255, 159, 64, 0.2)', //orange
                                'rgba(255, 99, 132, 0.2)', //red
                                'rgba(54, 162, 235, 0.2)', //blue
                                'rgba(255, 206, 86, 0.2)', //yellow
                                'rgba(75, 192, 192, 0.2)', //green
                                'rgba(153, 102, 255, 0.2)', //purple
                                'rgba(255, 159, 64, 0.2)'
                            ],
                            borderColor: [
                                'rgba(255,99,132,1)',
                                'rgba(54, 162, 235, 1)',
                                'rgba(255, 206, 86, 1)',
                                'rgba(75, 192, 192, 1)',
                                'rgba(153, 102, 255, 1)',
                                'rgba(255, 159, 64, 1)',
                                'rgba(255,99,132,1)',
                                'rgba(54, 162, 235, 1)',
                                'rgba(255, 206, 86, 1)',
                                'rgba(75, 192, 192, 1)',
                                'rgba(153, 102, 255, 1)',
                                'rgba(255, 159, 64, 1)'
                            ],
                            borderWidth: 1
                        }]
                    },
                    options: {
                        scales: {
                            yAxes: [{
                                ticks: {
                                    beginAtZero: true
                                }
                            }]
                        }
                    }
                });

            }
        });
    </script>
</body>

</html>