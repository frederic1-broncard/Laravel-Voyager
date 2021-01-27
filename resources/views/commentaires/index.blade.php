
@extends('template.index')

@section('content')
    <ul id="listeDesPosts" class="collection">
        @foreach ($commentaires as $commentaire)
            <li class="collection-item avatar post">
                @include('commentaires._show')
            </li>
        @endforeach
    </ul>
@endsection
