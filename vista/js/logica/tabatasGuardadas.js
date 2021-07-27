
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

    //Send the proper header information along with the request
    http.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');

    http.onreadystatechange = function () {//Call a function when the state changes.
        if (http.readyState == 4 && http.status == 200) {

            var tabatas = JSON.parse(this.responseText);
            console.log(tabatas);
            // 
            for (let i = 0; i < tabatas.length; i++) {
                document.getElementById('list-group').innerHTML += `<tr>
                <td>`+ tabatas[i].idTabata + `</td>
                <td>`+ tabatas[i].nombreTabata + `</td>
                <td>`+ tabatas[i].tPreparacion + `</td>
                <td>`+ tabatas[i].tActividad + `</td>
                <td>`+ tabatas[i].tDescanso + `</td>
                <td>`+ tabatas[i].numSeries + `</td>
                <td>`+ tabatas[i].numRondas + `</td>
                <td>
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fas fa-chevron-down"></i>
                        </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                    <li><a class="dropdown-item" href='tabata_selec.php?&nombre=`+ tabatas[i].nombreTabata + `&preparacion=` + tabatas[i].tPreparacion + `&actividad=` + tabatas[i].tActividad + `&descanso=` + tabatas[i].tDescanso + `&series=` + tabatas[i].numSeries + `&rondas=` + tabatas[i].numRondas + `&idTabata=` + tabatas[i].idTabata + `'>Ver</a></li>

                    <li><a class="edit dropdown-item" data-bs-toggle="modal" data-bs-target="#exampleModal" href="#">
                    Editar
                    </a></li>
                    
                    <li><a class="dropdown-item" href="#">Eliminar</a></li>
                    </ul>
                    </div>
                </td>
                
                
            </tr>`
                // document.getElementById('list-group').innerHTML +=
                //     "<a href='tabata_selec.php? "
                //     + "preparacion=" + tabatas[i].tPreparacion
                //     + "&actividad=" + tabatas[i].tActividad
                //     + "&descanso=" + tabatas[i].tDescanso
                //     + "&series=" + tabatas[i].numSeries
                //     + "&rondas=" + tabatas[i].numRondas
                //     + "&nombre=" + tabatas[i].nombreTabata
                //     + "&idTabata=" + tabatas[i].idTabata
                //     + "'"
                //     + "class='mt-1 list-group-item list-group-item-action flex-column align-items-start'>"
                //     + "<div class='d-flex w-100 justify-content-between'>"
                //     + "<h5 class='mb-1'> Nombre tabata: " + tabatas[i].nombreTabata + "</small></div>"
                //     + "<p class='mb-1'>Preparación: " + tabatas[i].tPreparacion + "</p>"
                //     + "<p class='mb-1'>Actividad " + tabatas[i].tActividad + "</p>"
                //     + "<p class='mb-1'>Descanso: " + tabatas[i].tDescanso + "</p>"
                //     + "<p class='mb-1'>Series: " + tabatas[i].numSeries + "</p>"
                //     + "<p class='mb-1'>Rondas: " + tabatas[i].numRondas + "</p>"
                //     + "</a>"
            }

            $('.edit').click(function(e){
                var attrs = e.target.parentNode.parentNode.parentNode.parentNode.parentNode;
                $('#idTabata').val(attrs.childNodes[1].innerHTML);
                $('#nombreTabata').val(attrs.childNodes[3].innerHTML);
                $('#tPreparacion').val(attrs.childNodes[5].innerHTML);
                $('#tActividad').val(attrs.childNodes[7].innerHTML);
                $('#tDescanso').val(attrs.childNodes[9].innerHTML);
                $('#numSeries').val(attrs.childNodes[11].innerHTML);
                $('#numRondas').val(attrs.childNodes[13].innerHTML);
            });

        }
    }
    http.send();

}



mostrarTabatasGuardadas();