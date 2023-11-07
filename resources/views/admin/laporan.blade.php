@extends('admin.layout')
@section('content')
    <!-- partial -->
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-sm-12">
                    <div class="home-tab">
                        <div class="tab-content tab-content-basic">
                            <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview">

                                <div class="row">
                                    <div class="col-lg-12 d-flex flex-column">

                                        <div class="row flex-grow">
                                            <div class="col-lg-12 grid-margin stretch-card">
                                                <div class="card card-rounded table-darkBGImg">
                                                    <div class="card-body">
                                                        <div class="col-sm-12">
                                                            <h3 class="text-white upgrade-info mb-0">
                                                                <span class="fw-bold">Laporan</span> <br>
                                                                Cetak laporan harga harian
                                                            </h3>
                                                            <a href="/admn-pg/produk"
                                                                class="btn btn-info upgrade-btn">Tambahkan
                                                                Harga Harian</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 grid-margin stretch-card">
                                                <div class="card card-rounded">
                                                    <div class="card-body">
                                                        <div class="col-sm-12">
                                                            <div class="text-center text-white">
                                                                <b>
                                                                    <h1>
                                                                        <i class="mdi mdi-clock"></i>
                                                                        <div id="DigitalCLOCK" class="clock"
                                                                            onload="showTime()">
                                                                        </div>
                                                                    </h1>
                                                                    {{ date('D, d-m-Y') }}
                                                                </b>
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
                    </div>
                </div>
            </div>
            <!-- content-wrapper ends -->
            <!-- partial:partials/_footer.html -->

            <script>
                function showTime() {
                    var date = new Date();
                    var h = date.getHours();
                    var m = date.getMinutes();
                    var s = date.getSeconds();
                    var session = "AM";

                    if (h == 0) {
                        h = 12;
                    }

                    if (h > 12) {
                        h = h - 12;
                        session = "PM";
                    }

                    h = (h < 10) ? "0" + h : h;
                    m = (m < 10) ? "0" + m : m;
                    s = (s < 10) ? "0" + s : s;

                    var time = h + ":" + m + ":" + s + " " + session;
                    document.getElementById("DigitalCLOCK").innerText = time;
                    document.getElementById("DigitalCLOCK").textContent = time;

                    setTimeout(showTime, 1000);
                }
                showTime();
            </script>
        @endsection
