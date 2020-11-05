
function getxhr() {
    try {
        xhr = new XMLHttpRequest();
    } catch(e){
        try {
            xhr = new ActiveXObject("Microsoft.XMLHTTP");
        } catch(e1){
            try {
                xhr = new XMLHttpRequest("Msxml2.XMLHTTP");
            } catch(e2){
                alert("AJAX non supporté");
            }
        }
    }
    return xhr;
}

function getUsers() {
    xhr = getxhr();
    xhr.open("GET", "listeUtilisateurs.php");
    xhr.send();
    xhr.onreadystatechange = function() {
        if (xhr.readyState == 4 && (xhr.status == 200 || xhr.status == 0)) {
            alert(xhr.responseText);
            document.getElementById("LesMessages").innerHTML += xhr.responseText;
        }
    };
}
