const tiempoLogos = 3000;
const tiempoTablas = 15000;
const tiempoBruja = 55000;
const logoQuiniela = document.getElementById("logo-quiniela");
const logoQuinigol = document.getElementById("logo-quinigol");
const clasificacionPrimera = document.getElementById("clasificacion-primera");
const resultadoQuiniela = document.getElementById("resultado-quiniela");
const resultadoQuinigol = document.getElementById("resultado-quinigol");
const proximoQuiniela = document.getElementById("proximo-quiniela");
const proximoQuinigol = document.getElementById("proximo-quinigol");
var estadoLogo = true;
var estados = [false, false, true];

mostrar(logoQuinigol);
mostrar(proximoQuiniela);
mostrar(proximoQuinigol);

setInterval(function () {
    if (estadoLogo) {
        ocultar(logoQuinigol);
        mostrar(logoQuiniela);
        estadoLogo = false;
    } else {
        ocultar(logoQuiniela);
        mostrar(logoQuinigol);
        estadoLogo = true;
    }
}, tiempoLogos);

setInterval(function () {
    for (i = 0; i < estados.length; i++) {
        if (estados[0]) {
            ocultar(proximoQuiniela); ocultar(proximoQuinigol);
            mostrar(clasificacionPrimera);
            estados[1] = true; estados[0] = false; break;
        }
        if (estados[1]) {
            ocultar(clasificacionPrimera);
            mostrar(resultadoQuiniela); mostrar(resultadoQuinigol);
            estados[2] = true; estados[1] = false; break;
        }
        if (estados[2]) {
            ocultar(resultadoQuiniela); ocultar(resultadoQuinigol);
            mostrar(proximoQuiniela); mostrar(proximoQuinigol);
            estados[0] = true; estados[2] = false; break;
        }
    }

}, tiempoTablas);

function ocultar(elem) {
    if (elem) {
        //elem.classList.add('fade-out');
        elem.style.display = "none";
    }
    return elem;
}

function mostrar(elem) {
    if (elem) {
        elem.style.display = "block";
        elem.classList.add('fade-in');
    }
    return elem;
}

$(document).ready(function () {
    setInterval(function () {
        $('#bruja').rotate3Di('flip', 250, { direction: 'clockwise' });
        $('#bruja').rotate3Di('unflip', 500, {});
    }, tiempoBruja);

});