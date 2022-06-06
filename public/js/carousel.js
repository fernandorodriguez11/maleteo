document.addEventListener("DOMContentLoaded", () => {

    const carousel = (obj) => {
        console.log(obj.criticas[0].comentario);
        const widthArray = obj.criticas.length;
        const tiempo = 2000;
        let posicionActual = 2;
        let $imagen = document.querySelector('#imagen');
        let intervalo; 
        intervalo = setInterval(pasarFoto, tiempo);
       /* var slideIndex = 1;
        showSlides();

function showSlides() {
       var i;
       var slides = document.getElementsByClassName("pruebas");
       for (i = 2; i < slides.length; i++) {
        slides[i].style.display = "none";
        
       }
       slideIndex++;
       if(slideIndex > slides.length) {slideIndex = 1}
       slides[slideIndex-2].style.display = "block";
       setTimeout(showSlides,tiempo);
}
*/
        /**
                 * Funcion que cambia la foto en la siguiente posicion
                 */
            function pasarFoto() {
                if(posicionActual >= widthArray - 1) {
                    posicionActual = 0;
                } else {
                    posicionActual+=1;
                }
                renderizarImagen();
            }

            /**
             * Funcion que cambia la foto en la anterior posicion
             */
            function retrocederFoto() {
                if(posicionActual <= 0) {
                    posicionActual = widthArray- 1;
                } else {
                    posicionActual--;
                }
                renderizarImagen();
            }

            /**
             * Funcion que actualiza la imagen de imagen dependiendo de posicionActual
             */
            function renderizarImagen () {
                
                $imagen.innerHTML = `${obj.criticas[posicionActual].autor} ${obj.criticas[posicionActual].imagen}`;
                document.getElementById("coment").innerHTML=obj.criticas[posicionActual].comentario;
                document.getElementById("img").src = obj.criticas[posicionActual].imagen;
                document.getElementById("autor").innerHTML=obj.criticas[posicionActual].autor;
                document.getElementById("lugar").innerHTML= obj.criticas[posicionActual].lugar;
            }

            renderizarImagen();
    }


    fetch("/pruebas").then(res => {
        
        return res.json();

    }).then(carousel);
    /**
    const IMAGENES =  {
        "criticas": [
          {
            "comentario": "Tras el enorme éxito internacional de su primera colaboración, \"Bailar\", que ganó un galardon en los Premios",
            "autor": "Sergio Garnacho",
            "lugar":"Tetuán, Madrid",
            "imagen": "imagenes/deorro.jpg"
          },
          {
            "comentario": "Tras el enorme éxito internacional de su primera colaboración, \"Bailar\", que ganó un galardon en los Premios",
            "autor": "Sergia Garnacho",
            "lugar":"Tetuán, Madrid",
            "imagen": "imagenes/deorro.jpg"
          },
          {
            "comentario": "Tras el enorme éxito internacional de su primera colaboración, \"Bailar\", que ganó un galardon en los Premios",
            "autor": "Sergi Garnacho",
            "lugar":"Tetuán, Madrid",
            "imagen": "imagenes/deorro.jpg"
          },
          {
            "comentario": "Tras el enorme éxito internacional de su primera colaboración, \"Bailar\", que ganó un galardon en los Premios",
            "autor": "Serg Garnacho",
            "lugar":"Tetuán, Madrid",
            "imagen": "imagenes/deorro.jpg"
          },
          {
            "comentario": "Tras el enorme éxito internacional de su primera colaboración, \"Bailar\", que ganó un galardon en los Premios",
            "autor": "Ser Garnacho",
            "lugar":"Tetuán, Madrid",
            "imagen": "imagenes/deorro.jpg"
          }
        ]
      };
                  //const IMAGENES = [obj.criticas[0].autor];
                  const TIEMPO_INTERVALO_MILESIMAS_SEG = 1000;
                  let posicionActual = 0;
                  let $botonRetroceder = document.querySelector('#retroceder');
                  let $botonAvanzar = document.querySelector('#avanzar');
                  let $imagen = document.querySelector('#imagen');
                  //let $botonPlay = document.querySelector('#play');
                  //let $botonStop = document.querySelector('#stop');
                  let intervalo = setInterval(pasarFoto, 6000);
                  // Funciones
      */
                  /**
                   * Funcion que cambia la foto en la siguiente posicion
                   
                  function pasarFoto() {
                      if(posicionActual >= IMAGENES.criticas.length - 1) {
                          posicionActual = 0;
                      } else {
                          posicionActual++;
                      }
                      renderizarImagen();
                  }*/
      
                  /**
                   * Funcion que cambia la foto en la anterior posicion
                   
                  function retrocederFoto() {
                      if(posicionActual <= 0) {
                          posicionActual = IMAGENES.criticas.length - 1;
                      } else {
                          posicionActual--;
                      }
                      renderizarImagen();
                  }*/
      
                  /**
                   * Funcion que actualiza la imagen de imagen dependiendo de posicionActual
                   
                  function renderizarImagen () {
                      
                      $imagen.innerHTML = `${IMAGENES.criticas[posicionActual].autor} ${IMAGENES.criticas[posicionActual].comentario}`;
                      
                  }*/
      
                  /**
                   * Activa el autoplay de la imagen
                   
                  function playIntervalo() {
                      intervalo = setInterval(pasarFoto, TIEMPO_INTERVALO_MILESIMAS_SEG);
                      // Desactivamos los botones de control
                      $botonAvanzar.setAttribute('disabled', true);
                      $botonRetroceder.setAttribute('disabled', true);
                      $botonPlay.setAttribute('disabled', true);
                      $botonStop.removeAttribute('disabled');
      
                  }*/
      
                  /**
                   * Para el autoplay de la imagen
                   
                  function stopIntervalo() {
                      clearInterval(intervalo);
                      // Activamos los botones de control
                      $botonAvanzar.removeAttribute('disabled');
                      $botonRetroceder.removeAttribute('disabled');
                      $botonPlay.removeAttribute('disabled');
                      $botonStop.setAttribute('disabled', true);
                  }*/
      
                  // Eventos
                  //$botonAvanzar.addEventListener('click', pasarFoto);
                  //$botonRetroceder.addEventListener('click', retrocederFoto);
                  //$botonPlay.addEventListener('click', playIntervalo);
                  //$botonStop.addEventListener('click', stopIntervalo);
                  // Iniciar
                  //renderizarImagen();

});