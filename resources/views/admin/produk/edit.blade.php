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
                                                    Ubah data produk yang sudah ada
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
                                            <form action="/admn-pg/produk/{{ $w->produk_id }}/edit" method="post">
                                                @csrf
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="nama_produk" class="form-label">
                                                                Nama Produk
                                                            </label>
                                                            <input type="text" name="nama_produk" class="form-control"
                                                                id="nama_produk" required value="{{ $w->nama_produk }}">
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="nama_produk" class="form-label">
                                                                Merek
                                                            </label>
                                                            <input type="text" name="merk" class="form-control"
                                                                required value="{{ $w->merk }}">
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="satuan" class="form-label">
                                                                Satuan
                                                            </label>
                                                            <input type="text" name="satuan" class="form-control"
                                                                required value="{{ $w->satuan }}" id="satuan">
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="keterangan" class="form-label">
                                                                Keterangan
                                                            </label>
                                                            <input type="keterangan" value="{{ $w->keterangan }}"
                                                                name="keterangan" class="form-control" id="email">
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
