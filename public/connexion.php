<?php

require_once("./components/htmlstart.php");

?>



<body>

    <header>

    </header>
    <main>

        <h2 class="text-2xl font-bold text-center my-16">Connexion Spotifly</h2>

        <div class="bg-primary-accent p-16 rounded-sm ">
            <form action="../process/process_connexion.php" method="post" class="flex flex-col gap-4">

                <div>
                    <label for="username">Nom d'utilisateur :</label>
                    <input class='rounded-xl' type="text" id="username" name="username" required />
                </div>

                <div>
                    <label for="password">Password (8 caractères minimum) :</label>
                    <input class='rounded-xl' type="password" id="password" name="password" minlength="8" required />
                </div>


                <input  type="submit" value="Se connecter" class="bg-black text-white p-4 cursor-pointer rounded-xl"/>

            </form>
        </div>

    </main>
    <footer>

    </footer>





</body>

</html>