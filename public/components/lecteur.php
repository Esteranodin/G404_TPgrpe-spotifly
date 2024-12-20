<?php
require_once("C:/wamp64/www/Spotifly/config.php");
require_once("C:/wamp64/www/Spotifly/utils/connect-db.php");

if (!isset($_SESSION["songId"])) {
    $_SESSION["songId"] = 1;
}

$songId = $_SESSION["songId"];

$sql = "SELECT music.id, music_path, images.img_path, title, artiste.name FROM music
JOIN artiste ON artiste.id = music.id_artiste
JOIN images ON artiste.id_image = images.id
WHERE music.id = :songId";

try {
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['songId' => $songId]);
    $audio = $stmt->fetch(PDO::FETCH_ASSOC);
} catch (PDOException $error) {
    echo "Erreur lors de la requete : " . $error->getMessage();
}
?>

<div class="album-cover">
    <img id="album-cover" src="<?= BASE_PATH . $audio["img_path"] ?>" alt="Pochette de l'album <?= $audio['title']  ?>" class="w-16">
</div>

<div class="song-info pt-4">
    <p id="song-title" class="song-title"><?= $audio['title'] ?></p>
    <p id="song-artist" class="song-artist"><?= $audio['name'] ?></p>
</div>

<div class="flex flex-wrap items-center gap-4">
    <audio id="audio" controls>
        <source src="<?= BASE_PATH . $audio["music_path"] ?>" type="audio/mp3">
    </audio>
</div>