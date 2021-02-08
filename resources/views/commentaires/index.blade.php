
@extends('template.index')

@section('content')
    <ul id="listeDesPosts" class="collection">
        @foreach ($commentaires as $commentaire)
            <li class="collection-item avatar post bg-warning">
                @include('commentaires._component')
            </li>
        @endforeach
    </ul>
@endsection
