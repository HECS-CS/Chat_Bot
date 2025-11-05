function enviar() {
    let mensaj = document.getElementById('mensaje').value;
    
    fetch("buscar.php", {
        method: 'POST',
        headers: {'Content-Type': 'application/x-www-form-urlencoded'},
        body: 'mensaje=' + encodeURIComponent(mensaj)
    })
    .then(res => res.text())
    .then(rr => {
        document.getElementById('respuesta').innerHTML = "<b>Chat:</b> " + rr;
    });
}
