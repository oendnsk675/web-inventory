@extends('layouts.index')
@section('content')
    <div class="d-flex gap-3 p-4 h-100">
        
        <div class="card position-relative col-2">
            <div class="position-absolute bg bg-danger top-0 right-0 text-white p-2">
                1
            </div>
            <div class="card-body d-flex flex-column align-items-center">
                <i class="mdi mdi-cart icon-xl"></i>
                <h5>PEMESANAN</h5>
            </div>
        </div>
        
        <div class="card col-2 position-relative">
            <div class="position-absolute bg bg-danger top-0 right-0 text-white p-2">
                1
            </div>
            <div class="card-body d-flex flex-column align-items-center">
                <i class="mdi mdi-file-hidden icon-xl"></i>
                <h5>PEMESANAN</h5>
            </div>
        </div>
        
        <div class="card col-2 position-relative">
            <div class="position-absolute bg bg-danger top-0 right-0 text-white p-2">
                1
            </div>
            <div class="card-body d-flex flex-column align-items-center">
                <i class="mdi mdi-content-paste icon-xl"></i>
                <h5>BUFFER STOCK</h5>
            </div>
        </div>
        
        <div class="card col-2 position-relative">
            <div class="position-absolute bg bg-danger top-0 right-0 text-white p-2">
                1
            </div>
            <div class="card-body d-flex flex-column align-items-center">
                <i class="mdi mdi-account icon-xl"></i>
                <h5>USER</h5>
            </div>
        </div>

    </div>
@endsection