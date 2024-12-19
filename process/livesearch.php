
<?php

require_once("../utils/connect-db.php");

// Au cas ou il n'y a pas de requete
if (!isset($_GET["q"])){
    header("location: ../index.php");
}

//get the q parameter from URL
$query=$_GET["q"];

$sql = "SELECT 
        'music' AS result_type,
        music.title AS title,
        images.img_path AS image_path,
        artiste.name AS artiste_name,
        album.title AS album_title
    FROM 
        music
    JOIN 
        album ON music.id_album = album.id
    JOIN 
        artiste ON album.id_artiste = artiste.id
    JOIN 
        images ON album.id_image = images.id
    WHERE 
        REPLACE(music.title, '_', ' ') LIKE :query

    UNION

    SELECT 
        'album' AS result_type,
        album.title AS title,
        images.img_path AS image_path,
        artiste.name AS artiste_name,
        NULL AS album_title
    FROM 
        album
    JOIN 
        artiste ON album.id_artiste = artiste.id
    JOIN 
        images ON album.id_image = images.id
    WHERE 
        REPLACE(album.title, '_', ' ') LIKE :query

    UNION

    SELECT 
        'artiste' AS result_type,
        artiste.name AS title,
        images.img_path AS image_path,
        NULL AS artiste_name,
        NULL AS album_title
    FROM 
        artiste
    JOIN 
        images ON artiste.id_image = images.id
    WHERE 
        REPLACE(artiste.name, '_', ' ') LIKE :query

    LIMIT 5;
";

  
$stmt = $pdo->prepare($sql);
$stmt->execute([":query" => '%' . $query . '%']);
$liste = $stmt->fetchAll(PDO::FETCH_ASSOC);


if (count($liste)==0) {
  $response="no suggestion";
  echo $response;
  exit;
} 

require_once("../utils/sanitize.php");

$htmlString = "";
foreach ($liste as $element) {
    // Initialiser les variables locales
    $imagePath = isset($element['image_path']) ? "." . htmlspecialchars($element['image_path']) : ''; 
    $artiste = sanitizeAndFormatString($element['artiste_name']);
    $titre = sanitizeAndFormatString($element['title']);
    $albumTitre = sanitizeAndFormatString($element['album_title']);

    // Concaténation du HTML
    if ($element['result_type'] === 'music') {
        // Affichage pour la musique
        $htmlString .= '
        <div class="music-item flex items-center space-x-4 bg-neutral-800 p-4 hover:bg-neutral-700 transition">
            <img src="' . $imagePath . '" alt="Image de ' . $artiste . '" class="w-16 h-16 object-cover rounded-full max-w-[20%]">
            <div>
                <h3 class="text-neutral-200 text-lg font-semibold">' . $titre . '</h3>
                <p class="text-neutral-400 text-sm"><strong>Album:</strong> ' . $albumTitre . '</p>
                <p class="text-neutral-400 text-sm"><strong>Artiste:</strong> ' . $artiste . '</p>
            </div>
        </div>
        ';
    } elseif ($element['result_type'] === 'album') {
        // Affichage pour l'album
        $htmlString .= '
        <div class="album-item flex items-center space-x-4 bg-neutral-800 p-4 hover:bg-neutral-700 transition">
            <img src="' . $imagePath . '" alt="Image de l\'album ' . $albumTitre . '" class="w-16 h-16 object-cover max-w-[20%]">
            <div>
                <h3 class="text-neutral-200 text-lg font-semibold">' . $titre . '</h3>
                <p class="text-neutral-400 text-sm"><strong>Artiste:</strong> ' . $artiste . '</p>
            </div>
        </div>
        ';
    } elseif ($element['result_type'] === 'artiste') {
        // Affichage pour l'artiste
        $htmlString .= '
        <div class="album-item flex items-center space-x-4 bg-neutral-800 p-4 hover:bg-neutral-700 transition">
            <img src="' . $imagePath . '" alt="Image de l\'artiste ' . $titre . '" class="w-16 h-16 object-cover max-w-[20%]">
            <div>
                <h3 class="text-neutral-200 text-lg font-semibold">' . $titre . '</h3>
                <p class="text-neutral-400 text-sm">Artiste</p>
            </div>
        </div>
        ';
    }
}






// Set output to "no suggestion" if no hint was found
// or to the correct values
$response=$htmlString;

//output the response
echo $response;
?> 