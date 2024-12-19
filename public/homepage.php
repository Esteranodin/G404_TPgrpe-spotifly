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
    </main>

    <footer>

    </footer>
    



</body>

</html>