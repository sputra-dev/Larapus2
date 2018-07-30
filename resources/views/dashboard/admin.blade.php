@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <nav aria-label="breadcrumb primary">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item" aria-current="page">Home</li>
                </ol>
            </nav>
            <div class="card">
                <div class="card-header">Data Penulis</div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                Selamat datang di Menu Admin Perpustakaan Bandung. Silahkan pilih menu administrasi yang diinginkan.
            </div>
        </div>
    </div>
</div>
@endsection