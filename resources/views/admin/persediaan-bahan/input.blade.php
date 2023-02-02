@extends('layouts.index')
@section('content')
    <div class="h-screen">
        <div class="page-breadcrumb">
            <div class="row">
                <div class="col-12 mb-3 d-flex no-block align-items-center">
                    <h3 class="page-title">Data Persediaan Bahan</h3>
                </div>
                <hr class="ms-2">
            </div>
        </div>

        <div class="container p-3">
            <form action="">
                <div class="mb-3 col-6">
                    <label for="exampleFormControlInput1" class="form-label">Tanggal Pembelian</label>
                    <input type="date" class="form-control" id="exampleFormControlInput1">
                </div>
                <div class="mb-3 col-6">
                    <label for="pilih-bahan" class="form-label">Pilih Bahan</label>
                    <select class="form-select" id="pilih-bahan" aria-label="Default select example">
                        <option selected>Pilih Bahan</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
                <div class="mb-3 col-6">
                    <label for="exampleFormControlInput1" class="form-label">Jumlah Stock</label>
                    <input type="number" class="form-control" id="exampleFormControlInput1">
                </div>
                <div class="mb-3 col-6">
                    <label for="pilih-bahan" class="form-label">Pilih Bahan</label>
                    <select class="form-select" id="pilih-bahan" aria-label="Default select example">
                        <option selected>Pilih Satuan</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
                <div class="mb-3 col-6">
                    <label for="exampleFormControlInput1" class="form-label">Harga Beli</label>
                    <input type="number" class="form-control" id="exampleFormControlInput1">
                </div>
                <input type="submit" class="btn btn-dark" value="Tambahkan">
            </form>
        </div>
        
    </div>
@endsection