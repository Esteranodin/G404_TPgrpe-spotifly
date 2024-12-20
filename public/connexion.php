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

        <h2 class="text-2xl text-neutral-white font-bold text-center my-16">Connexion Spotifly</h2>

        <div class="flex p-16 font-semibold text-neutral-white rounded-sm ">
            <form action="../process/process_connexion.php" method="post" class="flex flex-col gap-8">

                <div class="flex gap-4">
                    <label for="username">Nom d'utilisateur :</label>
                    <input class="rounded-xl pl-2 text-primary-grey-dark" type="text" id="username" name="username" required />
                </div>

                <div class="flex gap-4">
                    <label for="password">Password (8 caractères minimum) :</label>
                    <input class="rounded-xl pl-2 text-primary-grey-dark" type="password" id="password" name="password" minlength="8" required />
                </div>


                <input  type="submit" value="Se connecter" class="bg-primary-accent flex h-fit text-white px-2 py-4 cursor-pointer rounded-xl"/>

            </form>
        </div>

    </main>
    <footer>

    </footer>





</body>

</html>