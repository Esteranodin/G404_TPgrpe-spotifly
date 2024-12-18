<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./assets/css/output.css">
</head>

<body>
    <header>

    </header>

    <h1>
        Faites décoller vos playlists avec Spotifly
    </h1>
    <h2>Connexion</h2>

    <form action="./process/process_connexion.php" method="post">

       


            <div>
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" />
            </div>

            <div>
                <label for="pass">Password (8 characters minimum):</label>
                <input type="password" id="pass" name="password" minlength="8" required />
            </div>


            <input type="submit" value="Se connecter" />


        </form>


        <h2>Inscription</h2>
        <form action="./process/process_inscription.php" method="post">


            <div>
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" />
            </div>

            <div>
                <label for="mail">Adresse mail</label>
                <input type="email" name="mail" id="mail">
            </div>

            <div>
                <label for="mdp">Password (8 characters minimum):</label>
                <input type="password" id="mdp" name="mdp" minlength="8" required />
            </div>



            <input type="submit" value="S'inscrire">


        </form>

        <footer>

        </footer>

</body>

</html>