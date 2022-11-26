<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>{{ $title }} </title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="/assets/vendors/feather/feather.css">
    <link rel="stylesheet" href="/assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="/assets/vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" href="/assets/vendors/typicons/typicons.css">
    <link rel="stylesheet" href="/assets/vendors/simple-line-icons/css/simple-line-icons.css">
    <link rel="stylesheet" href="/assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="/assets/vendors/datatables.net-bs4/dataTables.bootstrap4.css">
    <link rel="stylesheet" href="/assets/js/select.dataTables.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="/assets/css/vertical-layout-light/style.css">
    <!-- endinject -->
    <link rel="shortcut icon" href="/assets/images/favicon.png" />
</head>

<body>
    @php
        use App\Models\produk;
    @endphp
    <div class="container-scroller">
        <!-- partial -->
        <div class="main-panel mx-auto">
            <div class="content-wrapper shadow" style="border-radius: 30px">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="home-tab">
                            <div class="d-sm-flex align-items-center justify-content-between border-bottom pt-3">
                                <h4><img src="/assets/images/logo.png" style="max-height: 50px" alt="">
                                    <strong>PD PASAR</strong>
                                    <span style="opacity: 0.5">Kota Kupang</span>
                                </h4>
                                <div class="">
                                    {{-- <div class="btn-wrapper">
                                        <a href="#" class="btn btn-otline-dark align-items-center"><i
                                                class="icon-share"></i> Share</a>
                                        <a href="#" class="btn btn-otline-dark"><i class="icon-printer"></i>
                                            Print</a>
                                        <a href="#" class="btn btn-primary text-white me-0"><i
                                                class="icon-download"></i> Export</a>
                                    </div> --}}
                                </div>
                            </div>
                            <div class="tab-content tab-content-basic mb-4">
                                <div class="tab-pane fade show active" id="overview" role="tabpanel"
                                    aria-labelledby="overview">
                                    <div class="row flex-grow mt-4">

                                        <div class="card">
                                            <div class="card-body">


                                                <div class="chartjs-wrapper mt-5">
                                                    <canvas id="performaneLine"></canvas>
                                                </div>

                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>


                            <div class="card">
                                <div class="card-body">
                                    <div class="table-responsive  mt-1">
                                        <table class="table select-table">
                                            <thead>
                                                <tr>
                                                    <th><strong>#</strong></th>
                                                    <th>Tgl</th>
                                                    <th>Harga</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($rows as $no => $r)
                                                    <tr>
                                                        <td>
                                                            {{ $no = $no + 1 }}
                                                        </td>
                                                        <td>
                                                            <h6>{{ $r->created_at }}</h6>
                                                        </td>
                                                        <td>
                                                            <h6>Rp.{{ number_format($r->harga) }}</h6>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- partial -->
        </div>

        <footer class="footer mt-4 shadow">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
                <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Powered
                    by
                    <a href="https://www.bootstrapdash.com/" target="_blank">Diskominfo
                        Kota Kupang</a>, made with the deepest ❤</span>
                <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hak
                    Cipta
                    © {{ date('Y') }}.</span>
            </div>
        </footer>
        <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->

    <!-- plugins:js -->
    <script src="/assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="/assets/vendors/chart.js/Chart.min.js"></script>
    <script src="/assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
    <script src="/assets/vendors/progressbar.js/progressbar.min.js"></script>

    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="/assets/js/off-canvas.js"></script>
    <script src="/assets/js/hoverable-collapse.js"></script>
    <script src="/assets/js/template.js"></script>
    <script src="/assets/js/settings.js"></script>
    <script src="/assets/js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="/assets/js/jquery.cookie.js" type="text/javascript"></script>
    <script src="/assets/js/Chart.roundedBarCharts.js"></script>

    <script>
        (function($) {
            'use strict';
            $(function() {

                if ($("#performaneLine").length) {
                    var graphGradient = document.getElementById("performaneLine").getContext('2d');
                    var graphGradient2 = document.getElementById("performaneLine").getContext('2d');
                    var saleGradientBg = graphGradient.createLinearGradient(5, 0, 5, 100);
                    saleGradientBg.addColorStop(0, 'rgba(26, 115, 232, 0.18)');
                    saleGradientBg.addColorStop(1, 'rgba(26, 115, 232, 0.02)');
                    var saleGradientBg2 = graphGradient2.createLinearGradient(100, 0, 50, 150);
                    saleGradientBg2.addColorStop(0, 'rgba(0, 208, 255, 0.19)');
                    saleGradientBg2.addColorStop(1, 'rgba(0, 208, 255, 0.03)');
                    var salesTopData = {
                        labels: <?= json_encode($tgl) ?>,
                        datasets: [{
                            label: 'This week',
                            data: <?= json_encode($harga) ?>,
                            backgroundColor: saleGradientBg,
                            borderColor: [
                                '#1F3BB3',
                            ],
                            borderWidth: 1.5,
                            fill: true, // 3: no fill
                            pointBorderWidth: 1,
                            pointRadius: [4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4],
                            pointHoverRadius: [2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2],
                            pointBackgroundColor: ['#1F3BB3)', '#1F3BB3', '#1F3BB3', '#1F3BB3',
                                '#1F3BB3)', '#1F3BB3', '#1F3BB3', '#1F3BB3', '#1F3BB3)',
                                '#1F3BB3', '#1F3BB3', '#1F3BB3', '#1F3BB3)'
                            ],
                            pointBorderColor: ['#fff', '#fff', '#fff', '#fff', '#fff', '#fff',
                                '#fff', '#fff', '#fff', '#fff', '#fff', '#fff', '#fff',
                            ],
                        }]
                    };

                    var salesTopOptions = {
                        responsive: true,
                        maintainAspectRatio: false,
                        scales: {
                            yAxes: [{
                                gridLines: {
                                    display: true,
                                    drawBorder: false,
                                    color: "#F0F0F0",
                                    zeroLineColor: '#F0F0F0',
                                },
                                ticks: {
                                    beginAtZero: false,
                                    autoSkip: true,
                                    maxTicksLimit: 4,
                                    fontSize: 10,
                                    color: "#6B778C"
                                }
                            }],
                            xAxes: [{
                                gridLines: {
                                    display: false,
                                    drawBorder: false,
                                },
                                ticks: {
                                    beginAtZero: false,
                                    autoSkip: true,
                                    maxTicksLimit: 7,
                                    fontSize: 10,
                                    color: "#6B778C"
                                }
                            }],
                        },
                        legend: false,
                        legendCallback: function(chart) {
                            var text = [];
                            text.push('<div class="chartjs-legend"><ul>');
                            for (var i = 0; i < chart.data.datasets.length; i++) {
                                console.log(chart.data.datasets[i]); // see what's inside the obj.
                                text.push('<li>');
                                text.push('<span style="background-color:' + chart.data.datasets[i]
                                    .borderColor + '">' + '</span>');
                                text.push(chart.data.datasets[i].label);
                                text.push('</li>');
                            }
                            text.push('</ul></div>');
                            return text.join("");
                        },

                        elements: {
                            line: {
                                tension: 0.4,
                            }
                        },
                        tooltips: {
                            backgroundColor: 'rgba(31, 59, 179, 1)',
                        }
                    }
                    var salesTop = new Chart(graphGradient, {
                        type: 'line',
                        data: salesTopData,
                        options: salesTopOptions
                    });
                    document.getElementById('performance-line-legend').innerHTML = salesTop.generateLegend();
                }

            });
        })(jQuery);
    </script>
    <!-- End custom js for this page-->
</body>

</html>
