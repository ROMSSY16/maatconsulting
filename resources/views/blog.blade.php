@extends('layouts.app')
@section('content')

<!-- START homemainclassicslider REVOLUTION SLIDER 6.1.0 -->
@include('partials.pagetitle')
<!-- END REVOLUTION SLIDER -->


<div class="rainbow-blog-area rainbow-section-gap">
    <div class="container">
        <div class="row mt_dec--30">
            <div class="col-lg-12">
                <div class="row row--15">
                    @foreach($posts as $post)
                        <div class="col-lg-4 col-md-6 col-12 mt--30 sal-animate" data-sal="slide-up" data-sal-duration="700" data-sal-delay="100">
                            <div class="rainbow-card box-card-style-default">
                                <div class="inner">
                                <div class="thumbnail"><a class="image" href="{{route('blog.detail', $post->id)}}"><img src="{{$post->image ? asset($post->image) : '' }}" alt="{{$post->title}}"></a></div>
                                    <div class="content">
                                        <ul class="rainbow-meta-list">
                                            <li><a href="{{route('blog.detail', $post->id)}}">{{ $post->user->name ?? null}}</a></li>
                                            <li class="separator">/</li>
                                            <li>{{ $post->created_at->format('d M Y') }}</li>
                                        </ul>
                                        <h4 class="title"><a href="{{route('blog.detail', $post->id)}}">{{$post->title}} </a></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="col-lg-12 text-center">
                <div class="rainbow-load-more text-center mt--60">
                <div class="pagination-block">
                        @if ($posts->onFirstPage())
                            <span class="page-numbers current">1</span>
                        @else
                            <a class="page-numbers" href="{{ $posts->url(1) }}">1</a>
                        @endif
                
                        @for ($i = 2; $i <= $posts->lastPage(); $i++)
                            @if ($i == $posts->currentPage())
                                <span class="page-numbers current">{{ $i }}</span>
                            @else
                                <a class="page-numbers" href="{{ $posts->url($i) }}">{{ $i }}</a>
                            @endif
                        @endfor
                
                        @if ($posts->hasMorePages())
                            <a class="next page-numbers" href="{{ $posts->nextPageUrl() }}"><i class="ti ti-arrow-right"></i></a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection