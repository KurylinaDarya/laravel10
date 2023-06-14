<div class="single-comment-wrapper mt-35">
    <div class="blog-comment-img">
        <img src="assets/img/blog/blog-comment1.png" alt="">
    </div>
    <div class="blog-comment-content">
        <a href="#" class="btn-link text-semibold media-heading box-inline">{{$comment->name}}</a>
        <a href="#" class="btn-link text-semibold media-heading box-inline">{{$comment->email}}</a>
        <p class="text-muted text-sm"><i class="fa fa-mobile fa-lg"></i> - {{$comment->created_at}}</p><br>
        <p>{{$comment->comment}}</p>
        <div class="blog-btn">
            <a href="blog-details.html">read more</a>
        </div>
    </div>
</div>
