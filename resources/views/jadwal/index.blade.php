@extends('adminlte.layouts.app')

@section('title', 'Daftar Jadwal Praktek')

{{-- Custom CSS --}}
@push('css')
<!-- DataTables -->
<link rel="stylesheet" href="{{ asset('assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
@endpush

@section('content')
<div class="row container-fluid d-flex justify-content-center">
	<div class="col-md-12">
		<div class="card">
		    <div class="card-header">
		        <h3 class="card-title">Daftar Jadwal Praktek</h3>
		    </div>
		    <div class="card-body">
				@if(Auth::user()->role->id == 1)
		    	<p>
		    		<a href="{{ route('jadwal.create') }}" class="btn btn-primary">Tambah Jadwal Praktek</a>
				</p>
				@endif
		    	<table class="table" id="example1">
		    		<thead>
		    			<tr>
							<th>Nama Dokter</th>
							<th>Hari Praktek</th>
							<th>Jam Praktek</th>
							@if(Auth::user()->role->id == 1)
							<th>Opsi</th>
							@endif
		    			</tr>
		    		</thead>
		    		<tbody>
		    			@foreach($jadwal as $data)
		    			<tr>
		    				<td>{{ $data->nama_dokter }}</td>
							<td>{{ $data->hari_praktek }}</td>
							<td>{{ $data->jam_praktek }} s.d Selesai</td>
							@if(Auth::user()->role->id == 1)
							<td>@include('partial.action', ['data' => $data, 'route'=>'jadwal'])</td>
							@endif
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
@endpush