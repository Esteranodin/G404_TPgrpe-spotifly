<?php
require_once("./components/htmlstart.php")

?>

<body>
    <section>
        <h3>Ecoutés récemment</h3>
        <div id="album-container">
            <figure id="album-item">
                <img id="album-cover" src="images/placeholder.jpg" alt="Pochette de l'album" />
                <figcaption id="album-title">Aucune chanson écoutée</figcaption>
            </figure>
        </div>
        <div id="album-container">
            <figure id="album-item">
                <img id="album-cover" src="images/placeholder.jpg" alt="Pochette de l'album" />
                <figcaption id="album-title">Aucune chanson écoutée</figcaption>
            </figure>
        </div>

        <div id="album-container">
            <figure id="album-item">
                <img id="album-cover" src="images/placeholder.jpg" alt="Pochette de l'album" />
                <figcaption id="album-title">Aucune chanson écoutée</figcaption>
            </figure>
        </div>


    </section>

    <section>
        <h3>Vos playlist</h3>
        <div id="album-container">
            <figure id="album-item">
                <img id="album-cover" src="../assets/src/images/album/" alt="Pochette de l'album" />
                <figcaption id="album-title">Aucune chanson écoutée</figcaption>
            </figure>
        </div>
        <div id="album-container">
            <figure id="album-item">
                <img id="album-cover" src="../assets/src/images/album/" alt="Pochette de l'album" />
                <figcaption id="album-title">Aucune chanson écoutée</figcaption>
            </figure>
        </div>

        <div id="album-container">
            <figure id="album-item">
                <img id="album-cover" src="../assets/src/images/album/" alt="Pochette de l'album" />
                <figcaption id="album-title">Aucune chanson écoutée</figcaption>
            </figure>
        </div>

    </section>

    <section>
        <!-- Conteneur principal du lecteur -->
        <div class="container">
            <!-- Pochette de l'album -->
            <div class="album-cover">
                <img id="album-cover" src="../assets/src/images/album/" alt="Pochette de l'album">
            </div>

            <!-- Informations sur la chanson -->
            <div class="song-info">
                <p id="song-title" class="song-title">Titre de la chanson</p>
                <p id="song-artist" class="song-artist">Artiste</p>
            </div>

            <!-- Barre de progression et contrôles -->
            <div class="controls">
                <!-- Barre de progression -->
                <input id="progress" type="range" min="0" max="100" value="0" class="progress-bar" />

                <!-- Temps écoulé et durée -->
                <div class="time-info">
                    <span id="current-time">0:00</span>
                    <span id="duration">3:00</span>
                </div>

                <!-- Contrôles de lecture -->
                <div class="buttons">
                    <button id="prev" class="prev-button">&lt;&lt;</button>
                    <button id="playPause" class="play-pause-button">▶</button>
                    <button id="next" class="next-button">&gt;&gt;</button>
                </div>

            </div>
        </div>

        <!-- Ajout de l'élément audio (avec l'id audio) -->
        <audio id="audio" class="hidden">
            <!-- Le fichier audio sera modifié via JavaScript -->
        </audio>


    </section>


</body>

</html>