@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <nav aria-label="breadcrumb primary">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active" aria-current="page"><a href="{{ url('/home') }}">Home</a> </li>
                    <li class="breadcrumb-item active" aria-current="page"><a href="{{ route('members.index') }}">Member</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Tambah Member</li>
                </ol>
            </nav>
            <div class="card">
                <div class="card-header">Tambah Data Member</div>
                <br>
               <div class="card-body">
                    {!! Form::open(['url' => route('members.store'),'method' => 'post']) !!}
                    @csrf    
                    @include('member._form')
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection