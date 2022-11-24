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
                                    <div class="btn-wrapper">
                                        <a href="#" class="btn btn-otline-dark align-items-center"><i
                                                class="icon-share"></i> Share</a>
                                        <a href="#" class="btn btn-otline-dark"><i class="icon-printer"></i>
                                            Print</a>
                                        <a href="#" class="btn btn-primary text-white me-0"><i
                                                class="icon-download"></i> Export</a>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-content tab-content-basic mb-4">
                                <div class="tab-pane fade show active" id="overview" role="tabpanel"
                                    aria-labelledby="overview">
                                    <div class="row flex-grow mt-4">

                                        <div class="col-lg-12 grid-margin stretch-card mx-auto">
                                            <div class="card card-rounded"
                                                style="
                                                background: #1E283D url('/{{ $row->foto_pasar }}')
                                                    repeat-y right top;">
                                                <div class="card-body">
                                                    <div class="col-sm-8">
                                                        <h3 class="text-white upgrade-info mb-0">
                                                            <strong>{{ $row->nama_pasar }}</strong>
                                                        </h3>
                                                        <p class="text-white" style="opacity: 0.7">
                                                            {{ $row->alamat_pasar }} <br>
                                                            {{ $row->email }} <br>
                                                            {{ $row->telp }} <br>
                                                        </p>
                                                        <a href="https://www.google.com/maps/search/{{ $row->nama_pasar }}"
                                                            class="btn btn-info" target="_blank"
                                                            style="border:none">Maps</a>
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
                                                                <th>Nama Bhn Pokok</th>
                                                                <th>Stn.</th>
                                                                <th>H. Kemarin</th>
                                                                <th>H. Saat ini</th>
                                                                <th>Perubahan (%)</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @foreach ($rows as $no => $r)
                                                                <tr>
                                                                    <td>
                                                                        <div class="form-check form-check-flat mt-0">
                                                                            <label class="form-check-label">
                                                                                <input type="checkbox"
                                                                                    class="form-check-input"
                                                                                    aria-checked="false"><i
                                                                                    class="input-helper"></i></label>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="d-flex ">
                                                                            <img src="images/faces/face1.jpg"
                                                                                alt="">
                                                                            <div>
                                                                                <h6>Brandon Washington</h6>
                                                                                <p>Head admin</p>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <h6>Company name 1</h6>
                                                                        <p>company type</p>
                                                                    </td>
                                                                    <td>
                                                                        <div>
                                                                            <div
                                                                                class="d-flex justify-content-between align-items-center mb-1 max-width-progress-wrap">
                                                                                <p class="text-success">79%
                                                                                </p>
                                                                                <p>85/162</p>
                                                                            </div>
                                                                            <div class="progress progress-md">
                                                                                <div class="progress-bar bg-success"
                                                                                    role="progressbar"
                                                                                    style="width: 85%"
                                                                                    aria-valuenow="25" aria-valuemin="0"
                                                                                    aria-valuemax="100">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="badge badge-opacity-warning">
                                                                            In progress</div>
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
    <script src="/assets/js/dashboard.js"></script>
    <script src="/assets/js/Chart.roundedBarCharts.js"></script>
    <!-- End custom js for this page-->
</body>

</html>
