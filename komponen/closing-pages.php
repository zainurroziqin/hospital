
    <script src="assets/js/vendor-all.min.js"></script>
    <script src="assets/js/plugins/bootstrap.min.js"></script>
    <script src="assets/js/ripple.js"></script>
    <script src="assets/js/pcoded.min.js"></script>
    <script src="assets/js/menu-setting.min.js"></script>

    <script src="assets/js/plugins/jquery.dataTables.min.js"></script>
    <script src="assets/js/plugins/dataTables.bootstrap4.min.js"></script>
    <script src="assets/js/pages/data-basic-custom.js"></script>
    <!-- Apex Chart -->
    <script src="assets/js/plugins/apexcharts.min.js"></script>
    <script src="assets/js/pages/todo.js"></script>
    <script src="assets/alert/sweetalert2.all.min.js" ></script>
<script>
    // report model start
    $('#modal-report').on('show.bs.modal', function(event) {
        var button = $(event.relatedTarget)
        var recipient = button.data('title')
        var modal = $(this)
        modal.find('.modal-title').text('Report of ' + recipient + ' on current month')
    })
    // report model end
    // DataTable start
    $('#report-table').DataTable();
    // DataTable end
    // [ operation-processed ] start
    $(function() {
        var options = {
            chart: {
                type: 'area',
                height: 50,
                sparkline: {
                    enabled: true
                }
            },
            dataLabels: {
                enabled: false
            },
            colors: ["#4680ff"],
            fill: {
                type: 'solid',
                opacity: 0.3,
            },
            markers: {
                size: 3,
                opacity: 0.9,
                colors: "#fff",
                strokeColor: "#4680ff",
                strokeWidth: 2,
                hover: {
                    size: 7,
                }
            },
            stroke: {
                curve: 'straight',
                width: 3,
            },
            series: [{
                name: 'series1',
                data: [25, 66, 41, 89, 63, 25, 44, 12, 36, 9, 54, 25, 66, 41, 89, 63, 54, 25, 66, 41, 89]
            }],
            tooltip: {
                fixed: {
                    enabled: false
                },
                x: {
                    show: false
                },
                y: {
                    title: {
                        formatter: function(seriesName) {
                            return 'Operation '
                        }
                    }
                },
                marker: {
                    show: false
                }
            }
        };
        var chart = new ApexCharts(document.querySelector("#operation-chart"), options);
        chart.render();
    });
    // [ operation-processed ] end
    // [ death-processed ] start
    $(function() {
        var options = {
            chart: {
                type: 'area',
                height: 50,
                sparkline: {
                    enabled: true
                }
            },
            dataLabels: {
                enabled: false
            },
            colors: ["#9ccc65"],
            fill: {
                type: 'solid',
                opacity: 0.3,
            },
            markers: {
                size: 3,
                opacity: 0.9,
                colors: "#fff",
                strokeColor: "#9ccc65",
                strokeWidth: 2,
                hover: {
                    size: 7,
                }
            },
            stroke: {
                curve: 'straight',
                width: 3,
            },
            series: [{
                name: 'series1',
                data: [9, 54, 25, 66, 41, 89, 63, 54, 25, 66, 41, 89, 63, 25, 44, 12, 36, 25, 66, 41, 89]
            }],
            tooltip: {
                fixed: {
                    enabled: false
                },
                x: {
                    show: false
                },
                y: {
                    title: {
                        formatter: function(seriesName) {
                            return 'Death '
                        }
                    }
                },
                marker: {
                    show: false
                }
            }
        };
        var chart = new ApexCharts(document.querySelector("#death-chart"), options);
        chart.render();
    });
    // [ death-processed ] end
    // [ Birth-processed ] start
    $(function() {
        var options = {
            chart: {
                type: 'area',
                height: 50,
                sparkline: {
                    enabled: true
                }
            },
            dataLabels: {
                enabled: false
            },
            colors: ["#ff5252"],
            fill: {
                type: 'solid',
                opacity: 0.3,
            },
            markers: {
                size: 3,
                opacity: 0.9,
                colors: "#fff",
                strokeColor: "#ff5252",
                strokeWidth: 2,
                hover: {
                    size: 7,
                }
            },
            stroke: {
                curve: 'straight',
                width: 3,
            },
            series: [{
                name: 'series1',
                data: [25, 66, 41, 89, 63, 25, 44, 12, 36, 9, 54, 25, 66, 41, 89, 63, 54, 25, 66, 41, 89]
            }],
            tooltip: {
                fixed: {
                    enabled: false
                },
                x: {
                    show: false
                },
                y: {
                    title: {
                        formatter: function(seriesName) {
                            return 'Birth '
                        }
                    }
                },
                marker: {
                    show: false
                }
            }
        };
        var chart = new ApexCharts(document.querySelector("#birth-chart"), options);
        chart.render();
    });
    // [ Birth-processed ] end
</script>


</body>


<!-- Mirrored from ableproadmin.com/bootstrap/default/hospital-dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 18 Nov 2021 19:00:16 GMT -->
</html>
