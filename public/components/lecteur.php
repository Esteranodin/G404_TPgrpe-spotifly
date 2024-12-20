
<?php
require_once("C:/wamp64/www/wamp_G404/G404_TPgrpe-spotifly/utils/connect-db.php");

// La session est déja ouverte dans components/header.php


// Test playbar
if (isset ($_GET["id"] )){
$_SESSION["songId"] = $_GET["id"];
} 

$index = $_SESSION["songId"];


$sql = "SELECT music.id , music_path, images.img_path ,title, artiste.name FROM music
JOIN artiste ON artiste.id = music.id_artiste
JOIN images ON artiste.id_image = images.id";

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
        "image_path" => $audio["img_path"],

        "title" => $audio["title"],
        "name" => $audio["name"]
    ];
};

?>

<!-- Section lecteur audio -->
<section class="flex gap-5 absolute bottom-0">

    <div class="album-cover">
        <img id="album-cover" src=".<?= $audioFinal[$index]["image_path"] ?>" alt="Pochette de l'album" class="w-16">
    </div>

    <div class="song-info pt-4">
        <p id="song-title" class="song-title"><?= $audioFinal[$_SESSION["songId"]]['title'] ?></p>
        <p id="song-artist" class="song-artist"><?= $audioFinal[$_SESSION["songId"]]['name'] ?></p>
    </div>


    <div class="flex flex-wrap items-center gap-4">
        <audio id="audio" controls>
            <source src=".<?php echo $audioFinal[$_SESSION["songId"]]["music_path"] ?>" type="audio/mp3">
        </audio>
        <!-- <button id="previous" class="prev-button" >&lt;&lt;</button>
        <button id="playPause" class="play-pause-button">▶</button>
        <button id="next" class="next-button">&gt;&gt;</button> -->

        <hr class="w-full border-4 border-primary-accent opacity-50 my-8">

    </div>