{{--
  ./resources/views/commentaires/_component.blade.php
  Variables disponibles
    $commentaire OBJ(id, author, content, created_at, updated_at)
--}}

<section class="container" id="sectionPrincipale">

    <div class="comment-form">
        <h5>Commentaires</h5>
        <hr>
        <div class="row">
            <div class="col m4">
                <form id="form_commentaires" data-url="{{route('ajax.insert')}}" class="card-panel">
                    <div class="input-field">
                        <input type="text" id="pseudo" class="validate" required="required"  />
                        <label for="pseudo">Votre pseudo</label>
                    </div>
                    <div class="input-field">

                        <textarea id="commentaire" class="materialize-textarea validate" required="required"></textarea>
                        <label for="commentaire">Votre commentaire</label>
                    </div>
                    <div><button class="btn waves-effect " type="submit">Envoyer

                        </button>
                    </div>
                </form>
            </div>

            <!-- ################### LISTE DES POSTS ###################### -->




</div>

    </div>
</section>
