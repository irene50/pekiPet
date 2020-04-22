window.onload = function() {
    document.primero.onsubmit = enviar;
}

function enviar() {
    var vblEnviar = true;
    var vNombre = document.primero.nombre.value.trim();
    var vApellido1 = document.primero.apellido1.value.trim();
    var vApellido2 = document.primero.apellido2.value.trim();
    var vUsuario = document.primero.usuario.value.trim();
    var vContrasena = document.primero.contrasena.value.trim();
    var vEmail = document.primero.email.value.trim();
    var vTelefono = document.primero.telefono.value.trim();
    
    var verNombre = /^[a-z]([a-z]|\s|\-)+[a-z]$/i;
    var verApellido = /^[a-z]([a-z]|\s|\-)+[a-z]$/i;
    var verUsuario = /^[a-z](\w|\_)+[\w|\.]$/i;
    var verContrasena = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)([a-zA-Z\d@$!%*?&]|[^ ]){8,15}$/;
    var verEmail = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.[a-z]{2,4})+$/i;
    var verTelefono = /^[679]\d{8}$/;
    
    if (!verNombre.test(vNombre)){
        vblEnviar = false;
        document.primero.nombre.value = "";
		document.primero.nombre.placeholder = "ERROR!";
		document.primero.nombre.focus();
	}
    if (!verApellido.test(vApellido1)) {
        vblEnviar = false;
        document.primero.apellido1.value = "";
        document.primero.apellido1.placeholder = "ERROR!";
		document.primero.apellido1.focus();
    }
    if (!verApellido.test(vApellido2) && vApellido2 != "") {
        vblEnviar = false;
        document.primero.apellido2.value = "";
        document.primero.apellido2.placeholder = "ERROR!";
		document.primero.apellido2.focus();
    }
    if (!verUsuario.test(vUsuario)) {
        vblEnviar = false;
        document.primero.usuario.value = "";
        document.primero.usuario.placeholder = "ERROR!";
		document.primero.usuario.focus();
    }
    if (!verContrasena.test(vContrasena)) {
        vblEnviar = false;
        document.primero.contrasena.value = "";
        document.primero.contrasena.placeholder = "ERROR!";
        $.confirm({
			boxWidth: '30%',
			useBootstrap: false,
			theme: 'dark',
			icon: 'fa fa-paw',
			title: 'Contraseña no válida!',
			content: 'La contraseña debe contener al menos mayuscula, minuscula y digito. Entre 8 y 15.'
		});
        //alert ("La contraseña debe contener al menos mayuscula, minuscula y digito. Entre 8 y 15.");
		document.primero.contrasena.focus();
    }
    if (!verEmail.test(vEmail)) {
        vblEnviar = false;
        document.primero.email.value = "";
        document.primero.email.placeholder = "ERROR!";
		document.primero.email.focus();
    }
    if (!verTelefono.test(vTelefono) && vTelefono != "") {
        vblEnviar = false;
        document.primero.telefono.value = "";
        document.primero.telefono.placeholder = "ERROR!";
		document.primero.telefono.focus();
    }
    if (vblEnviar) {
        //alert("Formulario enviado");
        //msj('Login no válido','Tu usuario o contraseña son incorrectos','Volver');
    }
    return vblEnviar;
}