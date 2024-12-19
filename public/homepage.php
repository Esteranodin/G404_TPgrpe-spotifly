<?php
require_once("./components/htmlstart.php");
?>



<body class="mx-4">
    <h3>Ecoutés récemment</h3>
    <section class="flex gap-2">

        <div id="album-container">
            <figure id="album-item">
                <img id="album-cover" src="../assets/src/images/album/couverture-Exodus-Bob_Marley.jpeg" alt="Pochette de l'album Exodus" class="w-36 h-24 object-cover" />
                <figcaption id="exodus">Exodus</figcaption>
            </figure>
        </div>
        <div id="album-container">
            <figure id="album-item">
                <img id="album-cover" src="../assets/src/images/album/couverture-Renaud-Renaud.jpg" alt="Pochette de l'album Twilight of the thunder god" class="w-36 h-24 object-cover" />
                <figcaption id="twilightOfTheThunderGod">Twilight of the thunder god</figcaption>
            </figure>
        </div>

        <div id="album-container">
            <figure id="album-item">
                <img id="album-cover" src="../assets/src/images/album/couverture-Mistral_Gagnant-Renaud.jpg" alt="Pochette de l'album Mistral Gagnant" class="w-36 h-24 object-cover" />
                <figcaption id="mistralGagant">Mistral Gagnant</figcaption>
            </figure>
        </div>
    </section>
    <h3 class="pt-8">Vos playlists</h3>
    <section class="flex gap-2">

        <div id="album-container">
            <figure id="album-item">
                <img id="album-cover" src="../assets/src/images/album/couverture-Clara_Yse-Oceano_Nox.jpg" alt="Pochette de l'album" class="w-36 h-24 object-cover" />
                <figcaption id="album-title">Aucune chanson écoutée</figcaption>
            </figure>
        </div>
        <div id="album-container">
            <figure id="album-item">
                <img id="album-cover" src="../assets/src/images/album/couverture-Tangk-Idles.jpg" alt="Pochette de l'album" class="w-36 h-24 object-cover" />
                <figcaption id="album-title">Aucune chanson écoutée</figcaption>
            </figure>
        </div>

        <div id="album-container">
            <figure id="album-item">
                <img id="album-cover" src="../assets/src/images/album/couverture-Boucan_Denfer-Renaud.jpg" alt="Pochette de l'album" class="w-36 h-24 object-cover" />
                <figcaption id="album-title">Aucune chanson écoutée</figcaption>
            </figure>
        </div>
    </section>
  


  
        <hr class="w-96 h-8 bg-green-500 opacity-50">

        <section class="flex flex-col items-center gap-5">
            <!-- <div class="container">
            <div class="album-cover">
                <img id="album-cover" src="../assets/src/images/album/" alt="Pochette de l'album">
            </div> -->

            <div class="song-info pt-4">
                <p id="song-title" class="song-title">Titre de la chanson</p>
                <p id="song-artist" class="song-artist">Artiste</p>
            </div>

            <div class="controls">
                <input id="progress" type="range" min="0" max="100" value="0" class="progress-bar" />
                <div class="time-info">
                    <span id="current-time">0:00</span>
                    <span id="duration">3:00</span>
                </div>

                <div class="buttons">
                    <button id="prev" class="prev-button">&lt;&lt;</button>
                    <button id="playPause" class="play-pause-button">▶</button>
                    <button id="next" class="next-button">&gt;&gt;</button>
                </div>
            </div>
            </div>

            <!-- Le fichier audio sera ajouté et contrôlé par JavaScript -->
            <!-- <audio id="audio" controls> -->
            <!-- Le fichier audio sera ajouté dynamiquement par JavaScript -->
            <!-- </audio> -->
        </section>


    </body>

    </html>



    <section class="flex flex-col items-center gap-5">
        <!-- <div class="container">
            <div class="album-cover">
                <img id="album-cover" src="../assets/src/images/album/" alt="Pochette de l'album">
            </div> -->

        <div class="song-info pt-4">
            <p id="song-title" class="song-title">Titre de la chanson</p>
            <p id="song-artist" class="song-artist">Artiste</p>
        </div>

        <div class="controls">
            <input id="progress" type="range" min="0" max="100" value="0" class="progress-bar" />
            <div class="time-info">
                <span id="current-time">0:00</span>
                <span id="duration">3:00</span>
            </div>

            <div class="buttons">
                <button id="prev" class="prev-button">&lt;&lt;</button>
                <button id="playPause" class="play-pause-button">▶</button>
                <button id="next" class="next-button">&gt;&gt;</button>
            </div>
        </div>
        </div>

        <!-- Le fichier audio sera ajouté et contrôlé par JavaScript -->
        <!-- <audio id="audio" controls> -->
        <!-- Le fichier audio sera ajouté dynamiquement par JavaScript -->
        <!-- </audio> -->
    </section>


</body>

</html>