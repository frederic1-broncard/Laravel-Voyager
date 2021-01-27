@extends('template.index')
@section('content')

<div class="col-lg-8 mb-5 mb-lg-0">
    <div class="blog_left_sidebar" >
        <div id="liste-posts" >
@include('posts.liste')
        </div>
        <nav class="blog-pagination justify-content-center d-flex">
            <ul class="pagination">
                <li class="page-item">
                    <a href="#" id="older-posts" class="page-link" style="width: auto; padding: 0 1em; " >More posts</a>
                </li>
            </ul>
        </nav>
@section('scripts')
    <script src="{{ asset('../public/assets/js/posts/lastest.js') }}"></script>
        @endsection
    </div>
</div>

@endsection
