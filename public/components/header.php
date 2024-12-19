<?php 
session_start();

// Pour chemin absolu
$basePath = rtrim(dirname($_SERVER['PHP_SELF']), '/');
?>

<header>
    <section class="relative h-[100px] bg-primary-grey-dark flex flex-row font-title">
        <!-- Logo -->
        <a href="<?=$basePath?>/homepage.php" class="w-[100px] flex-none">
            <img src="../assets/src/images/logo/Spotifly_Logo-sans_fond.png" alt="Logo Spotifly" class="h-full self-center">
        </a>

        <!-- Navigation -->
        <nav class="max-sm:absolute lg:absolute flex right-2 gap-4 bottom-3.5 p-4 items-center sm:flex-1 lg:w-[75vw] lg:justify-between">
            
            <!-- Searchbar -->
            <div class="relative searchbar sm:bg-neutral-black sm:py-2 sm:px-4 rounded-full sm:flex items-center sm:flex-1 lg:flex-none lg:w-[50vw] shadow-lg">
                <input 
                    type="text" 
                    onkeyup="showResult(this.value)" 
                    placeholder="Recherchez une musique" 
                    class="text-neutral-white bg-neutral-black max-sm:hidden sm:flex-1 focus:outline-none"
                >
                <i class="fas fa-magnifying-glass text-neutral-white text-3xl sm:text-2xl"></i>
                
                <!-- Live Search Results -->
                <div class="livesearch absolute top-full left-0 mt-2 w-full bg-neutral-900 shadow-lg p-4 space-y-4 hidden">
                </div>
            </div>

            <!-- User and Burger Menu -->
            <div class="flex gap-4">
                <a href="./profil.php?<?= $_SESSION["user"]["id"] ?>">
                    <i class="fas fa-user text-neutral-white text-3xl"></i>
                </a>
                <a href="">
                    <i class="fas fa-bars text-neutral-white text-3xl"></i>
                </a>
            </div>
        </nav>
    </section>
</header>
