<script defer src="../assets/js/lecteur_2.js"></script>

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
    <section class="flex gap-5 absolute bottom-0">

    <div class="album-cover">
        <img id="album-cover" src="../assets/src/images/album/couverture-Clara_Yse-Oceano_Nox.jpg" alt="Pochette de l'album" class="w-16">
    </div>

    <div class="song-info pt-4">
        <p id="song-title" class="song-title"><?= $audioFinal[$index]['title'] ?></p>
        <p id="song-artist" class="song-artist">Artiste</p>
    </div>

  
    <div class="flex flex-wrap items-center gap-4">
        <audio id="audio" controls >
            <source src=".<?php echo $audioFinal[$index]["music_path"]?>" type="audio/mp3">
        </audio>
            <!-- <button id="previous" class="prev-button" >&lt;&lt;</button>
            <button id="playPause" class="play-pause-button">▶</button>
            <button id="next" class="next-button">&gt;&gt;</button> -->

        <hr class="w-full border-4 border-primary-accent opacity-50 my-8">
        
    </div>


    </main>

    <footer>

    </footer>
    



</body>

</html>