@extends('layouts.front.base')

@section('content')
	<div class="col-md-12 col-sm-12 col-xs-12">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col" width="80%">Judul</th>
                    <th scope="col" width="20%">Download</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($books as $bk)
                <tr>
                    <td>{{ $bk->judul}}</td>
                    <td><a href="{{ $bk->link }}" target="_blank">Download</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
	</div>
@endsection
