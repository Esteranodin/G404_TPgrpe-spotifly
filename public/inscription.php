<?php



require_once("./components/htmlstart.php");

?>



<body>

    <header>

    </header>
    <main>

        <h2>Connexion</h2>

        <div class="bg-slate-300 p-16 rounded-sm ">
            <form action="./process/process_inscription.php" method="post" class="flex flex-col gap-4">

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


                <input type="submit" value="S'inscrire" class="bg-black text-white p-4 cursor-pointer"/>

            </form>
        </div>

    </main>
    <footer>

    </footer>





</body>

</html>