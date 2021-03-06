@extends('adminlte.layouts.app')

@section('title', 'Daftar Perawat')

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
		        <h3 class="card-title">Daftar Perawat</h3>
		    </div>
		    <div class="card-body">
		    	<p>
		    		<a href="{{ route('perawat.create') }}" class="btn btn-primary">Tambah Data Perawat</a>
				</p>
		    	<table class="table" id="example1">
		    		<thead>
		    			<tr>
		    				<th>NIP</th>
		    				<th>Nama Perawat</th>
		    				<th>Alamat</th>
							<th>No. Telepon</th>
							<th>Email</th>
							<th>Gelar</th>
							<th>Opsi</th>
		    			</tr>
		    		</thead>
		    		<tbody>
		    			@foreach($perawat as $data)
		    			<tr>
		    				<td>{{ $data->nip }}</td>
		    				<td>{{ $data->nama_perawat }}</td>
		    				<td>{{ $data->alamat }}</td>
							<td>{{ $data->no_telepon }}</td>
							<td>{{ $data->email }}</td>
							<td>{{ $data->gelar }}</td>
		    				<td>@include('partial.action', ['data' => $data, 'route'=>'perawat'])</td>
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