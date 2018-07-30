@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <nav aria-label="breadcrumb primary">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active" aria-current="page"><a href="{{ url('/home') }}">Home</a> </li>
                    <li class="breadcrumb-item active" aria-current="page">Daftar Buku</li>
                </ol>
            </nav>
            <div class="card">
                <div class="card-header">Daftar Buku</div>
                <br>
                <div class="card-body">
                   {!! $html->table(['class'=>'table table-striped']) !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')
{!! $html->scripts() !!}
@endsection