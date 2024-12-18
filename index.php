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

    <main>
        <div class="m-auto w-2/3 text-center items-center p-4">
            <img src="" alt="logo">
            <h1 class="text-3xl font-bold m-auto">
                Faites décoller vos playlists avec Spotifly
            </h1>
        </div>

        <div class="bg-slate-400 shadow-md rounded-sm flex flex-col gap-5 w-fit h-fit p-12 m-auto">
            <p class=""> Inscrivez vous dès maintenant </p>

            <a href="./public/inscription.php">
                <div class="bg-black w-64 p-4 rounded-sm">
                    <p class="text-white font-extrabold text-center">Inscription</p>
                </div>
            </a>


            <p class=""> Déja un compte ? </p>

            <a href="./public/connexion.php" class="bg-black w-64 p-4 rounded-sm">
                <p class="text-white font-extrabold text-center">Connexion</p>
            </a>

        </div>

        

        <?php

        

        if (isset($_GET["error"])) {
            ?>
            <p class="text-center text-red-500"> 
            <?php

            switch ($_GET["error"]) {
                case '1':
                    ?> Erreur : le formulaire est tout pété <?php
                    break;
                case '2':
                    ?> Erreur : vous n'avez pas tout rempli <?php
                    break;
                case '3':
                    ?> Erreur : vous avez mal rempli le formulaire <?php
                    break;
                
                default:
                    break;
            }


        }

        

        ?>

        </p>


    </main>

    <footer>



    </footer>

</body>

</html>