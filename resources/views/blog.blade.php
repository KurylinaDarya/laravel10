@extends('layouts.app')
@section('content')
<!-- blog-area start -->
<div class="blog-area ptb-75">
    <div class="container">
        @foreach($posts as $post)
            <div class="single-blog-wrapper mb-40">
                <div class="blog-img mb-30">
                    @if(!empty($post->image))
                    <a href="blog-details-standerd.html">
                        <img src="{{$post->image}}" alt="">
                    </a>
                    @endif
                </div>
                <div class="blog-content">
                    <h2><a href="blog-details-standerd.html">{{$post->title}}</a></h2>
                    <div class="blog-date-categori">
                        <ul>
                            <li>October 14, 2018 </li>
                            <li><a href="#">Admin </a></li>
                        </ul>
                    </div>
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing , sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                <div class="blog-btn-social mt-30">
                    <div class="blog-btn">
                        <a href="{{route('blog-post', $post->slug)}}">read more</a>
                    </div>
                </div>
            </div>
        @endforeach
        {{--
        <div class="pagination-total-pages mt-50">
            <div class="pagination-style">
                <ul>
                    <li><a class="prev-next prev" href="#"><i class="ion-ios-arrow-left"></i> Prev</a></li>
                    <li><a class="active" href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">...</a></li>
                    <li><a href="#">10</a></li>
                    <li><a class="prev-next next" href="#">Next<i class="ion-ios-arrow-right"></i> </a></li>
                </ul>
            </div>
            <div class="total-pages">
                <p>Showing 1 - 20 of 30 results  </p>
            </div>
        </div>--}}
    </div>
</div>
<!-- blog-area end -->
@endsection
