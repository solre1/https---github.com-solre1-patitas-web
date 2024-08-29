formulario.addEventListener("sumbit", (evento) => {
    evento.preventDefault()
    const datos = new FormData(formulario)
    fetch("guardar.php",{
        method: "POST",
        body: datos
}).then(
    cabecera => {
        console.log("ver que tiene: ", cabecera);
        return cabecera.json()
    }
).then(
    datos=> {
        console.log(datos);
        if (datos.respuesta == "ok") {
            confetti()
        }else{
            Swal.fire({
                icon: "error",
                title: "Oops...",
                text: "Something went wrong!",
                footer: '<a href="#">Why do I have this issue?</a>'
              });
        }
    }
)
})
