window.onload = function () {
    const audio = document.querySelector('#audio');

    // Exemple de mise en pause au clic d'un bouton
    document.querySelector('#pauseBtn').addEventListener('click', function () {
        audio.pause();
    });

    // Exemple de lecture au clic d'un bouton
    document.querySelector('#playBtn').addEventListener('click', function () {
        audio.play();
    });
};