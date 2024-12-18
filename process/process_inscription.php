<?php

// Error 1 : cassé le formulaire
// Error 2 : quelquechose de vide
// Error 3 : Problème avec les input donnés


// évite qu'on change la requete en GET
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: ../index.php');
    exit;
}

// Evite la suppression d'un input
if (
    !isset($_POST['username'], $_POST['mail'], $_POST['password'])
) {
    header('Location: ../index.php?error=1');
    exit;
}

// Evite de donner les inputs vides
if (
    empty($_POST['username']) ||
    empty($_POST['mail']) ||
    empty($_POST['password'])
) {
    header('Location: ../index.php?error=2');
    exit;
}



// Sanitization
$username = htmlspecialchars(trim($_POST['username']));
$mdp = $_POST['password'];
$mail = $_POST['mail'];


// Evite que l'username ou le password soient trop long
if (strlen($username) > 25 || strlen($mdp) > 50) {
    header('Location: ../index.php?error=3');
    exit;
}


// Sanitize Email
if (!preg_match('/[^@ \t\r\n]+@[^@ \t\r\n]+\.[^@ \t\r\n]/', $mail)) {
    var_dump($mail);
    die();
    header('Location: ../index.php?error=4');
    exit;
}

// connecter à la base de données
require_once("../utils/connect-db.php");



try {
    
    $sql = "INSERT INTO `user` (`username`, `email`, `password`) VALUES (:username, :mail, :mdp)";
    // Hashage du mot de passe pour la sécurité
    $hashedMdp = password_hash($mdp, PASSWORD_BCRYPT);

  
    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        ':username' => $username,
        ':mail' => $mail,
        ':mdp' => $hashedMdp
    ]);

    
    header('Location: ../index.php?success=1');
    exit;
} catch (PDOException $error) {
    echo "Erreur lors de la requête : " . $error->getMessage();
    exit;
}
?>
