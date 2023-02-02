@extends('layouts.index')
@section('content')
    <div>
        <div class="page-breadcrumb">
            <div class="row">
                <div class="col-12 mb-3 d-flex no-block align-items-center">
                    <h3 class="page-title">Data Persediaan Bahan</h3>
                </div>
                <hr class="ms-2">
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
                                    <th class="col-3">Bulan</th>
                                    <th class="col-3">Tahun</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Januari</td>
                                    <td>2023</td>
                                    <td class="d-flex ga-2">
                                        <a href="/buffer-stock/detail" class="btn btn-success text-white">
                                            <i class="mdi mdi-eye"></i>
                                            <span>Lihat Perhitungan Buffer Stock</span>
                                        </a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
@endsection