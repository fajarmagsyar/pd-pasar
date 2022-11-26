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
                                </div>
                            </div>
                            <div class="tab-content tab-content-basic mb-4">
                                <div class="tab-pane fade show active" id="overview" role="tabpanel"
                                    aria-labelledby="overview">
                                    <div class="text-center">
                                        <h4 class="mb-1"><strong>Harga Terbaru</strong></h4>
                                        <span class="text-muted mb-4">Harga pasar yang terkini dan baru saja
                                            dirubah</span>
                                    </div>
                                    <div class="row shadow-sm mt-4"
                                        style="background-color: white; border-radius: 30px">
                                        <div class="col-sm-12 p-4">
                                            <div
                                                class="statistics-details d-flex align-items-center justify-content-between my-auto mx-auto">
                                                @foreach ($harga as $h)
                                                    <div class="mx-4">
                                                        <p class="statistics-title">{{ $h->nama_produk }}</p>
                                                        <span style="font-size: 12px" class="text-muted">H. Kemarin: Rp.
                                                            {{ produk::checkHargaKemarin($h->produk_id) }}</span>
                                                        <h3 class="rate-percentage">
                                                            Rp.{{ produk::checkHargaSekarang($h->produk_id) }}
                                                            <span class="text-muted"
                                                                style="font-size: 12px">/{{ $h->satuan }}</span>
                                                        </h3>
                                                        @php
                                                            $selisih = produk::checkHargaKemarin($h->pasar_id) === 0 ? 'Harga belum diupdate' : ((int) produk::checkHargaKemarin($h->produk_id) / (int) produk::checkHargaSekarang($h->produk_id) - 1) * 100 * -1;
                                                        @endphp

                                                        @if ($selisih > 0)
                                                            <p class="text-success d-flex"><i class="mdi mdi-menu-up">
                                                                @else
                                                                    <p class="text-danger d-flex"><i
                                                                            class="mdi mdi-menu-down">
                                                        @endif
                                                        </i><span>
                                                            <strong> {{ $selisih }}</strong> %
                                                        </span></p>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>


                                    <div class="text-center mt-4">
                                        <h4 class="mb-1"><strong>Pilih Pasar</strong></h4>
                                        <span class="text-muted mb-4">Pilih untuk melihat harga lebih detail di setiap
                                            pasar Kota Kupang</span>
                                    </div>

                                    <div class="row flex-grow mt-4">

                                        @foreach ($rows as $r)
                                            <div class="col-lg-6 grid-margin stretch-card mx-auto">
                                                <div class="card card-rounded"
                                                    style="
                                                background: #1E283D url('/{{ $r->foto_pasar }}')
                                                    repeat-y right top;">
                                                    <div class="card-body">
                                                        <div class="col-sm-8">
                                                            <h3 class="text-white upgrade-info mb-0">
                                                                {{ $r->nama_pasar }}
                                                            </h3>
                                                            <a href="/pasar/{{ $r->pasar_id }}"
                                                                class="btn btn-info upgrade-btn"><i
                                                                    class="mdi mdi-finance"></i> Lihat
                                                                Harga</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach

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
