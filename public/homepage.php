<?php
session_start();
require_once("../config.php");
require_once(BASE_PATH . "public/components/htmlstart.php");

if (!isset($_SESSION["songId"])) {
    $_SESSION["songId"] = 4;
}
?>

<body class="bg-neutral-black">
    <!-- Header -->
    <?php require_once(BASE_PATH . "public/components/header.php") ?>

    <main>
        <section class="content">
            <?php require_once(BASE_PATH . "public/components/homepage_main.php") ?>
        </section>

        <section id="lecteur">
            <?php require_once(BASE_PATH . "public/components/lecteur.php") ?>
        </section>

        <section id="album-content">
            <!-- Album content will be loaded here -->
        </section>
    </main>

    <footer></footer>

    <script src="/assets/JS/album.js"></script>
</body>
</html>