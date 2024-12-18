<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: ../index.php');
    exit;
}


if (
    !isset($_POST['username'], $_POST['password'])
) {
    header('Location: ../index.php?error=1');
    exit;
}


if (
    empty($_POST['username']) ||
    empty($_POST['mdp'])
) {
    header('Location: ../index.php?error=2');
    exit;
}


$username = htmlspecialchars(trim($_POST['username']));
$mdp = htmlspecialchars(trim($_POST['mdp']));


if (strlen($username) > 50) {
    header('Location: ../index.php?error=2');
    exit;
}



require_once 
// connecter à la base de données


$sql = ("SELECT * FROM user WHERE mail = :mail AND mdp = :mdp");


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
