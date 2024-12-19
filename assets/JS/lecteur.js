const audio = document.querySelector("#audio");
const playPauseButton = document.querySelector("#playPause");
const prevButton = document.querySelector("#prev");
const nextButton = document.querySelector("#next");
const progressBar = document.querySelector("#progress");
const currentTimeDisplay = document.querySelector("#current-time");
const durationDisplay = document.querySelector("#duration");
const albumCover = document.querySelector("#album-cover");
const songTitle = document.querySelector("#song-title");
const songArtist = document.querySelector("#song-artist");

const playlist = [
    { 
        title: "Guardians of Asgaard", 
        artist: "Amon Amarth", 
        file: "assets/src/audio/Amon_Amarth-Guardians_Of_Asgaard-Twlight_Of_The_Thunder_God.mp3", 
        cover: "assets/src/images/album/couverture-Twlight_Of_The_Thunder_God-Amon_Amarth.jpg"
    },
    { 
        title: "Jamming", 
        artist: "Bob Marley", 
        file: "assets/src/audio/Bob_Marley-Exodus-Jamming.mp3", 
        cover: "assets/src/images/album/couverture-Exodus-Bob_Marley.jpeg" 
    },
    { 
        title: "Three little birds", 
        artist: "Bob Marley", 
        file: "assets/src/audio/Bob_Marley-Exodus-Three_Little_Birds.mp3", 
        cover: "assets/src/images/album/couverture-Exodus-Bob_Marley.jpeg" 
    },
    { 
        title: "Waiting in vain", 
        artist: "Bob Marley", 
        file: "assets/src/audio/Bob_Marley-Exodus-Waiting_In_Vain.mp3", 
        cover: "assets/src/images/album/couverture-Exodus-Bob_Marley.jpeg" 
    },
    { 
        title: "Douce", 
        artist: "Clara Yse", 
        file: "assets/src/audio/Clara_Yse-Oceano_Nox-Douce.mp3", 
        cover: "assets/src/images/album/couverture-Clara_Yse-Oceano_Nox.jpg" 
    },
    { 
        title: "Dancer", 
        artist: "Idles", 
        file: "assets/src/audio/IDLES-Dancer-Tangk.mp3", 
        cover: "assets/src/images/album/couverture-IDLES-Dancer-Tangk.jpg" 
    },
    { 
        title: "Manhattan Kaboul", 
        artist: "Renaud", 
        file: "assets/src/audio/Renaud-Boucan_Denfer-Manhattan_Kaboul.mp3", 
        cover: "assets/src/images/album/couverture-Renaud-Manhattan_Kaboul.jpg" 
    },
    { 
        title: "Mistral Gagnant", 
        artist: "Renaud", 
        file: "assets/src/audio/Renaud-Mistral_Gagnant-Mistral_Gagnant.mp3", 
        cover: "assets/src/images/album/couverture-Renaud-Mistral_Gagnant.jpg" 
    },
    { 
        title: "Toujours debout", 
        artist: "Renaud", 
        file: "assets/src/audio/Renaud-Renaud-Toujours_Debout.mp3", 
        cover: "assets/src/images/album/couverture-Renaud-Toujours_Debout.jpg" 
    }
];

let currentSongIndex = 0;

// Fonction pour charger une chanson dans le lecteur
function loadSong(song) {
    console.log(`Chargement de la chanson: ${song.title} par ${song.artist}`);
    audio.src = song.file;
    albumCover.src = song.cover;
    songTitle.innerText = song.title;
    songArtist.innerText = song.artist;
}

// Fonction pour jouer ou mettre en pause la chanson
function togglePlayPause() {
    if (audio.paused) {
        audio.play();
        playPauseButton.innerText = "⏸️"; // Modifier le texte du bouton pour indiquer la pause
        console.log('Lecture de la chanson');
    } else {
        audio.pause();
        playPauseButton.innerText = "▶"; // Modifier le texte du bouton pour indiquer la lecture
        console.log('Pause de la chanson');
    }
}

// Charger la première chanson de la playlist
loadSong(playlist[currentSongIndex]);

// Ajouter un gestionnaire d'événements pour l'audio
audio.addEventListener('canplay', () => {
    console.log('Le fichier audio est prêt à être joué');
});

audio.addEventListener('play', () => {
    console.log('La lecture de l\'audio a commencé');
});

// Event listener pour le bouton play/pause
playPauseButton.addEventListener('click', togglePlayPause);

// Mise à jour de la barre de progression et du temps de lecture
audio.addEventListener('timeupdate', () => {
    const progress = (audio.currentTime / audio.duration) * 100;
    progressBar.value = progress;

    // Mettre à jour le temps écoulé
    const currentTime = formatTime(audio.currentTime);
    currentTimeDisplay.innerText = currentTime;

    // Mettre à jour la durée totale
    const duration = formatTime(audio.duration);
    durationDisplay.innerText = duration;
});

// Format du temps en minutes:secondes
function formatTime(seconds) {
    const minutes = Math.floor(seconds / 60);
    const remainingSeconds = Math.floor(seconds % 60);
    return `${minutes}:${remainingSeconds < 10 ? '0' + remainingSeconds : remainingSeconds}`;
}

// Event listener pour le bouton "suivant"
nextButton.addEventListener('click', () => {
    currentSongIndex = (currentSongIndex + 1) % playlist.length; // Passer à la chanson suivante
    loadSong(playlist[currentSongIndex]);
    audio.play();
    console.log(`Chanson suivante: ${playlist[currentSongIndex].title}`);
});

// Event listener pour le bouton "précédent"
prevButton.addEventListener('click', () => {
    currentSongIndex = (currentSongIndex - 1 + playlist.length) % playlist.length; // Passer à la chanson précédente
    loadSong(playlist[currentSongIndex]);
    audio.play();
    console.log(`Chanson précédente: ${playlist[currentSongIndex].title}`);
});
