@extends('layouts.back.base')

@section('css')
<!-- summernote -->
<link rel="stylesheet" href="{{ asset('back/plugins/summernote/summernote-bs4.min.css') }}">
@endsection

@section('content-header')
<div class="container-fluid">
	<div class="row mb-2">
		<div class="col-sm-6">
			<h1>E-Book</h1>
		</div>
		<div class="col-sm-6">
			<ol class="breadcrumb float-sm-right">
			<li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
			<li class="breadcrumb-item active">E-Book</li>
			</ol>
		</div>
	</div>
</div>
@endsection

@section('content')
<div class="card">
	<form class="form-horizontal" action="{{ route('bk.store') }}" method="POST" enctype="multipart/form-data">
	@csrf
	<div class="card-header">
		<h3 class="card-title">Tambah E-Book</h3>

		<div class="card-tools">

		</div>
	</div>
	<div class="card-body">
		<div class="form-group row">
			<label for="judul" class="col-md-2 col-form-label">Judul</label>
			<div class="col-md-7">
				<input type="text" class="form-control" id="judul" name="judul" placeholder="Judul">
			</div>
		</div>
		<div class="form-group row">
			<label for="link" class="col-md-2 col-form-label">Link</label>
			<div class="col-md-7">
				<input type="text" class="form-control" id="link" name="link" placeholder="Link">
			</div>
		</div>
	</div>
	<div class="card-footer">
		<input type="submit" class="btn btn-primary" value="Simpan">
	</div>
	</form>
</div>
@endsection

@section('script')
<!-- bs-custom-file-input -->
<script src="{{ asset('back/plugins/bs-custom-file-input/bs-custom-file-input.min.js') }}"></script>
<!-- Summernote -->
<script src="{{ asset('back/plugins/summernote/summernote-bs4.min.js') }}"></script>
<script>
	$(function () {
		bsCustomFileInput.init();
		// Summernote
		$('.editor').summernote({
			height: 150,
		})
	})
  </script>
@endsection
