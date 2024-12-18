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
    { title: "Guardians of Asgaard", artist: "Amon Amarth", file: "../src/audio/assets/src/audio/Amon_Amarth-Guardians_Of_Asgaard-Twlight_Of_The_Thunder_God.mp3", cover: "../src/images/album/assets/src/images/album/couverture-Twlight_Of_The_Thunder_God-Amon_Amarth.jpg"},
    { title: "Jamming", artist: "Bob Marley", file: "assets/src/audio/Bob_Marley-Exodus-Jamming.mp3", cover: "../src/images/album/assets/src/images/album/assets/src/images/album/couverture-Exodus-Bob_Marley.jpeg" },
    { title: "Three little birds", artist: "Bob Marley", file: "assets/src/audio/Bob_Marley-Exodus-Three_Little_Birds.mp3", cover: "../src/images/album/assets/src/images/album/assets/src/images/album/couverture-Exodus-Bob_Marley.jpeg" },
    { title: "Wainting in vain", artist: "Bob Marley", file: "assets/src/audio/Bob_Marley-Exodus-Waiting_In_Vain.mp3", cover: "../src/images/album/assets/src/images/album/assets/src/images/album/couverture-Exodus-Bob_Marley.jpeg" },
    { title: "Douce", artist: "Clara Yse", file: "assets/src/audio/Clara_Yse-Oceano_Nox-Douce.mp3", cover: "../src/images/album/assets/src/images/album/assets/src/images/album/couverture-Clara_Yse-Oceano_Nox.jpg" },
    { title: "Dancer", artist: "Idles", file: "assets/src/audio/IDLES-Dancer-Tangk.mp3", cover: "../src/images/album/assets/src/images/album/assets/src/audio/IDLES-Dancer-Tangk.mp3" },
    { title: "Manhattan Kaboul", artist: "Renaud", file: "assets/src/audio/Renaud-Boucan_Denfer-Manhattan_Kaboul.mp3", cover: "../src/images/album/assets/src/images/album/assets/src/audio/Renaud-Boucan_Denfer-Manhattan_Kaboul.mp3" },
    { title: "Mistral Gagnant", artist: "Renaud", file: "assets/src/audio/Renaud-Mistral_Gagnant-Mistral_Gagnant.mp3", cover: "../src/images/album/assets/src/images/album/assets/src/audio/Renaud-Mistral_Gagnant-Mistral_Gagnant.mp3" },
    { title: "Toujours debout", artist: "Renaud", file: "assets/src/audio/Renaud-Renaud-Toujours_Debout.mp3", cover: "../src/images/album/assets/src/images/album/assets/src/audio/Renaud-Renaud-Toujours_Debout.mp3" }
    
  ];

  let currentSongIndex = 0;

