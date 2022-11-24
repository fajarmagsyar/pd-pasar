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
                                                    Ubah data pasar yang sudah ada
                                                </p>
                                            </div>
                                            <div>
                                                <a class="btn btn-primary btn-lg text-white mb-0 me-0"
                                                    href="/admn-pg/pasar/tambah"><i class="mdi mdi-account-plus"></i>Tambah
                                                    Data
                                                    {{ ucwords($active) }}</a>
                                            </div>
                                        </div>

                                        <div class="mt-4">
                                            <form action="/admn-pg/pasar/{{ $r->pasar_id }}/edit" method="post">
                                                @csrf
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="nama_pasar" class="form-label">
                                                                Nama Pasar
                                                            </label>
                                                            <input type="text" name="nama_pasar" class="form-control"
                                                                id="nama_pasar" required value="{{ $r->nama_pasar }}">
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="nama_pasar" class="form-label">
                                                                Alamat
                                                            </label>
                                                            <textarea required name="alamat_pasar" class="form-control" id="">{{ $r->alamat_pasar }}</textarea>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="telp" class="form-label">
                                                                No. Telp
                                                            </label>
                                                            <input type="number" name="telp" class="form-control"
                                                                required value="{{ $r->telp }}" id="telp">
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="telp" class="form-label">
                                                                Email
                                                            </label>
                                                            <input type="email" value="{{ $r->email }}" name="email"
                                                                class="form-control" id="email">
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="telp" class="form-label">
                                                                Password
                                                            </label>
                                                            <input type="password" name="password" class="form-control"
                                                                id="password">
                                                            <div class="text-muted">*Hanya isi jika ingin mengubah</div>
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
