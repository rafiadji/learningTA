@extends('layouts.back.base')

@section('css')
<!-- summernote -->
<link rel="stylesheet" href="{{ asset('back/plugins/summernote/summernote-bs4.min.css') }}">
@endsection

@section('content-header')
<div class="container-fluid">
	<div class="row mb-2">
		<div class="col-sm-6">
			<h1>Artikel</h1>
		</div>
		<div class="col-sm-6">
			<ol class="breadcrumb float-sm-right">
			<li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
			<li class="breadcrumb-item active">Artikel</li>
			</ol>
		</div>
	</div>
</div>
@endsection

@section('content')
<div class="card">
	<form class="form-horizontal" action="{{ route('art.update', $artikel->id) }}" method="POST" enctype="multipart/form-data">
	@csrf
	@method('PUT')
	<div class="card-header">
		<h3 class="card-title">Tambah Artikel</h3>

		<div class="card-tools">

		</div>
	</div>
	<div class="card-body">
		<div class="form-group row">
			<label for="judul" class="col-md-2 col-form-label">Judul</label>
			<div class="col-md-7">
				<input type="text" class="form-control" id="judul" name="judul" placeholder="Judul" value="{{ $artikel->judul }}">
			</div>
		</div>
		<div class="form-group row">
			<label for="artikel" class="col-md-2 col-form-label">Artikel</label>
			<div class="col-md-10">
				<textarea name="artikel" id="artikel" class="form-control editor">{{ $artikel->artikel }}</textarea>
			</div>
		</div>
		<div class="form-group row">
			<label for="file" class="col-md-2 col-form-label">Gambar</label>
			<div class="col-md-6">
				<div class="custom-file">
					<input type="file" name="file" id="file" class="custom-file-input">
					<label class="custom-file-label" for="file">Choose file</label>
				</div>
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
