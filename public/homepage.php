<?php
require_once("./components/htmlstart.php");

if (!isset($_SESSION["songId"])) {
    $_SESSION["songId"] = 3;
}


?>

<body class="bg-neutral-black">
    <!-- Header -->
    <?php require_once("./components/header.php") ?>


    <main>
        <section class="content">
            <?php require_once("./components/homepage_main.php") ?>
        </section>

        <section id = "lecteur">
            <?php require_once("./components/lecteur.php") ?>
        </section>

    </main>

    <footer>

    </footer>




</body>

</html>