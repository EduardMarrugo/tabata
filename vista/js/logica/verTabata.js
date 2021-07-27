function verTabatasGuardadas() {
    let asd = window.location.href;

    let nombre = asd.substring(asd.search("&nombre=") + 8, asd.search("&preparacion="));
    let preparacion = asd.substring(asd.search("&preparacion=") + 13, asd.search("&actividad="));
    let actividad = asd.substring(asd.search("&actividad=") + 11, asd.search("&descanso="));
    let descanso = asd.substring(asd.search("&descanso=") + 10, asd.search("&series="));
    let series = asd.substring(asd.search("&series=") + 8, asd.search("&rondas="));
    let rondas = asd.substring(asd.search("&rondas=") + 8, asd.search("&idTabata="));


    document.getElementById('list-group-selec').innerHTML += `<tr>
    <td>`+ nombre + `</td>
    <td>`+ preparacion + `</td>
    <td>`+ actividad + `</td>
    <td>`+ descanso + `</td>
    <td>`+ series + `</td>
    <td>`+ rondas + `</td></tr>`;

    

}

verTabatasGuardadas();