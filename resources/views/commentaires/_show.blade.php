{{--
  ./resources/views/commentaires/_show.blade.php
  Variables disponibles
    $commentaire OBJ(id, pseudo, texte, created_at, updated_at)
--}}

<i class="material-icons circle green">insert_chart</i>
<div class="title">{{ $commentaire->pseudo }}</div>
<div class="text truncate" data-id="{{ $commentaire->id }}">{{ $commentaire->texte }}</div>
<div>  <button class="btns" type="button">Editer le texte</button> | <a href="#" class="delete btns">Supprimer la publication</a></div>

