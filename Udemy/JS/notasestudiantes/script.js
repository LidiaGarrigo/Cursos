function resultado(){

    let mates = Number (document.getElementById("mates").value);
    let fisica = Number (document.getElementById("fisica").value);
    let geografia = Number (document.getElementById("geografia").value);
    let ingles = Number (document.getElementById("ingles").value);

    let total = 40;

    let notaObtenida = mates + fisica + geografia + ingles;
    let porcentaje = (notaObtenida / total) * 100;

    let calificacion = "";
    
    document.getElementById("porcentaje").innerHTML = porcentaje + "%";

    if (porcentaje >= 90) {
        calificacion = "Sobresaliente";
    } else if (porcentaje < 90 && porcentaje >= 70) {
        calificacion = "Notable";
    } else if (porcentaje < 70 && porcentaje >= 60) {
        calificacion = "Bien";
    } else if (porcentaje < 60 && porcentaje >= 50) {
        calificacion = "Suficiente";
    } else if (porcentaje < 50) {
        calificacion = "Insuficiente";
    }

    document.getElementById("calificacion").innerHTML = calificacion;
    
    if (porcentaje < 50) {
        document.getElementById("pasar").innerHTML = "¡Lo siento! ¡Has suspendido!";
    } else {
        document.getElementById("pasar").innerHTML = "¡Felicidades! ¡Has aprobado!";
    }

}