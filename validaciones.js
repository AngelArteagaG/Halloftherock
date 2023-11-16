window.addEventListener('DOMContentLoaded', function(){
    const nombre = document.getElementById("nombre")
    nombre.addEventListener('input', validarnombre);

});
function validarnombre(event){
    const t = event.data;
    if (!/^[A-ZÑa-zñáéíóúÁÉÍÓÚ'°]+$/.test(t)) {
        Swal.fire({
            icon: "error",
            title: "Error...",
            text: "No aceptamos numeros",
            footer: 'Validacion'
        });
    }
}