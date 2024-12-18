<?php

// évite qu'on change la requete en GET
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: ../index.php');
    exit;
}

// Evite la suppression d'un input
if (
    !isset($_POST['username'], $_POST['password'])
) {
    header('Location: ../index.php?error=1');
    exit;
}

// Evite de donner les trucs vides
if (
    empty($_POST['username']) ||
    empty($_POST['mdp'])
) {
    header('Location: ../index.php?error=2');
    exit;
}

// Sanitization

$username = htmlspecialchars(trim($_POST['username']));
$mdp = htmlspecialchars(trim($_POST['mdp']));


// Evite que l'username soit trop long

if (strlen($username) > 25) {
    header('Location: ../index.php?error=2');
    exit;
}



// connecter à la base de données
require_once("./utils/connect-db.php");


$sql = "INSERT INTO `user` (`username`, `mdp`) VALUES (:username, :mdp)";

try {
    // Hashage du mot de passe pour la sécurité
    $hashedMdp = password_hash($mdp, PASSWORD_BCRYPT);

  
    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        ':username' => $username,
        ':mdp' => $hashedMdp
    ]);

    
    header('Location: ../homepage.php');
    exit;
} catch (PDOException $error) {
    echo "Erreur lors de la requête : " . $error->getMessage();
    exit;
}
?>
