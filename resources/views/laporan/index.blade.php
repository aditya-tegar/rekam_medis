@extends('adminlte.layouts.app')

@section('title', 'Laporan Rekam Medis')

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
		        <h3 class="card-title">Laporan Rekam Medis</h3>
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
						<div class="col-lg-8">
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
							<th>Nomor Rekam Medis</th>
							<th>Nama Dokter</th>
		    				<th>Nama Pasien</th>
							<th>Diagnosa</th>
							<th>Obat</th>
		    			</tr>
		    		</thead>
		    		<tbody>
		    			@foreach($pasien as $data)
		    			<tr>
							<td>{{ $data->kode_rekam_medis }}</td>
							<td>{{ $data->dokter->nama_dokter }}</td>
		    				<td>{{ $data->nama_pasien }}</td>
							<td>{{ $data->diagnosa }}</td>
							<td>{{ $data->obat }}</td>
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
        'print'
        ],
        "columnDefs": [
            { "width": "10%", "targets": -1 }
        ]
      });
    });
</script>
@endpush