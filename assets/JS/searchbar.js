function showResult(texte) {
    if (texte.length == 0) {
        document.querySelector(".livesearch").innerHTML="";
        document.querySelector(".livesearch").style.border="0px";
        document.querySelector(".livesearch").classList.add('hidden');
        return;
    }

    document.querySelector(".livesearch").classList.remove('hidden');



    // Fait une requête XML pour récupérer des informations d'une autre page sans avoir a y aller directement
    var xmlhttp= new XMLHttpRequest();

    xmlhttp.onreadystatechange=function() {
        // Si le readystate est 4 = DONE, et que le status est 200 = DONE
        if (this.readyState==4 && this.status==200) {
            // Met tout dans l'html
          document.querySelector(".livesearch").innerHTML=this.responseText;
          document.querySelector(".livesearch").style.border="1px solid #A5ACB2";

        }
      }
    //   Envoie une requête a livesearch.php 
      xmlhttp.open("GET","../process/livesearch.php?q="+texte,true);
      xmlhttp.send();

}


