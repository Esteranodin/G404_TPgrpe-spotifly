<?php
require_once("./components/htmlstart.php");
session_start();
?>

<body>


    <p>Bonjour : <?= $_SESSION["user"]["username"] ?></p>


</body>

</html>