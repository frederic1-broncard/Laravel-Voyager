@extends('template.index')
@section('content')

<div class="col-lg-8 mb-5 mb-lg-0">
    <div class="blog_left_sidebar">
        @foreach($posts as $post)
        <article class="blog_item">
            <div class="blog_item_img">
                <img class="card-img rounded-0" src= "{{ Voyager::image( $post->image ) }}" style="width:50%"  alt="">
                <a href="#" class="blog_item_date">
                    <h3>{{$post->created_at->day}}</h3>
                    <p>{{$post->created_at->month}}</p>
                </a>
            </div>

            <div class="blog_details">
                <a class="d-inline-block" href="single-blog.html">
                    <h2>{{$post->title}}</h2>
                </a>
                <p>{!! $post->content!!}</p>
                <ul class="blog-info-link">
                    <li><a href="#"><i class="fa fa-user"></i> Travel, Lifestyle</a></li>
                </ul>
            </div>
        </article>
        @endforeach


        <nav class="blog-pagination justify-content-center d-flex">
            <ul class="pagination">
                <li class="page-item">
                    <a href="#" class="page-link" style="width: auto; padding: 0 1em;">More posts</a>
                </li>
            </ul>
        </nav>
    </div>
</div>

@endsection
