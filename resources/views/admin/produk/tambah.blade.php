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
                                                            <input type="text" name="nama_produk" class="form-control"
                                                                id="nama_produk">
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="nama_produk" class="form-label">
                                                                Merk
                                                            </label>
                                                            <input type="text" name="merk" class="form-control">
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="satuan" class="form-label">
                                                                Satuan
                                                            </label>
                                                            <input type="text" name="satuan" class="form-control"
                                                                id="satuan">
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="telp" class="form-label">
                                                                Keterangan
                                                            </label>
                                                            <input type="text" name="keterangan" class="form-control"
                                                                id="keterangan">
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-12">
                                                        <label for="telp" class="form-label">
                                                            Harga
                                                        </label>
                                                        <div class="input-group mb-3">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text" id="basic-addon1">Rp.</span>
                                                            </div>
                                                            <input type="number" class="form-control"
                                                                placeholder="Contoh: 20000" name="harga"
                                                                aria-label="Username" aria-describedby="basic-addon1">
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-12">
                                                        <label for="telp" class="form-label">
                                                            Produk Untuk:
                                                        </label>
                                                        <div class="mb-3">
                                                            @foreach ($pasar as $r)
                                                                <span
                                                                    class="badge bg-secondary rounded-pill text-white p-3">
                                                                    <input type="checkbox" value="{{ $r->pasar_id }}"
                                                                        checked name="pasar[]">
                                                                    {{ $r->nama_pasar }}</span>
                                                            @endforeach
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
