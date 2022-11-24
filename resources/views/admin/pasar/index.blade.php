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
                                                    href="/admn-pg/pasar/tambah"><i class="mdi mdi-account-plus"></i>Tambah
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
                                                        <th>Nama Pasar</th>
                                                        <th>Alamat</th>
                                                        <th class="text-center" style="font-size: 18px"><i
                                                                class="mdi mdi-tune"></i>
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($rows as $no => $r)
                                                        <tr>
                                                            <td>
                                                                <div class="form-check form-check-flat mt-0">
                                                                    {{ $no = $no + 1 }}
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="d-flex ">
                                                                    <a href="/{{ $r->foto_pasar }}" target="_blank"><img
                                                                            src="/{{ $r->foto_pasar }}" alt=""></a>
                                                                    <div>
                                                                        <h6><strong>{{ $r->nama_pasar }}</strong></h6>
                                                                        <p><strong>Telp</strong>: {{ $r->telp }}</p>
                                                                        <p><strong>Email</strong>: {{ $r->email }}</p>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                {{ $r->alamat_pasar }}
                                                            </td>
                                                            <td class="text-center">
                                                                <a class="btn btn-warning"
                                                                    href="/admn-pg/pasar/{{ $r->pasar_id }}/edit">Edit</a>

                                                                <a class="btn btn-danger"
                                                                    href="/admn-pg/pasar/{{ $r->pasar_id }}/hapus"
                                                                    onclick="return confirm('Anda yakin?')">Hapus</a>
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
