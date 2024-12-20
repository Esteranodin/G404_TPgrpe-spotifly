<?php



require_once("./components/htmlstart.php");

?>



<body class = "bg-neutral-black">

<header>
        <section class = "relative">
            <div class="h-[100px] bg-primary-grey-dark flex font-title overflow-hidden ">
                <img src="../assets/src/images/logo/Spotifly_Logo-sans_fond.png" alt="Logo Spotifly" class=" h-[120%] self-center">
                <nav dir ="rtl" class="flex gap-4 p-4  pl-10 sm:pl-72 w-full items-center">
                    <a href="../index.php" class="text-neutral-white ml-auto absolute self-end pb-2 ">Accueil |</a>
                </nav>
            </div>
        </section>
    </header>

    <main>

        <h2 class="text-2xl text-neutral-white font-bold text-center my-16">Remplir le formulaire suivant pour vous inscrire</h2>

        <div class="flex p-16 font-semibold text-neutral-white rounded-sm ">
            <form action="../process/process_inscription.php" method="post" class="flex flex-col gap-8">

            <div class="flex gap-4">
                    <label for="username">Nom d'utilisateur :</label>
                    <input class="rounded-xl pl-2 text-primary-grey-dark" type="text" id="username" name="username" required />
                </div>

                <div class="flex gap-4">
                    <label for="mail">E-mail : </label>
                    <input class="rounded-xl pl-2 text-primary-grey-dark" type="email" id="mail" name="mail" required />
                </div>

                <div class="flex gap-4">
                    <label for="password">Password (8 caractères minimum) :</label>
                    <input class="rounded-xl pl-2 text-primary-grey-dark" type="password" id="password" name="password" minlength="8" required />
                </div>


                <input type="submit" value="S'inscrire" class="bg-primary-accent flex h-fit text-white px-2 py-4 cursor-pointer rounded-xl" />

            </form>

            <!-- Erreurs -->

            <?php
            if (isset($_GET["error"])) {
            ?>
                <p class="text-center text-red-500">

                    <?php

                switch ($_GET["error"]) {
                    case 'invalidRequest':
                        ?> Erreur : requête invalide (mauvaise méthode HTTP) <?php
                        break;
                    case 'removedInput':
                        ?> Erreur : un ou plusieurs inputs sont manquants <?php
                        break;
                    case 'emptyInputs':
                        ?> Erreur : vous n'avez pas tout rempli <?php
                        break;
                    case 'tooLong':
                        ?> Erreur : l'username ou le mot de passe est trop long <?php
                        break;
                    case 'incorrectMail':
                        ?> Erreur : e-mail incorrect <?php
                        break;
                    case 'takenUsername':
                        ?> Erreur : ce nom d'utilisateur est déjà pris <?php
                        break;
                    case 'takenMail':
                        ?> Erreur : cet e-mail est déjà utilisé <?php
                        break;
                    default:
                        break; 
                }}
            ?>
        </div>

    </main>
    <footer>

    </footer>





</body>

</html>