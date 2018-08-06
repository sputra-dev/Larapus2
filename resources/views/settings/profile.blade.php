@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <nav aria-label="breadcrumb primary">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active" aria-current="page"><a href="{{ url('/home') }}">Home</a> </li>
                    <li class="breadcrumb-item active" aria-current="page">Profil</li>
                </ol>
            </nav>
            <div class="panel-body">
                <table class="table">
                <tbody>
                <tr>
                <td class="text-muted">Nama</td>
                <td>{{ auth()->user()->name }}</td>
                </tr>
                <tr>
                <td class="text-muted">Email</td>
                <td>{{ auth()->user()->email }}</td>
                </tr>
                <tr>
                <td class="text-muted">Login terakhir</td>
                <td>{{ auth()->user()->last_login }}</td>
                </tr>
                </tbody>
                </table>
                <a class="btn btn-primary" href="{{ url('/settings/profile/edit') }}">Ubah</a>
                </div>
        </div>
    </div>
</div>@endsection
