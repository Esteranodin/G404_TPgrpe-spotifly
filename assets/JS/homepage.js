// Quand tout est chargé

console.log("homepage.js loaded");


document.addEventListener('DOMContentLoaded', () => {
    const content = document.querySelector('content');

    // On ajoute un écouteur d'evènement de clic sur tout le document
    document.addEventListener('click', (event) => {
        // Closest remonte dans le DOM pour trouver la classe album, donc si on appuie sur l'un de ses enfants, il devrait aller chercher la div parente
        const album = event.target.closest('.album');
        // On garde l'event target dans une constante, et on vérifie qu'elle existe avec un if
        if (album) {
            // On récupère le data id
            const albumId = album.getAttribute('data-id');
            // On lance la fonction loadpage avec l'url correspondant a la playlist cliquée
            loadPage(`./components/album.php?id=${albumId}`);
        }
    });
});


/*
Fonction requête AJAX, va récupérer les données de l'URL donnée, et l'injecter dans la div d'id content
 */
async function loadPage(url) {
    try {
        // Error catch
        const response = await fetch(url);
        if (!response.ok) {
            throw new Error(`Erreur lors du chargement : ${response.statusText}`);
        }

        // On transforme la response en texte
        const html = await response.text();

        // POusse la page dans l'historique, pour pouvoir y revenir plus tard
        history.pushState({ page: url }, "", url);

        // On envoie a la div #content
        document.querySelector('.content').innerHTML = html;
    } catch (error) {
        console.error(error);
    }
}

function goBack() {
    // Fonction pour revenir à la page précédente
    window.location.href = '../homepage.php';
}

document.addEventListener("DOMContentLoaded", function() {
    const albumItems = document.querySelectorAll(".album-item");

    albumItems.forEach(item => {
        item.addEventListener("click", function() {
            const albumId = this.getAttribute("data-id");
            loadAlbum(albumId);
        });
    });
});

function loadAlbum(albumId) {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.querySelector("#album-content").innerHTML = this.responseText;
        }
    };
    xmlhttp.open("GET", "../../public/components/album.php?id=" + albumId, true);
    xmlhttp.send();
}