@extends('adminlte.layouts.app')

@section('title', 'Edit Data Perawat')

{{-- Custom CSS --}}
@push('css')
@endpush

@section('content')
<div class="row container-fluid d-flex justify-content-center">
	<div class="col-md-12">
		<div class="card">
		    <div class="card-header">
		        <h3 class="card-title">Edit Data Perawat</h3>
		    </div>
		    <div class="card-body">
		    	<form action="{{ route('perawat.update', $perawat->id) }}" method="POST">
                    {{ method_field('PUT') }}
		    		@csrf
                    <div class="form-group row">
                        <label for="nip" class="col-md-3 col-form-label text-md-right">{{ __('NIP') }}</label>

                        <div class="col-md-7">
                            <input id="nip" type="text" class="form-control @error('nip') is-invalid @enderror" name="nip" value="{{ $perawat->nip }}" required autocomplete="nip" autofocus>

                            @error('nip')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="nama_perawat" class="col-md-3 col-form-label text-md-right">{{ __('Nama perawat') }}</label>

                        <div class="col-md-7">
                            <input id="nama_perawat" type="text" class="form-control @error('nama_perawat') is-invalid @enderror" name="nama_perawat" value="{{ $perawat->nama_perawat }}" required autocomplete="nama_perawat" autofocus>

                            @error('nama_perawat')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="alamat" class="col-md-3 col-form-label text-md-right">{{ __('Alamat') }}</label>

                        <div class="col-md-7">
                            <input id="alamat" type="text" class="form-control @error('alamat') is-invalid @enderror" name="alamat" value="{{ $perawat->alamat }}" required autocomplete="alamat" autofocus>

                            @error('alamat')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="no_telepon" class="col-md-3 col-form-label text-md-right">{{ __('No. Telepon') }}</label>

                        <div class="col-md-7">
                            <input id="no_telepon" type="text" class="form-control @error('no_telepon') is-invalid @enderror" name="no_telepon" value="{{ $perawat->no_telepon }}" required autocomplete="no_telepon" autofocus>

                            @error('no_telepon')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="email" class="col-md-3 col-form-label text-md-right">{{ __('Email') }}</label>

                        <div class="col-md-7">
                            <input id="email" type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $perawat->email }}" required autocomplete="email" autofocus>

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="gelar" class="col-md-3 col-form-label text-md-right">{{ __('Gelar') }}</label>

                        <div class="col-md-7">
                            <input id="gelar" type="text" class="form-control @error('gelar') is-invalid @enderror" name="gelar" value="{{ $perawat->gelar }}" required autocomplete="gelar" autofocus>

                            @error('gelar')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

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