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
                                                    Daftar pasar yang ada di Kota Kupang.
                                                </p>
                                            </div>
                                            <div>
                                                <a class="btn btn-primary btn-lg text-white mb-0 me-0"
                                                    href="/admn-pg/produk/tambah"><i class="mdi mdi-account-plus"></i>Tambah
                                                    Data
                                                    {{ ucwords($active) }}</a>
                                            </div>
                                        </div>

                                        <div class="mt-4">
                                            <form action="/admn-pg/produk/tambah" method="post">
                                                @csrf
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="nama_pruduk" class="form-label">
                                                                Nama Produk
                                                            </label>
                                                            <input type="text" name="nama_pasar" class="form-control"
                                                                id="nama_pasar">
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="nama_pasar" class="form-label">
                                                                Merek
                                                            </label>
                                                            <textarea name="merk" class="form-control" id="" cols="30" rows="5"></textarea>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="telp" class="form-label">
                                                               Satuan
                                                            </label>
                                                            <input type="number" name="satuan" class="form-control"
                                                                id="telp">
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="telp" class="form-label">
                                                                Keterangan
                                                            </label>
                                                            <input type="email" name=keterangan" class="form-control"
                                                                id="email">
                                                        </div>
                                                    </div>

                                                    
                                                </div>

                                                <div class="col-lg-12">
                                                    <div class="mb-3 float-end">
                                                        <button class="btn btn-primary text-white"
                                                            type="submit">Simpan</button>
                                                    </div>
                                                </div>
                                            </form>
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
