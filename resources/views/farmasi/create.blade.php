@extends('adminlte.layouts.app')

@section('title', 'Buat Data Obat')

{{-- Custom CSS --}}
@push('css')
@endpush

@section('content')
<div class="row container-fluid d-flex justify-content-center">
	<div class="col-md-12">
		<div class="card">
		    <div class="card-header">
		        <h3 class="card-title">Buat Data Obat</h3>
		    </div>
		    <div class="card-body">
		    	<form action="{{ route('farmasi.store') }}" method="POST">
		    		@csrf
                    <div class="form-group row">
                        <label for="no_reg" class="col-md-3 col-form-label text-md-right">{{ __('Nomor Registrasi') }}</label>

                        <div class="col-md-7">
                            <input id="no_reg" type="number" class="form-control @error('no_reg') is-invalid @enderror" name="no_reg" value="{{ old('no_reg') }}" required autocomplete="no_reg" autofocus>

                            @error('no_reg')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="nama_obat" class="col-md-3 col-form-label text-md-right">{{ __('Nama Obat') }}</label>

                        <div class="col-md-7">
                            <input id="nama_obat" type="text" class="form-control @error('nama_obat') is-invalid @enderror" name="nama_obat" value="{{ old('nama_obat') }}" required autocomplete="nama_obat" autofocus>

                            @error('nama_obat')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="jenis_obat" class="col-md-3 col-form-label text-md-right">{{ __('Jenis Obat') }}</label>

                        <div class="col-md-7">
                            <input id="jenis_obat" type="text" class="form-control @error('jenis_obat') is-invalid @enderror" name="jenis_obat" value="{{ old('jenis_obat') }}" required autocomplete="jenis_obat" autofocus>

                            @error('jenis_obat')
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