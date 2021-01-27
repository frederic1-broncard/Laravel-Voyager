{{--
    ../public/resources/posts/liste.blade.php
    Données disponibles:
    -$posts : ARRAY(OBJ(id, title, texte, image, created_ar, updated_at))
--}}
@foreach($posts as $post)
    <article class="blog_item">
        <div class="blog_item_img">
            <img class="card-img rounded-0" src= "{{ Voyager::image( $post->image ) }}"  alt="">
            <a href="#" class="blog_item_date">
                <h3>{{$post->created_at->day}}</h3>
                <p>{{ \Carbon\Carbon::parse($post->created_at)->format('M') }}</p>
            </a>
        </div>
        <div class="blog_details">
            <a class="d-inline-block" href="{{ route('posts.show', ['post'=> $post->id, 'titre'=>Str::slug($post->title, '-' )]) }}">
                <h2>{{$post->title}}</h2>
            </a>
            <p>{!! $post->excerpt!!}</p>
            <ul class="blog-info-link">
                <li><a href="#"><i class="fa fa-user"></i>
                @foreach ($post->tags as $tag)
                    <li>{{ $tag->name }}</li>

                    @endforeach

                    </a>
                    </li>
            </ul>

        </div>
    </article>
@endforeach
