@extends('layouts.app')
@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <nav aria-label="breadcrumb primary">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active" aria-current="page"><a href="{{ url('/home') }}">Dashboard</a> </li>
                    <li class="breadcrumb-item active" aria-current="page"><a href="{{ url('/books/books') }}">Buku</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Ubah Buku</li>
                </ol>
            </nav>
      <div class="panel panel-default">
        <div class="panel-body">
          {!! Form::model($book, ['url' => route('books.update', $book->id),
          'method' => 'put', 'files'=>'true', 'class'=>'form-horizontal']) !!}
          @include('book._form')
          {!! Form::close() !!}
        </div>
      </div>
    </div>
  </div>
</div>
@endsection