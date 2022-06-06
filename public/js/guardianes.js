document.addEventListener("DOMContentLoaded", () => {

    //const TEMPLATE_GUARDIANES = "<div>{{each(options)}} <div>{{@this.name}}</div>  <div class='row'><div class='col-md-6'><div class='mapa__estrellas'>{{@this.rating}}</div></div> <div class='col-md-6'>{{@this.size}}</li> </ul>{{/each}}</div>";
    const TEMPLATE_GUARDIANES = "{{each(options)}}<div class='mapa__guardianes'><div class='mapa__nombre'>{{@this.name}}</div><div class='row'><div class='col-md-6'><div class='mapa__estrellas'>{{@this.rating}}</div></div><div class='col-md-6'><div class='mapa__size'>{{@this.size}}<img src='imagenes/male.svg'></div></div></div></div>{{/each}}";

    const obtenGuardianes = (obj) => {
        //console.log(obj);
        const listado = Sqrl.Render(TEMPLATE_GUARDIANES, obj)
        //console.log(listado);
        document.getElementById('mapa').innerHTML = listado
        
      }

    fetch("https://jsonblob.com/api/jsonBlob/68f0896f-224a-11ea-b6f9-fda03b8457bd").then(res => {
        
        return res.json();

    }).then(obtenGuardianes);


});