@extends('layouts.index')
@section('content')
    <div>
        <div class="page-breadcrumb">
            <div class="row">
                <div class="col-12 mb-3 d-flex no-block align-items-center">
                    <h3 class="page-title">Data Persediaan Bahan</h3>
                </div>
                <hr class="ms-2">
                <div class="d-flex gap-3 mb-4">
                    <a href="/buffer-stock" class="btn btn-success w-fit text-white">
                        <i class="mdi mdi-keyboard-backspace"></i>
                        <span>Kembali</span>
                    </a>
                    <a href="/buffer-stock" class="btn btn-success w-fit text-white">
                        <i class="mdi mdi-printer"></i>
                        <span>Cetak</span>
                    </a>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="zero_config" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th class="col-3">Kode Bahan</th>
                                    <th class="col-2">Nama Bahan</th>
                                    <th class="">Stok</th>
                                    <th class="">Total Pemakaian</th>
                                    <th class="">Rata-Rata Pemakaian</th>
                                    <th class="">Lead Time</th>
                                    <th class="">Z</th>
                                    <th class="col-3">Buffer Stock (Bulan Desember)</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>satl</td>
                                    <td>12</td>
                                    <td>5</td>
                                    <td>5</td>
                                    <td>5</td>
                                    <td>5</td>
                                    <td>5</td>
                                    <td>5</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
@endsection