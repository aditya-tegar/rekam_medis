@extends('adminlte.layouts.app')

@section('title', 'Visi dan Misi')

@section('content')
<div class="card">
    {{-- <div class="card-header">
        <h3 class="card-title">Status</h3>
    </div> --}}
    <div class="card-body">
        @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
        @endif
    <h3>Selamat Datang di Sistem Informasi Rekam Medis Klinik Darnelis</h3>
    <h3></h3>
    <h3>Visi</h3>
    <h3>* Menjadi Pusat Layanan kesehatan primer pilihan masyarkat berbasis keluarga</h3>
    <h3></h3>
    <h3>Misi</h3>
    <h3>* Menyediakan layanan medic dasar komprehensif</h3>
    <h3>* Memberikan pelayanan kesehatan dengan pendekatan kekeluargaan</h3>
    <h3>* Meningkatkan drajat kesehatan masyarakat dengan tenaga profesi yang berpengalman</h3>
    <h3>* Membangun mutu layanan yang memuaskan</h3>
    </div>
</div>
@endsection