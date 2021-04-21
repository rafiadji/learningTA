@extends('layouts.front.base')

@section('content')
    <div class="col-md-12 col-sm-12 col-xs-12">
        <!-- single-blog start -->
        <article class="blog-post-wrapper">
            <div class="post-thumbnail">
                <img src="{{ asset('img/'.$artikel->image) }}" alt="" />
            </div>
            <div class="post-information">
                <h2>{{ $artikel->judul}}</h2>
                <div class="entry-meta">
                    <span class="author-meta"><i class="fa fa-user"></i> <a href="#">{{ $artikel->author }}</a></span>
                    <span><i class="fa fa-clock-o"></i> {{ $artikel->created_at }}</span>
                    <span><i class="fa fa-comments-o"></i> <a href="#"> comments</a></span>
                </div>
                <div class="entry-content">

                </div>
            </div>
        </article>
        <div class="clear"></div>
        <div class="single-post-comments">
            <div class="comments-area">
                <div class="comments-heading">
                    <h3> comments</h3>
                </div>
                <div class="comments-list">
                    <ul>
                        <li class="threaded-comments">
                            <div class="comments-details">
                                <div class="comments-list-img">
                                    <img src="{{ asset('front/img/blog/b02.jpg') }}" alt="post-author">
                                </div>
                                <div class="comments-content-wrap">
                                    <span>
                                        <b><a href="#">demo</a></b>
                                        Post author
                                        <span class="post-time">October 6, 2014 at 4:25 pm</span>
                                        <a href="#">Reply</a>
                                    </span>
                                    <p>Quisque semper nunc vitae erat pellentesque, ac placerat arcu consectetur</p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="comment-respond">
                <h3 class="comment-reply-title">Leave a Reply </h3>
                <span class="email-notes">Your email address will not be published. Required fields are marked *</span>
                <form action="#">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <p>Name *</p>
                            <input type="text" />
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <p>Email *</p>
                            <input type="email" />
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <p>Website</p>
                            <input type="text" />
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 comment-form-comment">
                            <p>Website</p>
                            <textarea id="message-box" cols="30" rows="10"></textarea>
                            <input type="submit" value="Post Comment" />
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- single-blog end -->
    </div>
@endsection
