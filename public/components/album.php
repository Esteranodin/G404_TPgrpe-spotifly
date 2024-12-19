<?php
require_once("../../utils/connect-db.php");
require_once("../../utils/sanitize.php");

// Récupération de l'ID de la playlist depuis l'URL
$albumId = isset($_GET['id']) ? $_GET['id'] : null;

if (!$albumId) {
    echo "ID de playlist manquant.";
    exit;
}

// Récupération des détails de l'album (playlist)
$sql = "SELECT * FROM album WHERE id = :id";
$stmt = $pdo->prepare($sql);
$stmt->execute(['id' => $albumId]);
$album = $stmt->fetch(PDO::FETCH_ASSOC);

if (!$album) {
    echo "Playlist introuvable.";
    exit;
}

// Récupère image album
$sqlimage = "SELECT img_path, img_alt FROM images WHERE id = :id";
$stmt = $pdo->prepare($sqlimage);
$stmt->execute(['id' => $album["id_image"]]);
$image = $stmt->fetch(PDO::FETCH_ASSOC);

// Sanitize les données de la playlist
$albumTitle = sanitizeAndFormatString($album['title']);
$albumReleaseDate = sanitizeAndFormatString($album['release_date']);

// Récupération des musiques de cet album (playlist)
$sqlsongs = "SELECT * FROM music WHERE id_album = :id";
$stmt = $pdo->prepare($sqlsongs);
$stmt->execute(['id' => $albumId]);
$songs = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<div class="playlist-container bg-primary-dark p-6 rounded-lg shadow-lg">
    <!-- TODO FIX IMAGE -->
    <img src="<?="." . $image["img_path"] ?>" alt="<?= $image["img_alt"] ?>">
    <h1 class="text-3xl font-bold text-white mb-4"><?= $albumTitle ?></h1>
    <p class="text-gray-300 mb-6"><?= $albumReleaseDate ?></p>

    <section class="songs-list space-y-4">
        <h2 class="text-xl font-semibold text-white">Liste des musiques :</h2>
        <ul class="space-y-2">
            <?php foreach ($songs as $song) { 
                // Sanitize les données de chaque chanson
                $songTitle = sanitizeAndFormatString($song['title']);
                $songDuration = sanitizeAndFormatString($song['duration']);
            ?>
                <li class="song-item flex items-center justify-between py-2 px-4 bg-primary-grey-dark rounded-lg hover:bg-primary-grey-light transition duration-200">
                    <div class="flex items-center">
                        <span class="text-white font-medium"><?= $songTitle ?></span>
                        <span class="text-gray-400 text-sm ml-2"><?= $songDuration ?> secondes</span>
                    </div>
                    <button onclick="playSong(<?= $song['id'] ?>)" class="text-primary-blue hover:text-primary-blue-dark">
                        <i class="fas fa-play"></i> Jouer
                    </button>
                </li>
            <?php } ?>
        </ul>
    </section>

    <footer class="mt-6">
        <button onclick="goBack()" class="bg-primary-blue text-white py-2 px-6 rounded-full hover:bg-primary-blue-dark transition duration-200">
            Retour
        </button>
    </footer>
</div>

</body>
</html>
