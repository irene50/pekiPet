window.onload = function() {
    document.primero.onsubmit = enviar;
}

function enviar() {
    var vblEnviar = true;
    var vContrasenaV = document.primero.anterior.value.trim();
    var vContrasenaN = document.primero.nueva.value.trim();
    var vContrasenaN2 = document.primero.nueva2.value.trim();
    
    var verContrasena = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)([a-zA-Z\d@$!%*?&]|[^ ]){8,15}$/;
    
    if (!verContrasena.test(vContrasenaV)) {
        vblEnviar = false;
        document.primero.anterior.value = "";
        document.primero.anterior.placeholder = "Al menos mayuscula, minuscula y digito. Entre 8 y 15.";
		document.primero.anterior.focus();
    }
    if (!verContrasena.test(vContrasenaN)) {
        vblEnviar = false;
        document.primero.nueva.value = "";
        document.primero.nueva.placeholder = "Al menos mayuscula, minuscula y digito. Entre 8 y 15.";
		document.primero.nueva.focus();
    }
    if (!verContrasena.test(vContrasenaN2)) {
        vblEnviar = false;
        document.primero.nueva2.value = "";
        document.primero.nueva2.placeholder = "Al menos mayuscula, minuscula y digito. Entre 8 y 15.";
		document.primero.nueva2.focus();
    }
    return vblEnviar;
}