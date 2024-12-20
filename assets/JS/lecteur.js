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



function playSong(id) {
    
    // Fait une requête XML pour récupérer des informations d'une autre page sans avoir a y aller directement
    var xmlhttp= new XMLHttpRequest();

    xmlhttp.onreadystatechange=function() {
        // Si le readystate est 4 = DONE, et que le status est 200 = DONE
        if (this.readyState==4 && this.status==200) {
            // Met tout dans l'html
          document.querySelector("#lecteur").innerHTML=this.responseText;
        }
      }

    //   Envoie une requête a livesearch.php 
      xmlhttp.open("GET","../../public/components/lecteur.php?id="+id,true);
      xmlhttp.send();

}


