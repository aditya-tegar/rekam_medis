@extends('adminlte.layouts.app')

@section('title', 'Buat Jadwal Praktek')

{{-- Custom CSS --}}
@push('css')
@endpush

@section('content')
<div class="row container-fluid d-flex justify-content-center">
	<div class="col-md-12">
		<div class="card">
		    <div class="card-header">
		        <h3 class="card-title">Buat Jadwal Praktek</h3>
		    </div>
		    <div class="card-body">
		    	<form action="{{ route('jadwal.store') }}" method="POST">
		    		@csrf
                    <div class="form-group row">
                        <label for="nama_dokter" class="col-md-3 col-form-label text-md-right">{{ __('Nama Dokter') }}</label>

                        <div class="col-md-7">
                            <input id="nama_dokter" type="text" class="form-control @error('nama_dokter') is-invalid @enderror" name="nama_dokter" value="{{ old('nama_dokter') }}" required autocomplete="nama_dokter" autofocus>

                            @error('nama_dokter')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="hari_praktek" class="col-md-3 col-form-label text-md-right">{{ __('Hari Praktek') }}</label>

                        <div class="col-md-7">
                            <input id="hari_praktek" type="text" class="form-control @error('hari_praktek') is-invalid @enderror" name="hari_praktek" value="{{ old('hari_praktek') }}" required autocomplete="hari_praktek" autofocus>

                            @error('hari_praktek')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="jam_praktek" class="col-md-3 col-form-label text-md-right">{{ __('jam_praktek') }}</label>

                        <div class="col-md-7">
                            <input id="jam_praktek" type="time" class="form-control @error('jam_praktek') is-invalid @enderror" name="jam_praktek" value="{{ old('jam_praktek') }}" required autocomplete="jam_praktek" autofocus>

                            @error('jam_praktek')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row mb-0">
                        <div class="col-md-6 offset-md-4 ">
                            <button type="submit" class="btn btn-primary float-right">
                                {{ __('Simpan') }}
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