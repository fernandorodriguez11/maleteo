document.addEventListener("DOMContentLoaded", () => {

    const formulario = document.getElementById("formulario");

    const exito = exito => {
        
        if(exito === "correcto"){

            document.getElementById("visible").classList.add("formulario__ocultar");
            document.getElementById("oculto").classList.add("formulario__ver");

        }else{
            document.getElementById("oculto").classList.add("formulario__ver");
            let error = document.getElementById("oculto");
            error.innerHTML = "";
            error.innerText = "Ha habido un error";
        }
        
    }

    formulario.addEventListener("submit",event => {
        event.preventDefault();

        body = new FormData(event.target);

        url = event.target.getAttribute("action");
        method = event.target.getAttribute("method");

        fetch(url,{body, method}).then(obj => {
            return obj.json();

        }).then(exito);
        
    });


});