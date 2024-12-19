<?php
require_once("./components/htmlstart.php");
require_once("../utils/connect-db.php");

$index = 6 ;

$sql = "SELECT id , music_path, title FROM music";

try {
    $stmt = $pdo->query($sql);
    $audios = $stmt->fetchAll(
        PDO::FETCH_ASSOC
    ); 

} catch (PDOException $error) {
    echo "Erreur lors de la requete : " . $error->getMessage();
}

// Tableau multidimensionnel $audiofinal
$audioFinal = [];
foreach ($audios as $audio) {
    $audioFinal[$audio["id"]] = [
    "music_path" => $audio["music_path"],
     "title" => $audio["title"]
    ];
};

?>

<script src="../assets/js/lecteur_2.js"></script>

<body class="mx-4 bg-neutral-black font-title text-neutral-white">

    <div class="flex flex-col min-h-screen">

        <h3>Ecoutés récemment</h3>
        <section class="flex p-4 gap-4">

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
        <section class="flex p-4 gap-4">

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