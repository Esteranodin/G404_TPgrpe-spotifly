
function envoyerCommentaire(element){

    const input = document.getElementById("content").value
    const id_album = document.getElementById("id_album").value



const req = new XMLHttpRequest();
    req.open("GET", "../../process/process_commentaire.php?id_album=" + id_album + "&content=" + input);
    req.send();
}