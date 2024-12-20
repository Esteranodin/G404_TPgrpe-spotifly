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

// Récupérer tous les commentaires

$sql = "SELECT comment.id, comment.content, user.username FROM `comment` 
JOIN `user` ON user.id = comment.id_user
WHERE id_album = :albumId";
$stmt = $pdo->prepare($sql);
$stmt->execute(["albumId" => $albumId]);
$comments = $stmt->fetchAll(PDO::FETCH_ASSOC);


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
    <form action="javascript:;" onsubmit="envoyerCommentaire(this)" method="get" class="flex items-center justify-between px-3">
                    <input type="hidden" id="id_album" name="id_album" value="<?= $_GET["id"] ?>">
                    <input type="text" id="content" name="content" placeholder="Ajoutez un commentaire" class="bg-black text-white">
                    <button type="submit" class="mt-2 bg-blue-500 text-white py-1 px-2">Envoyer</button>
                </form>
                <section>
                    <?php
foreach($comments as $comment){
    echo "<article>" . $comment["username"] . "<br>" . $comment["content"] ."</article>";
   
    
};


?>
                </section>
    <footer class="mt-6">
        <button onclick="goBack()" class="bg-primary-blue text-white py-2 px-6 rounded-full hover:bg-primary-blue-dark transition duration-200">
            Retour
        </button>
    </footer>
</div>

</body>
</html>
