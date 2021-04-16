@extends('layouts.front.base')

@section('content')
    @foreach ($videos as $vid)
	<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="single-blog">
			<div class="blog-text">
				<h4><a href="#">{{ $vid->judul }}</a></h4>
			</div>
            <div class="blog-meta">
				{{-- <span class="comments-type"><i class="fa fa-comment-o"></i><a href="#">11 comments</a></span> --}}
				<span class="date-type">
					<i class="fa fa-calendar"></i>{{ $vid->created_at }}
				</span>
			</div>
            <div class="single-blog-img">
				<a href="blog-details.html"><iframe width="100%" height="315" src="{{ $vid->link }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></a>
			</div>
			<span>
				<a href="blog-details.html" class="ready-btn">Read more</a>
			</span>
		</div>
	</div>
    @endforeach
@endsection
