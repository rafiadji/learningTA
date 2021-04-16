@extends('layouts.front.base')

@section('content')
    @foreach ($artikels as $art)
	<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="single-blog">
			<div class="single-blog-img">
				<a href="blog-details.html"><img src="{{ asset('img/'.$art->image) }}" alt=""></a>
			</div>
			<div class="blog-meta">
				{{-- <span class="comments-type"><i class="fa fa-comment-o"></i><a href="#">11 comments</a></span> --}}
				<span class="date-type">
					<i class="fa fa-calendar"></i>{{ $art->created_at }}
				</span>
			</div>
			<div class="blog-text">
				<h4><a href="#">{{ $art->judul }}</a></h4>
				{!! $art->artikel !!}
			</div>
			<span>
				<a href="blog-details.html" class="ready-btn">Read more</a>
			</span>
		</div>
	</div>
    @endforeach
@endsection
