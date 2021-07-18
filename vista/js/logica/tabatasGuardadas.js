
// $(document).ready(function () {
//     mostrarTabatasGuardadas()

//     // let idUsuarioGoogle = localStorage.getItem('id')
//     // if (idUsuarioGoogle !== null) {
//     //     $("#nombreUsuario").text(localStorage.getItem('name'))
//     //     $("#imagenPerfil").attr("src", localStorage.getItem('image'))
//     // }

// })

function mostrarTabatasGuardadas() {

    var http = new XMLHttpRequest();
    var url = '/tabata/controlador/accion/act_verTabatasGuardadas.php';


    http.open('POST', url, true);
    console.log(http);

    //Send the proper header information along with the request
    http.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');

    http.onreadystatechange = function () {//Call a function when the state changes.
        if (http.readyState == 4 && http.status == 200) {

            var tabatas = JSON.parse(this.responseText);
            // 
            for (let i = 0; i < tabatas.length; i++) {

                document.getElementById('list-group').innerHTML += 
                "<a href='tabata_selec.php? " 
                + "preparacion=" + tabatas[i].tPreparacion 
                + "&actividad=" + tabatas[i].tActividad 
                + "&descanso=" + tabatas[i].tDescanso 
                + "&series=" + tabatas[i].numSeries 
                + "&rondas=" + tabatas[i].numRondas 
                + "&nombre=" + tabatas[i].nombreTabata 
                + "&idTabata=" + tabatas[i].idTabata 
                + "'"
                + "class='mt-1 list-group-item list-group-item-action flex-column align-items-start'>"
                + "<div class='d-flex w-100 justify-content-between'>"
                + "<h5 class='mb-1'> Nombre tabata: " + tabatas[i].nombreTabata + "</small></div>"
                + "<p class='mb-1'>Preparación: " + tabatas[i].tPreparacion + "</p>"
                + "<p class='mb-1'>Actividad " + tabatas[i].tActividad + "</p>"
                + "<p class='mb-1'>Descanso: " + tabatas[i].tDescanso + "</p>"
                + "<p class='mb-1'>Series: " + tabatas[i].numSeries + "</p>"
                + "<p class='mb-1'>Rondas: " + tabatas[i].numRondas + "</p>"
                + "</a>"
            }

        }
    }
    http.send();

}

mostrarTabatasGuardadas();

