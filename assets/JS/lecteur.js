// window.onload = function () {
//     const audio = document.querySelector('#audio');

//     // Exemple de mise en pause au clic d'un bouton
//     document.querySelector('#pauseBtn').addEventListener('click', function () {
//         audio.pause();
//     });

//     // Exemple de lecture au clic d'un bouton
//     document.querySelector('#playBtn').addEventListener('click', function () {
//         audio.play();
//     });
// };

// function playSong(id) {
//   // Store the current song ID in the session
//   var storeSongId = new XMLHttpRequest();
//   storeSongId.open("POST", "../../process/store_song_id.php", true);
//   storeSongId.setRequestHeader(
//     "Content-Type",
//     "application/x-www-form-urlencoded"
//   );
//   storeSongId.send("songId=" + id);

//   // // Fait une requête XML pour récupérer des informations d'une autre page sans avoir a y aller directement
//   // var xmlhttp = new XMLHttpRequest();

//   // xmlhttp.onreadystatechange = function () {
//   //   // Si le readystate est 4 = DONE, et que le status est 200 = DONE
//   //   if (this.readyState == 4 && this.status == 200) {
//   //     // Met tout dans l'html
//   //     document.querySelector("#lecteur").innerHTML = this.responseText;
//   //   }
//   // };

//   // // Envoie une requête a lecteur.php
//   // xmlhttp.open("GET", "../../public/components/lecteur.php?id=" + id, true);
//   // xmlhttp.send();
// }


function playSong(id) {
  // Store the current song ID in the session
  var storeSongId = new XMLHttpRequest();
  storeSongId.open("POST", "../../public/components/store_song_id.php", true);
  storeSongId.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
  storeSongId.send("songId=" + id);

  // Update the player with the new song
  storeSongId.onreadystatechange = function () {
      if (storeSongId.readyState == 4 && storeSongId.status == 200) {
          var xmlhttp = new XMLHttpRequest();
          xmlhttp.onreadystatechange = function () {
              if (this.readyState == 4 && this.status == 200) {
                  document.querySelector("#lecteur").innerHTML = this.responseText;
              }
          };
          xmlhttp.open("GET", "../../public/components/lecteur.php", true);
          xmlhttp.send();
      }
  };
}