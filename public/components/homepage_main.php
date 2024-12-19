<?php
require_once("../utils/connect-db.php");

$sql = "SELECT album.id, title, images.img_path, artiste.name FROM album JOIN artiste ON album.id_artiste = artiste.id JOIN images ON album.id_image = images.id ORDER BY `release_date` DESC";

$albums = $pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);

// foreach ($albums as $album) {
//     echo '<div class="album" data-id="' . $album['id'] . '">';
//     echo $album['name'];
//     echo '</div>';
// }
?>


<h3 class="text-2xl text-neutral-white font-bold py-4">Dernières nouveautés</h3>
<section id="derniers_albums" class="flex overflow-scroll gap-1 w-full h-fit">


<?php
require_once("../utils/sanitize.php");
foreach ($albums as $album) {
  // Initialise et sanitize les éléments d'album
  $id = $album["id"];
  $path = isset($album['img_path']) ? "." . htmlspecialchars($album['img_path']) : '';
  $title = sanitizeAndFormatString($album["title"]);
  $name = sanitizeAndFormatString($album["name"]);
?>


<div data-id="<?= $id ?>" ondragstart="return false;" class="album card flex flex-col items-center bg-primary-grey-dark shrink-0 basis-[40vw] md:basis-[30vw] lg:basis-[15vw]">
    <div class="w-full">
        <img src="<?= $path ?>" alt="Image de l'album <?= $title ?>" class="aspect-square object-cover rounded-t-lg w-full" />
    </div>
    <div class="p-4 text-center">
        <h3 class="text-white text-lg font-bold mb-1"><?= $title ?></h3>
        <p class="text-gray-300 text-sm"><?= $name ?></p>
    </div>
</div>


<?php
}
?>

</section>