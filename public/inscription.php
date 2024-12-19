<?php



require_once("./components/htmlstart.php");

?>



<body>

    <header>

    </header>
    <main>

        <h2 class="text-2xl font-bold text-center my-16">inscription</h2>

        <div class="bg-slate-300 p-16 rounded-sm ">
            <form action="../process/process_inscription.php" method="post" class="flex flex-col gap-4">

                <div>
                    <label for="username">Nom d'utilisateur :</label>
                    <input type="text" id="username" name="username" required />
                </div>

                <div>
                    <label for="mail">E-mail : </label>
                    <input type="email" id="mail" name="mail" required />
                </div>

                <div>
                    <label for="password">Password (8 caractères minimum) :</label>
                    <input type="password" id="password" name="password" minlength="8" required />
                </div>


                <input type="submit" value="S'inscrire" class="bg-black text-white p-4 cursor-pointer" />

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