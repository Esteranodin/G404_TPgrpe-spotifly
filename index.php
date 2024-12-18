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
        <section class="relative h-[100px] bg-primary-grey-dark flex font-title">
            <img src="./assets/src/images/logo/Spotifly_Logo-sans_fond.png" alt="Logo Spotifly" class=" h-[120%] self-center">
            <nav class="absolute flex right-2 gap-4 bottom-3.5">
                <a href="./public/connexion.php" class="text-neutral-white self-center">Connexion</a>
                <a href="./public/inscription.php" class="text-primary-grey-dark border-neutral-white border-1 bg-neutral-white rounded-2xl p-2 px-6">S'inscrire</a>
            </nav>
        </section>
    </header>

    <main>
        <div class="container font-title flex ">

            <section class=" bg-neutral-black flex flex-col self-center">

                <div class="rounded-full border-primary-grey"></div>

                <img src="./assets/src/images/logo/Spotifly_Logo-sans_fond.png" alt="Logo Spotifly" class="w-[80%] item-center">

                <div class="m-auto w-2/3 text-center items-center p-4">
                    <h1 class="text-3xl text-neutral-white font-bold m-auto">
                        Faites décoller vos playlists avec Spoti<span class="text-primary-accent">fly</span>
                    </h1>
                </div>

                <div class="bg-primary-accent shadow-md rounded-sm flex flex-col gap-5 w-fit h-fit p-12 m-auto">
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

            </section>
        </div>
    </main>

    <footer>



    </footer>

</body>

</html>