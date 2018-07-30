@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <nav aria-label="breadcrumb primary">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active" aria-current="page"><a href="{{ url('/home') }}">Dashboard</a> </li>
                    <li class="breadcrumb-item active" aria-current="page"><a href="{{ url('/admin/books') }}">Buku</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Ubah Buku</li>
                </ol>
            </nav>
            <div class="card">
                <div class="card-header">Tambah Data Penulis</div>
                <br>
               <div class="card-body">
                    {!! Form::model($book, ['url' => route('books.update', $book->id),'method' => 'put', 'files'=>'true', 'class'=>'form-horizontal']) !!}
                    @include('book._form')
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection