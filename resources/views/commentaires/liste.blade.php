

    <ul id="listeDesPosts" class="collection">

            <li class="collection-item avatar post">
                <div class="col m8">
                    <ul id="listeDesPosts" class="collection">
                        @foreach ($commentaires as $commentaire)

                        <li class="collection-item avatar post">

                            <div class="text truncate m-4" > {{ $commentaire->pseudo}}</div>
                            <div class="text truncate m-4" > {{ $commentaire->content }}</div>

                        </li>
                            <hr>
                        @endforeach
                    </ul>

                    <!-- ################### FIN DE LISTE DES POSTS ###################### -->
                </div>
            </li>

    </ul>


