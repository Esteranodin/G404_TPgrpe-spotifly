<?php
require_once("./components/htmlstart.php");
?>

<script src="../assets/js/lecteur_2.js"></script>

<body class="mx-4">
    <h3>Ecoutés récemment</h3>
    <section class="flex gap-2">

        <!-- Album Exodus -->
        <div id="album-container">
            <figure id="album-item">
                <img id="exodus" src="../assets/src/images/album/couverture-Exodus-Bob_Marley.jpeg" alt="Pochette de l'album Exodus" class="w-36 h-24 object-cover" />
                <figcaption id="exodusLégende">Exodus</figcaption>
                <form action="../process/process_commentaire.php" method="post" class="flex items-center justify-between px-3">
                    <input type="hidden" name="id_album" value="exodus">
                    <input type="text" name="content" id="content-exodus" placeholder="Ajoutez un commentaire" class="bg-black text-white">
                    <button type="submit" class="mt-2 bg-blue-500 text-white py-1 px-2">Envoyer</button>
                </form>
            </figure>
        </div>

        <!-- Album Twilight of the Thunder God -->
        <div id="album-container">
            <figure id="album-item">
                <img id="album-cover" src="../assets/src/images/album/couverture-Renaud-Renaud.jpg" alt="Pochette de l'album Twilight of the Thunder God" class="w-36 h-24 object-cover" />
                <figcaption id="twilightOfTheThunderGodLégende">Twilight of the Thunder God</figcaption>
                <form action="../process/process_commentaire.php" method="post" class="flex items-center justify-between px-3">
                    <input type="hidden" name="id_album" value="twilightOfTheThunderGod">
                    <input type="text" name="content" id="content-twilightOfTheThunderGod" placeholder="Ajoutez un commentaire" class="bg-black text-white">
                    <button type="submit" class="mt-2 bg-blue-500 text-white py-1 px-2">Envoyer</button>
                </form>
            </figure>
        </div>

        <!-- Album Mistral Gagnant -->
        <div id="album-container">
            <figure id="album-item">
                <img id="mistralGagnant" src="../assets/src/images/album/couverture-Mistral_Gagnant-Renaud.jpg" alt="Pochette de l'album Mistral Gagnant" class="w-36 h-24 object-cover" />
                <figcaption id="mistralGagantLégende">Mistral Gagnant</figcaption>
                <form action="../process/process_commentaire.php" method="post" class="flex items-center justify-between px-3">
                    <input type="hidden" name="id_album" value="mistralGagnant">
                    <input type="text" name="content" id="content-mistralGagnant" placeholder="Ajoutez un commentaire" class="bg-black text-white">
                    <button type="submit" class="mt-2 bg-blue-500 text-white py-1 px-2">Envoyer</button>
                </form>
            </figure>
        </div>

    </section>

    <h3 class="pt-8">Vos playlists</h3>
    <section class="flex gap-2">

        <!-- Album Oceano Nox -->
        <div id="album-container">
            <figure id="album-item">
                <img id="oceanoNox" src="../assets/src/images/album/couverture-Clara_Yse-Oceano_Nox.jpg" alt="Pochette de l'album" class="w-36 h-24 object-cover" />
                <figcaption id="oceanoNoxLégende">Aucune chanson écoutée</figcaption>
                <form action="../process/process_commentaire.php" method="post" class="flex items-center justify-between px-3">
                    <input type="hidden" name="id_album" value="oceanoNox">
                    <input type="text" name="content" id="content-oceanoNox" placeholder="Ajoutez un commentaire" class="bg-black text-white">
                    <button type="submit" class="mt-2 bg-blue-500 text-white py-1 px-2">Envoyer</button>
                </form>
            </figure>
        </div>

        <!-- Album Tangk -->
        <div id="album-container">
            <figure id="album-item">
                <img id="tangk" src="../assets/src/images/album/couverture-Tangk-Idles.jpg" alt="Pochette de l'album" class="w-36 h-24 object-cover" />
                <figcaption id="tangkLégende">Aucune chanson écoutée</figcaption>
                <form action="../process/process_commentaire.php" method="post" class="flex items-center justify-between px-3">
                    <input type="hidden" name="id_album" value="tangk">
                    <input type="text" name="content" id="content-tangk" placeholder="Ajoutez un commentaire" class="bg-black text-white">
                    <button type="submit" class="mt-2 bg-blue-500 text-white py-1 px-2">Envoyer</button>
                </form>
            </figure>
        </div>

        <div id="album-container">
            <figure id="album-item">
                <img id="boucanDenfer" src="../assets/src/images/album/couverture-Boucan_Denfer-Renaud.jpg" alt="Pochette de l'album" class="w-36 h-24 object-cover" />
                <figcaption id="boucanDenferLégende">Aucune chanson écoutée</figcaption>
                <form action="../process/process_commentaire.php" method="post" class="flex items-center justify-between px-3">
                    <input type="hidden" name="id_album" value="boucanDenfer">
                    <input type="text" name="content" id="content-boucanDenfer" placeholder="Ajoutez un commentaire" class="bg-black text-white">
                    <button type="submit" class="mt-2 bg-blue-500 text-white py-1 px-2">Envoyer</button>
                </form>
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

        <hr class="w-full border-4 border-primary-accent opacity-50 my-8">

<section class="flex flex-col gap-5">

    <div class="album-cover">
        <img id="album-cover" src="../assets/src/images/album/couverture-Clara_Yse-Oceano_Nox.jpg" alt="Pochette de l'album">
    </div>

    <div class="song-info pt-4">
        <p id="song-title" class="song-title"><?= $audioFinal[$index]['title'] ?></p>
        <p id="song-artist" class="song-artist">Artiste</p>
    </div>

    <!-- <div class="flex flex-row items-center gap-4">
        <span id="current-time">0:00</span>
        <input id="progress" type="range" min="0" max="100" value="0" class="progress-bar" />
        <div class="time-info">
            <span id="duration">3:00</span>
        </div>
    </div> -->


    <!-- <div class="flex flex-wrap items-center gap-4"> -->
        <audio id="audio" controls >
            <source src=".<?php echo $audioFinal[$index]["music_path"]?>" type="audio/mp3">
        </audio>
            <!-- <button id="previous" class="prev-button" >&lt;&lt;</button>
            <button id="playPause" class="play-pause-button">▶</button>
            <button id="next" class="next-button">&gt;&gt;</button> -->

        <hr class="w-full border-4 border-primary-accent opacity-50 my-8">
    <!-- </div> -->


    <!-- Le fichier audio sera ajouté et contrôlé par JavaScript -->
    <!-- <audio id="audio" controls> -->
    <!-- Le fichier audio sera ajouté dynamiquement par JavaScript -->
    <!-- </audio> -->
</section>

</div>



</body>

</html>



   