<?php


if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: ../index.php');
    exit;
}


if (
    !isset($_POST['username'], $_POST['mail'], $_POST['password'])
) {
    header('Location: ../index.php?error=1');
    exit;
}


if (
    empty($_POST['username']) ||
    empty($_POST['mail']) ||
    empty($_POST['mdp'])
) {
    header('Location: ../index.php?error=2');
    exit;
}


$username = htmlspecialchars(trim($_POST['username']));
$mail = htmlspecialchars(trim($_POST['mail']));
$mdp = htmlspecialchars(trim($_POST['mdp']));


if (strlen($username) > 50) {
    header('Location: ../index.php?error=2');
    exit;
}


if (!preg_match('[^@ \t\r\n]+@[^@ \t\r\n]+\.[^@ \t\r\n]', $mail)) {
    die("l'email est pas conforme");
}


require_once 
// connecter à la base de données


$sql = "INSERT INTO `user` (`username`, `mail`, `mdp`) VALUES (:username, :mail, :mdp)";

try {
    // Hashage du mot de passe pour la sécurité
    $hashedMdp = password_hash($mdp, PASSWORD_BCRYPT);

  
    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        ':username' => $username,
        ':mail' => $mail,
        ':mdp' => $hashedMdp
    ]);

    
    header('Location: ../homepage.php');
    exit;
} catch (PDOException $error) {
    echo "Erreur lors de la requête : " . $error->getMessage();
    exit;
}
?>
