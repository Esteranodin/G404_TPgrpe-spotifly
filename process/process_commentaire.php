<?php
require_once("../utils/connect-db.php");
// Je verifie si l'user est coonecté

session_start();
if (!isset($_SESSION['user']['id'])) {
    echo "Erreur de session : Vous devez être connecté pour ajouter un commentaire.";
    exit();
}

try {
    // Connexion à la base de données avec PDO
    $pdo = new PDO('mysql:host=127.0.0.1;dbname=spotifly_td', 'root', ''); // Je m'assure que les identifiants sont corrects
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Récupération des données envoyées depuis le formulaire
    $content = $_GET['content']; // Contenu du commentaire
    $id_album = $_GET['id_album']; // ID de l'album auquel le commentaire est lié

    // Préparation de la requête d'insertion
    $query = "INSERT INTO comment (content, id_user, id_album) VALUES (:content, :id_user, :id_album)";
    $stmt = $pdo->prepare($query);

    // Lier les paramètres de la requête
    $stmt->bindParam(':content', $content, PDO::PARAM_STR);
    $stmt->bindParam(':id_user', $_SESSION['user']['id'], PDO::PARAM_INT);
    $stmt->bindParam(':id_album', $id_album, PDO::PARAM_INT);

    // Exécution de la requête
    $stmt->execute();

    // Retourner un message de succès
    echo "Commentaire ajouté avec succès !";
} catch (PDOException $e) {
    // En cas d'erreur, afficher l'erreur
    echo "Erreur : " . $e->getMessage();
}
?>
