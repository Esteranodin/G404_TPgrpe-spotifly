
<?php

require_once("../utils/connect-db.php");

// Au cas ou il n'y a pas de requete
if (!isset($_GET["q"])){
    header("location: ../index.php");
}

//get the q parameter from URL
$query=$_GET["q"];

$sql = 
("SELECT 
    music.title AS music_title,
    album.title AS album_title,
    images.img_path AS image_path,
    artiste.name AS artiste_name
FROM 
    music
JOIN 
    album ON music.id_album = album.id
JOIN 
    artiste ON album.id_artiste = artiste.id
JOIN 
    images ON album.id_image = images.id
WHERE 
    music.title LIKE :query
    OR album.title LIKE :query
    OR artiste.name LIKE :query
LIMIT 5;

");
  
$stmt = $pdo->prepare($sql);
$stmt->execute([":query" => '%' . $query . '%']);
$liste = $stmt->fetchAll(PDO::FETCH_ASSOC);


if (count($liste)==0) {
  $response="no suggestion";
  echo $response;
  exit;
} 



$htmlString = "";
foreach ($liste as $element) {
    // Initialiser les variables locales
    $imagePath = "." . htmlspecialchars($element['image_path']);
    $artiste = str_replace(['-', '_'], ' ', htmlspecialchars($element['artiste_name']));
    $musicTitre = str_replace(['-', '_'], ' ',htmlspecialchars($element['music_title']));
    $albumTitre = str_replace(['-', '_'], ' ',htmlspecialchars($element['album_title']));

    // Concaténation du HTML
    $htmlString .= '
    <div class="music-item flex items-center space-x-4 bg-neutral-800 p-4 hover:bg-neutral-700 transition">
        <img src="' . $imagePath . '" alt="Image de ' . $artiste . '" class="w-16 h-16 object-cover max-w-[20%]">
        <div>
            <h3 class="text-neutral-200 text-lg font-semibold">' . $musicTitre . '</h3>
            <p class="text-neutral-400 text-sm"><strong>Album:</strong> ' . $albumTitre . '</p>
            <p class="text-neutral-400 text-sm"><strong>Artiste:</strong> ' . $artiste . '</p>
        </div>
    </div>
    ';
}





// Set output to "no suggestion" if no hint was found
// or to the correct values
$response=$htmlString;

//output the response
echo $response;
?> 