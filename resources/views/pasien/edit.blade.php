@extends('adminlte.layouts.app')

@section('title', 'Edit Data Pasien')

{{-- Custom CSS --}}
@push('css')
@endpush

@section('content')
@php
$disabled = null;
@endphp
@if(Auth::user()->role_id == 3)
@php
    $disabled = "disabled";   
@endphp
@endif
<div class="row container-fluid d-flex justify-content-center">
	<div class="col-md-12">
		<div class="card">
		    <div class="card-header">
		        <h3 class="card-title">Edit Data Pasien</h3>
		    </div>
		    <div class="card-body">
		    	<form action="{{ route('pasien.update', $pasien->id) }}" method="POST">
                    {{ method_field('PUT') }}
		    		@csrf
                    <div class="form-group row">
                        <label for="kode_rekam_medis" class="col-md-3 col-form-label text-md-right">{{ __('Nomor Rekam Medis') }}</label>

                        <div class="col-md-7">
                            <input id="kode_rekam_medis" type="text" class="form-control @error('kode_rekam_medis') is-invalid @enderror" name="kode_rekam_medis" value="{{ $pasien->kode_rekam_medis }}" required {{$disabled}} autocomplete="kode_rekam_medis" autofocus>

                            @error('kode_rekam_medis')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="nama_pasien" class="col-md-3 col-form-label text-md-right">{{ __('Nama Pasien') }}</label>

                        <div class="col-md-7">
                            <input id="nama_pasien" type="text" class="form-control @error('nama_pasien') is-invalid @enderror" name="nama_pasien" value="{{ $pasien->nama_pasien }}" required  {{$disabled}} autocomplete="nama_pasien" autofocus>

                            @error('nama_pasien')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="tempat" class="col-md-3 col-form-label text-md-right">{{ __('Tempat Lahir') }}</label>

                        <div class="col-md-7">
                            <input id="tempat" type="text" class="form-control @error('tempat') is-invalid @enderror" name="tempat" value="{{ $pasien->tempat }}" required {{$disabled}} autocomplete="tempat" autofocus>

                            @error('tempat')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="tanggal_lahir" class="col-md-3 col-form-label text-md-right">{{ __('Tanggal Lahir') }}</label>

                        <div class="col-md-7">
                            <input id="tanggal_lahir" type="text" class="form-control @error('tanggal_lahir') is-invalid @enderror" name="tanggal_lahir" value="{{ $pasien->tanggal_lahir }}" required {{$disabled}} autocomplete="tanggal_lahir" autofocus>

                            @error('tanggal_lahir')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="alamat" class="col-md-3 col-form-label text-md-right">{{ __('Alamat') }}</label>

                        <div class="col-md-7">
                            <input id="alamat" type="text" class="form-control @error('alamat') is-invalid @enderror" name="alamat" value="{{ $pasien->alamat }}" required {{$disabled}} autocomplete="alamat" autofocus>

                            @error('alamat')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="no_telepon" class="col-md-3 col-form-label text-md-right">{{ __('Nomor Telepon') }}</label>

                        <div class="col-md-7">
                            <input id="no_telepon" type="text" class="form-control @error('no_telepon') is-invalid @enderror" name="no_telepon" value="{{ $pasien->no_telepon }}" required {{$disabled}} autocomplete="no_telepon" autofocus>

                            @error('no_telepon')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="status_perkawinan" class="col-md-3 col-form-label text-md-right">{{ __('Status Perkawinan') }}</label>

                        <div class="col-md-7">
                            <input id="status_perkawinan" type="text" class="form-control @error('status_perkawinan') is-invalid @enderror" name="status_perkawinan" value="{{ $pasien->status_perkawinan }}" required {{$disabled}} autocomplete="status_perkawinan" autofocus>

                            @error('status_perkawinan')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="agama" class="col-md-3 col-form-label text-md-right">{{ __('Agama') }}</label>

                        <div class="col-md-7">
                            <input id="agama" type="text" class="form-control @error('agama') is-invalid @enderror" name="agama" value="{{ $pasien->agama }}" required {{$disabled}} autocomplete="agama" autofocus>

                            @error('agama')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="kewarganegaraan" class="col-md-3 col-form-label text-md-right">{{ __('Kewarganegaraan') }}</label>

                        <div class="col-md-7">
                            <input id="kewarganegaraan" type="text" class="form-control @error('kewarganegaraan') is-invalid @enderror" name="kewarganegaraan" value="{{ $pasien->kewarganegaraan }}" required {{$disabled}} autocomplete="kewarganegaraan" autofocus>

                            @error('kewarganegaraan')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    @if(Auth::user()->role_id == 3)
                    <div class="form-group row">
                        <label for="diagnosa" class="col-md-3 col-form-label text-md-right">{{ __('diagnosa') }}</label>

                        <div class="col-md-7">
                            <input id="diagnosa" type="text" class="form-control @error('diagnosa') is-invalid @enderror" name="diagnosa" value="{{ $pasien->diagnosa }}" required autocomplete="diagnosa" autofocus>

                            @error('diagnosa')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    @endif

                    <div class="form-group row mb-0">
                        <div class="col-md-6 offset-md-3">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Ubah') }}
                            </button>
                        </div>
                    </div>
		    	</form>
		    </div>
		</div>
	</div>
</div>
@endsection
@push('js')
@endpush