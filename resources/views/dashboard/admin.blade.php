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
                Selamat datang di Menu Admin Larapus. Silahkan pilih menu administrasi yang diinginkan.
                <hr>
                <h4>Statistik Penulis</h4>
                <canvas id="chartPenulis" width="400" height="150"></canvas>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script src="{{ asset('js/Chart.min.js') }}"></script>
<script>
var data = {
labels: {!! json_encode($authors) !!},
datasets: [{
label: 'Jumlah buku',
data: {!! json_encode($books) !!},
backgroundColor: [
          "#f38b4a",
          "#56d798",
          "#ff8397",
          "#6970d5" 
        ],
borderColor: "rgba(151,187,205,0.8)",
}]
};
var options = {
scales: {
yAxes: [{
ticks: {
beginAtZero:true,
stepSize: 1
}
}]
}
};
var ctx = document.getElementById("chartPenulis").getContext("2d");
var authorChart = new Chart(ctx, {
type: 'doughnut',
data: data,
options: options
});
</script>
@endsection