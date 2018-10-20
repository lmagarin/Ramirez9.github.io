/**
 * Crear unas cuantas ventanas a través de un botón y que se vean desplazadas.
 * 
 * @author Francisco Ramírez 
 */

 {

    /**
     * Las declaramos en -20 para que su primer valor al sumarles sea 0
     */


    //Creamos el contenido de la segunda ventana
    contenido = `
    <!DOCTYPE html>
    <html lang=es>
    <head> 
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ventana de prueba</title>
        <meta name="keywords" content="HTML,CSS,XML,JavaScript">
        <meta name="author" content="Francisco Ramírez Ruiz">
        
        </head>
    <body>
    <p>Se han utilizado las propiedades: </p>
        <ul>
        <li>height = 200</li>
        <li>width= 300</li>
        </ul>
        <noscript><h1>Se requiere javascript</h1></noscript>
        </body>
    </html>`;
    /**
     * 
     * Cogemos el id del botón y llamamos al método que abrirá una ventana nueva.
     */
    function init(){

        let boton = document.getElementById("abrir");

        boton.addEventListener("click", abrirVentana);

    }

    let abrirVentana = function(){
        let top = -10;
        let left = -10;

        for (let i = 0 ; i < 5  ; i++) {
            //Abrimos una ventana con esas características
            let ventana = window.open("","","top=" + (top +=10) +",left="+ (left +=10)+ ",height=200,width=300");
            //Escribimos su contenido
            ventana.document.write(contenido);
            ventana.document.close();
            //Cerramos la ventana
        }

        top = 0;
        left = 0;
    }
    window.addEventListener("load", init);
 }


 