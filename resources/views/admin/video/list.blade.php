@extends('layouts.back.base')

@section('css')
<!-- DataTables -->
<link rel="stylesheet" href="{{ asset('back/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('back/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('back/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
@endsection

@section('content-header')
<div class="container-fluid">
	<div class="row mb-2">
		<div class="col-sm-6">
			<h1>Video</h1>
		</div>
		<div class="col-sm-6">
			<ol class="breadcrumb float-sm-right">
			<li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
			<li class="breadcrumb-item active">Video</li>
			</ol>
		</div>
	</div>
</div>
@endsection

@section('content')
<div class="card">
	<div class="card-header">
		<h3 class="card-title">Video</h3>

		<div class="card-tools">

		</div>
	</div>
	<div class="card-body">
		<a href="{{ route('vid.create') }}" class="btn btn-block btn-sm bg-gradient-success col-md-2"><i class="fas fa-plus"></i> Tambah Video</a>
	</div>
	<div class="card-body">
		<table id="" class="table table-bordered table-hover dataTable">
			<thead>
				<tr>
					<th>Judul</th>
					<th>Link</th>
					<th width="15%">Aktif</th>
					<th width="20%">Opsi</th>
				</tr>
			</thead>
			<tbody>
				@foreach ($videos as $vid)
				<tr>
					<td>{{ $vid->judul }}</td>
					<td>{{ $vid->link}}</td>
					<td><input type="checkbox" name="is_aktif" checked data-bootstrap-switch data-off-color="danger" data-on-color="success"></td>
					<td>
						<div class="btn-group">
							<a href="{{ route('vid.edit',$vid->id) }}" class="btn btn-xs bg-gradient-info"><i class="fas fa-pencil-alt"></i> Ubah</a>
							<button type="button" class="btn btn-xs bg-gradient-danger" data-toggle="modal" data-target="#confrimModal{{ $vid->id }}"><i class="fas fa-trash"></i> Hapus</button>
						</div>
					</td>
				</tr>
				<div class="modal fade" id="confrimModal{{ $vid->id }}">
					<div class="modal-dialog">
						<div class="modal-content bg-danger">
							<div class="modal-header">
								<h4 class="modal-title">Konfirmasi</h4>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<p>Apakah Anda Yakin Ingin Menghapus Video <strong>{{ $vid->judul }}</strong></p>
							</div>
							<div class="modal-footer justify-content-between">
								<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
								<form action="{{ route('vid.destroy',$vid->id) }}" method="POST">
								@csrf
								@method('DELETE')
								<button type="submit" class="btn btn-outline-light">Ya, Saya Yakin</button>
								</form>
							</div>
						</div>
					</div>
				</div>
				@endforeach
			</tbody>
		</table>
	</div>
</div>
@endsection

@section('script')
<!-- DataTables  & Plugins -->
<script src="{{ asset('back/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('back/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('back/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('back/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
<script src="{{ asset('back/plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('back/plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
<script src="{{ asset('back/plugins/jszip/jszip.min.js') }}"></script>
<script src="{{ asset('back/plugins/pdfmake/pdfmake.min.js') }}"></script>
<script src="{{ asset('back/plugins/pdfmake/vfs_fonts.js') }}"></script>
<script src="{{ asset('back/plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
<script src="{{ asset('back/plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
<script src="{{ asset('back/plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>
<!-- Bootstrap Switch -->
<script src="{{ asset('back/plugins/bootstrap-switch/js/bootstrap-switch.min.js') }}"></script>
<script>
	$(function () {
		$('.dataTable').DataTable({
			"paging": true,
			"lengthChange": true,
			"searching": true,
			"ordering": true,
			"info": true,
			"autoWidth": false,
			"responsive": true,
		});
		$("input[data-bootstrap-switch]").each(function(){
			$(this).bootstrapSwitch('state', $(this).prop('checked'));
		})
	});
</script>
@endsection
