@extends('adminlte.layouts.app')

@section('title', 'Daftar Pasien')

{{-- Custom CSS --}}
@push('css')
<!-- DataTables -->
<link rel="stylesheet" href="{{ asset('assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
@endpush

@section('content')
<div class="row container-fluid d-flex justify-content-center">
	<div class="col-md-8">
		<div class="card">
		    <div class="card-header">
		        <h3 class="card-title">Daftar Pasien</h3>
		    </div>
		    <div class="card-body">
				<!-- @include('partial.alert') -->
				{{-- @if(Auth::user()->role->id == 2) --}}
		    	{{-- <p>
		    		<a href="{{ route('pasien.create') }}" class="btn btn-primary">Tambah Data Pasien</a>
				</p> --}}
				{{-- @endif --}}

				<div class="form-group row">
					<div class="col-lg-8">
						<form action="/laporan">
						<div class="col-lg-6">
							<label for="tanggal_artikel" class="col-md-3 col-form-label text-md-left">{{ __('Tanggal') }}</label>
							<input id="tanggal_artikel" type="date" class="form-control @error('tanggal_artikel') is-invalid @enderror" name="tanggal_awal" value="{{ $tanggal_awal }}" required autocomplete="tanggal_artikel" autofocus>
						</div>
						<div>
							<button style="margin-top: 15px; margin-left: 10px; width: 100px;" type="submit" class="btn btn-primary">Cari</button>
						</div>
						</form>
					</div>
				</div>
		    	<table class="table" id="example1">
		    		<thead>
		    			<tr>
		    				{{-- <th>Tanggal</th> --}}
		    				<th>Kode Rekam Medis</th>
		    				<th>Nama Pasien</th>
		    				{{-- <th>Tempat Lahir</th> --}}
							{{-- <th>Tanggal Lahir</th> --}}
							{{-- <th>alamat</th> --}}
							{{-- <th>No Telepon</th> --}}
							{{-- <th>Status Perkawinan</th> --}}
							{{-- <th>Agama</th> --}}
							{{-- <th>Kewarganegaraan</th> --}}
							<th>diagnosa</th>
							{{-- <th>Opsi</th> --}}
		    			</tr>
		    		</thead>
		    		<tbody>
		    			@foreach($pasien as $data)
		    			<tr>
		    				<td>{{ $data->kode_rekam_medis }}</td>
		    				<td>{{ $data->nama_pasien }}</td>
		    				{{-- <td>{{ $data->tempat }}</td> --}}
		    				{{-- <td>{{ $data->tanggal_lahir }}</td> --}}
							{{-- <td>{{ $data->alamat }}</td> --}}
							{{-- <td>{{ $data->no_telepon }}</td> --}}
							{{-- <td>{{ $data->status_perkawinan }}</td> --}}
							{{-- <td>{{ $data->agama }}</td> --}}
							{{-- <td>{{ $data->kewarganegaraan }}</td> --}}
							<td>{{ $data->diagnosa }}</td>
		    				{{-- <td>@include('partial.action', ['data' => $data, 'route'=>'pasien'])</td> --}}
		    			</tr>
		    			@endforeach
		    		</tbody>
		    	</table>
		    </div>
		</div>
	</div>
</div>
@endsection
@push('js')
<!-- DataTables -->
<script src="{{ asset('assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>

<script src="{{ asset('assets/plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables-buttons/js/buttons.flash.min.js') }}"></script>
<script src="{{ asset('assets/plugins/jszip/jszip.min.js') }}"></script>
<script src="{{ asset('assets/plugins/pdfmake/pdfmake.min.js') }}"></script>
<script src="{{ asset('assets/plugins/pdfmake/vfs_fonts.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>

<script>
    $(function () {
      $("#example1").DataTable({
      	dom: 'Bfrtip',
        buttons: [
        'excel', 'print'
        ],
        "columnDefs": [
            { "width": "10%", "targets": -1 }
        ]
      });
    });
</script>
@endpush