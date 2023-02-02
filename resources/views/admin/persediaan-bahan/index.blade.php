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
                                    <th>Tanggal Pembelian</th>
                                    <th>Nama Bahan</th>
                                    <th>Stok</th>
                                    <th>Satuan</th>
                                    <th>Harga Beli</th>
                                    <th>Lead Time</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>2023-02-02</td>
                                    <td>SLETING</td>
                                    <td>40</td>
                                    <td>Pcs</td>
                                    <td>Rp. 40.000</td>
                                    <td>2 Hari</td>
                                    <td class="d-flex gap-2">
                                        <button class="btn btn-info">
                                            <i class="mdi mdi-grease-pencil"></i>
                                        </button>
                                        <button class="btn btn-danger">
                                            <i class="mdi mdi-delete-empty text-white"></i>
                                        </button>
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