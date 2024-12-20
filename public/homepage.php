<script defer src="../assets/js/lecteur.js"></script>

<?php
require_once("./components/htmlstart.php");
require_once("../utils/connect-db.php");

// Test playbar

$index = 6;

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

<body class="bg-neutral-black">
    <!-- Header -->
    <?php require_once("./components/header.php") ?>


    <main>
        <section class="content">
            <?php require_once("./components/homepage_main.php") ?>
        </section>


        <!-- Section lecteur audio -->
        <section class="flex flex-col gap-5 absolute bottom-0">
            <div class="flex flex-row gap-5">
                <div class="album-cover">
                    <img id="album-cover" src="../assets/src/images/album/couverture-Clara_Yse-Oceano_Nox.jpg" alt="Pochette de l'album" class="w-16">
                </div>

                <div class="flex flex-col text-neutral-white">
                    <p id="song-title" class="song-title"><?= $audioFinal[$index]['title'] ?></p>
                    <p id="song-artist" class="song-artist">Artiste</p>
                </div>
            </div>

            <hr class="border-2 border-primary-accent opacity-50 my-8">

            <div class="flex flex-wrap items-center gap-4">
                <audio id="audio" controls class="h-12 rounded-lg border-2 border-gray-300 bg-gray-50">
                    <source src=".<?php echo $audioFinal[$index]["music_path"] ?>" type="audio/mp3">
                </audio>
                <!-- <button id="previous" class="prev-button" >&lt;&lt;</button>
            <button id="playPause" class="play-pause-button">▶</button>
            <button id="next" class="next-button">&gt;&gt;</button> -->
            </div>
        </section>
        <hr class="w-full border-4 border-primary-accent opacity-50 my-8">
    </main>


    <footer>

    </footer>




</body>

</html>