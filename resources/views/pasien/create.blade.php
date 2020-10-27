@extends('adminlte.layouts.app')

@section('title', 'Buat Data Warga')

{{-- Custom CSS --}}
@push('css')
@endpush

@section('content')
<div class="row container-fluid d-flex justify-content-center">
	<div class="col-md-12">
		<div class="card">
		    <div class="card-header">
		        <h3 class="card-title">Buat Data Pasien</h3>
		    </div>
		    <div class="card-body">
		    	<form action="{{ route('pasien.store') }}" method="POST">
		    		@csrf
                    <div class="form-group row">
                        <label for="kode_rekam_medis" class="col-md-3 col-form-label text-md-right">{{ __('Kode Rekam Medis') }}</label>

                        <div class="col-md-7">
                            <input id="kode_rekam_medis" type="text" class="form-control @error('kode_rekam_medis') is-invalid @enderror" name="kode_rekam_medis" value="{{ old('kode_rekam_medis') }}" required autocomplete="kode_rekam_medis" autofocus>

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
                            <input id="nama_pasien" type="text" class="form-control @error('nama_pasien') is-invalid @enderror" name="nama_pasien" value="{{ old('nama_pasien') }}" required autocomplete="nama_pasien" autofocus>

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
                            <input id="tempat" type="text" class="form-control @error('tempat') is-invalid @enderror" name="tempat" value="{{ old('tempat') }}" required autocomplete="tempat" autofocus>

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
                            <input id="tanggal_lahir" type="date" class="form-control @error('tanggal_lahir') is-invalid @enderror" name="tanggal_lahir" value="{{ old('tanggal_lahir') }}" required autocomplete="tanggal_lahir" autofocus>

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
                            <input id="alamat" type="text" class="form-control @error('alamat') is-invalid @enderror" name="alamat" value="{{ old('alamat') }}" required autocomplete="alamat" autofocus>

                            @error('alamat')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="no_telepon" class="col-md-3 col-form-label text-md-right">{{ __('No Telepon') }}</label>

                        <div class="col-md-7">
                            <input id="no_telepon" type="text" class="form-control @error('no_telepon') is-invalid @enderror" name="no_telepon" value="{{ old('no_telepon') }}" required autocomplete="no_telepon" autofocus>

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
                            <input id="status_perkawinan" type="text" class="form-control @error('status_perkawinan') is-invalid @enderror" name="status_perkawinan" value="{{ old('status_perkawinan') }}" required autocomplete="status_perkawinan" autofocus>

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
                            <input id="agama" type="text" class="form-control @error('agama') is-invalid @enderror" name="agama" value="{{ old('agama') }}" required autocomplete="agama" autofocus>

                            @error('agama')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div> 

                    <div class="form-group row">
                        <label for="kewarganegaraan" class="col-md-3 col-form-label text-md-right">{{ __('kewarganegaraan') }}</label>

                        <div class="col-md-7">
                            <input id="kewarganegaraan" type="text" class="form-control @error('kewarganegaraan') is-invalid @enderror" name="kewarganegaraan" value="{{ old('kewarganegaraan') }}" required autocomplete="kewarganegaraan" autofocus>

                            @error('kewarganegaraan')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div> 

                    <div class="form-group row">
                        <label for="diagnosa" class="col-md-3 col-form-label text-md-right">{{ __('diagnosa') }}</label>

                        <div class="col-md-7">
                            <input id="diagnosa" type="text" class="form-control @error('diagnosa') is-invalid @enderror" name="diagnosa" value="{{ old('diagnosa') }}" required autocomplete="diagnosa" autofocus>

                            @error('diagnosa')
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