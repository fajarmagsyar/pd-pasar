@extends('admin.layout')
@section('content')
    @php
        use App\Models\produk;
    @endphp
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
                                        <div class="table-responsive  mt-1">
                                            <table class="table select-table">
                                                <thead>
                                                    <tr>
                                                        <th>
                                                            <strong>#</strong>
                                                        </th>
                                                        <th>Nama Produk</th>
                                                        <th>Merk</th>
                                                        <th>Satuan</th>
                                                        <th>Keterangan</th>
                                                        <th class="text-center" style="font-size: 18px"><i
                                                                class="mdi mdi-tune"></i>
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($rows as $no => $w)
                                                        <tr>
                                                            <td>
                                                                <div class="form-check form-check-flat mt-0">
                                                                    {{ $no = $no + 1 }}
                                                                </div>
                                                            </td>
                                                            <td>
                                                                {{ $w->nama_produk }}
                                                            </td>
                                                            <td>
                                                                {{ $w->merk }}
                                                            </td>
                                                            <td>
                                                                {{ $w->satuan }}
                                                            </td>
                                                            <td>
                                                                {{ $w->keterangan }}
                                                            </td>
                                                            <td class="text-center">
                                                                <a class="btn btn-warning"
                                                                    href="/admn-pg/produk/{{ $w->produk_id }}/edit">Edit</a>

                                                                <a class="btn btn-danger"
                                                                    href="/admn-pg/produk/{{ $w->produk_id }}/hapus"
                                                                    onclick="return confirm('Anda yakin?')">Hapus</a>
                                                                <br>
                                                                <a class="btn btn-info"
                                                                    href="/admn-pg/produk/{{ $w->produk_id }}/tambah-harga">
                                                                    Harga Harian</a>
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
    @endsection
