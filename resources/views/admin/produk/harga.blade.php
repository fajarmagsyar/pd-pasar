@extends('admin.layout')
@section('content')
    <!-- partial -->
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-sm-12">
                    <div class="home-tab">
                        <div class="row flex-grow">
                            <div class="col-8 grid-margin stretch-card">
                                <div class="card card-rounded">
                                    <div class="card-body">
                                        <div class="d-sm-flex justify-content-between align-items-start">
                                            <div>
                                                <h4 class="card-title card-title-dash">Harga Harian {{ ucwords($active) }}
                                                </h4>
                                                <p class="card-subtitle card-subtitle-dash">
                                                    Ubah data harga harian untuk <strong>{{ $produk->nama_produk }}</strong>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="table-responsive">
                                            <table class="table table-striped table-bordered">
                                                <tr>
                                                    <th>Nama Produk</th>
                                                    <td>{{ $produk->nama_produk }}</td>

                                                    <th>Satuan</th>
                                                    <th>{{ $produk->satuan }}</th>
                                                </tr>
                                                <tr>
                                                    <th>Merk</th>
                                                    <td>{{ $produk->merk }}</td>
                                                    <th>Keterangan</th>
                                                    <td>{{ $produk->keterangan }}</th>

                                                </tr>
                                                <tr>
                                                    <th>Harga Kemarin</th>
                                                    <td>{{ $harga['kemarin'] }}</td>

                                                    <th>Harga Sekarang</th>
                                                    <td>{{ $harga['sekarang'] }}</td>
                                                </tr>
                                            </table>
                                        </div>

                                        <button type="submit" class="btn btn-info btn-lg w-100 mt-3 mb-2">Ubah Data
                                            Produk</button>
                                    </div>
                                </div>
                            </div>

                            <div class="col-4 grid-margin stretch-card">
                                <div class="card card-rounded">
                                    <div class="card-body">
                                        <div class="d-sm-flex justify-content-between align-items-start">
                                            <div>
                                                <h4 class="card-title card-title-dash">Harga Harian {{ ucwords($active) }}
                                                </h4>
                                                <p class="card-subtitle card-subtitle-dash">
                                                    Ubah data harga harian untuk
                                                    <strong>{{ $produk->nama_produk }}</strong>
                                                </p>
                                            </div>
                                        </div>

                                        <div>
                                            <form action="/admn-pg/produk/{{ $produk->produk_id }}/tambah-harga"
                                                method="post">
                                                @csrf
                                                <div class="mb-3">
                                                    <label for="" class="mb-2">Harga hari ini</label>
                                                    <div class="input-group mb-3">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text" id="basic-addon1">Rp.</span>
                                                        </div>
                                                        <input type="number" class="form-control"
                                                            placeholder="Contoh: 20000" name="harga" aria-label="Username"
                                                            aria-describedby="basic-addon1" required>
                                                    </div>
                                                </div>
                                                Update Untuk
                                                <p class="card-subtitle card-subtitle-dash">
                                                    Centang untuk mengupgrade data di pasar tersebut
                                                </p>
                                                @foreach ($pasar as $r)
                                                    <span class="badge bg-secondary rounded-pill text-white p-2 mb-2 mr-3">
                                                        <input type="checkbox" value="{{ $r->pasar_id }}" checked
                                                            name="pasar[]">
                                                        {{ $r->nama_pasar }}</span>
                                                @endforeach

                                                <button href="/admn-pg/produk/{{ $produk->produk_id }}"
                                                    class="btn btn-primary text-white btn-lg w-100 mt-3 mb-2">
                                                    Perbarui Harga Harian
                                                </button>
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
