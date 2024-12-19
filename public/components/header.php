
<?php 
session_start();
?>

<header>
    <section class="relative h-[100px] bg-primary-grey-dark flex flex-row font-title">

        <a href="./homepage.php" class="w-[100px] flex-none">
            <img src="../assets/src/images/logo/Spotifly_Logo-sans_fond.png" alt="Logo Spotifly" class=" h-full self-center">
        </a>

        <nav class="max-sm:absolute lg:absolute flex right-2 gap-4 bottom-3.5 p-4 items-center sm:flex-1 lg:w-[75vw] lg:justify-between">

            <!-- Searchbar -->

            <div class="searchbar sm:bg-neutral-black sm:py-2 sm:px-4 rounded-full sm:flex items-center sm:flex-1 lg:flex-none  lg:w-[50vw]">
                <input type="text" placeholder="Recherchez une musique" class="text-neutral-white bg-neutral-black max-sm:hidden sm:flex-1">
                <i class="fas fa-magnifying-glass text-neutral-white text-3xl sm:text-2xl"></i>
            </div>

            <div class="flex gap-4">
                <!-- User profile -->
                <a href="./profil.php?<?= $_SESSION["user"]["id"] ?>">
                <i class="fas fa-user text-neutral-white text-3xl"></i>
                </a>
                <!-- Burger Menu -->
                <a href="">
                <i class="fas fa-bars text-neutral-white text-3xl"></i>
                </a>
            </div>
        </nav>

    </section>
</header>