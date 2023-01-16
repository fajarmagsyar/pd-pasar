@extends('admin.layout')
@section('content')
    <!-- partial -->
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-sm-12">
                    <div class="home-tab">
                        <div class="row flex-grow">
                            <div class="col-12 grid-margin stretch-card">
                                <div class="card card-rounded">
                                    <div class="card-body">
                                        <div class="d-sm-flex justify-content-between align-items-start">
                                            <div>
                                                <h4 class="card-title card-title-dash">Data {{ ucwords($active) }}</h4>
                                                <p class="card-subtitle card-subtitle-dash">
                                                    Pilihan untuk melaporkan masalah terkait Pasar di Kota Kupang.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="container mt-3">
                                            <div class="row">
                                                <div class="col-lg-5 mx-auto mb-3">
                                                    <div class="card bg-success shadow">
                                                        <div class="card-body text-white">
                                                            <div class="row">
                                                                <div class="col-8">
                                                                    <h3><b>Laporkan Sampah</b></h3>
                                                                    <span style="opacity: 0.8; font-size: 13px">Ke DLHK Kota
                                                                        Kupang</span>
                                                                    <div class="mt-3">
                                                                        <a href="#" class="btn bg-white">Via
                                                                            Whatsapp</a>
                                                                    </div>
                                                                </div>
                                                                <div class="col-4">
                                                                    <span style="font-size: 80px"><i
                                                                            class="mdi mdi-delete-empty"></i></span>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-lg-5 mx-auto mb-3">
                                                    <div class="card bg-success shadow">
                                                        <div class="card-body text-white">
                                                            <div class="row">
                                                                <div class="col-8">
                                                                    <h3><b>Lapor KAPOLDA</b></h3>
                                                                    <span style="opacity: 0.8; font-size: 13px">Lakukan
                                                                        pelaporan kepada KAPOLDA NTT</span>
                                                                    <div class="mt-3">
                                                                        <a target="_blank"
                                                                            href="https://wa.me/6281337106840?text=Kami%20PD%20Pasar%20{{ auth()->user()->nama_pasar }}%20ingin%20melaporkan%20masalah%20pada%20pasar{{ auth()->user()->nama_pasar }}"
                                                                            class="btn bg-white">Via
                                                                            Whatsapp</a>
                                                                    </div>
                                                                </div>
                                                                <div class="col-4">
                                                                    <span style="font-size: 80px"><i
                                                                            class="mdi mdi-shield"></i></span>
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
            </div>
        </div>
    @endsection
