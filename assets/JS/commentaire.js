console.log("aaa")

function envoyerCommentaire(element){

    const input = document.getElementById("content").value
    const id_album = document.getElementById("id_album").value
console.log(input);
console.log(id_album);




const req = new XMLHttpRequest();
    req.open("GET", "../../process/process_commentaire.php?id_album=" + id_album + "&content=" + input);
    req.send();
}