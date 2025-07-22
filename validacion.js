document.getElementById("formReserva").addEventListener("submit", function(event) {
    const nombre = document.getElementById("nombre").value;
    const fecha = document.getElementById("fecha").value;
    const personas = document.getElementById("personas").value;
    const clave = document.getElementById("clave").value;

    if(!nombre || !fecha || !personas || !clave) {
        alert("Por favor, complete todos los campos.");
        event.preventDefault();
    }
});