window.onload = function() {
    //document.primero.nombre.readOnly = true;
    //document.primero.apellidos.readOnly = true;
    //document.primero.email.readOnly = true;
    document.primero.precio.readOnly = true;
    //document.primero.onsubmit = enviar;
}

if (document.addEventListener) {
	window.addEventListener('load', iniciar);
} else if (document.attachEvent) {
	window.attachEvent('onload', iniciar);
}

var varSelect1_1 = new Array('Jornada completa mensual', 'Media jornada mensual', 'Media jornada');
var varSelect1_2 = new Array('1 hora', '2 horas', '3 horas', '4 horas', '5 horas');

function iniciar() {
	if (document.addEventListener) {
        document.getElementById('form-tiempo').addEventListener('change', citas);
        document.getElementById('formtiempo2').addEventListener('change', precio);
        document.getElementById('form-tiempo').addEventListener('change', precio2);
        document.getElementById('cita').addEventListener('submit', enviar);
        
	} else if (document.attachEvent) {
        document.getElementById('form-tiempo').attachEvent('onchange', citas);
        document.getElementById('formtiempo2').attachEvent('onchange', precio);
        document.getElementById('form-tiempo').attachEvent('onchange', precio2);
        document.getElementById('cita').attachEvent('onsubmit', enviar);
	}
}

function citas() {
    var valor = document.getElementById('form-tiempo').value;
   	if (valor != 0) { 
      	var varSelect1 = eval("varSelect1_" + valor);
      	var vnbSelect1 = varSelect1.length;
      	document.primero.formtiempo2.length = vnbSelect1;
      	for(i = 0; i < vnbSelect1; i++){ 
         	document.getElementById('formtiempo2').options[i].text = varSelect1[i];
      	}	
   	}else{ 
      	document.getElementById('formtiempo2').length = 1;
        document.getElementById('formtiempo2').options[0].text = "-";
        document.getElementById('formprecio').value = 0;
   	} 
       document.getElementById('formtiempo2').options[0].selected = true;
}

function precio() {
    var valor = document.getElementById('formtiempo2').value;
    var valor2 = document.getElementById('form-tiempo').value;
    if (valor == 0 && valor2 == 1) {
        valor = 'Jornada completa mensual';
    } if (valor == 0 && valor2 == 2) {
        valor = '1 hora';
    }
    switch (valor) {
        case 'Jornada completa mensual':
            document.getElementById('formprecio').value = 300;
          break;
        case 'Media jornada mensual':
            document.getElementById('formprecio').value = 200;
            break;
        case 'Media jornada':
            document.getElementById('formprecio').value = 16;
          break;
        case '1 hora':
            document.getElementById('formprecio').value = 6;
            break;
        case '2 horas':
            document.getElementById('formprecio').value = 8;
            break;
        case '3 horas':
            document.getElementById('formprecio').value = 10;
            break;
        case '4 horas':
            document.getElementById('formprecio').value = 12;
            break;
        case '5 horas':
            document.getElementById('formprecio').value = 14;
            break;
        default:
            document.getElementById('formprecio').value = 0;
          break;
      }
}

function precio2() {
    var valor = document.getElementById('form-tiempo').value;
    if (valor == 1) {
        document.getElementById('formprecio').value = 300;
    } else if (valor == 2) {
        document.getElementById('formprecio').value = 6;
    } else {
        document.getElementById('formprecio').value = 0;
    }
    
    
}

function enviar() {
    var vblEnviar = true;
    var vNombre = document.primero.nombre.value.trim();
    var vApellidos = document.primero.apellidos.value.trim();
    var vEmail = document.primero.email.value.trim();
    var vTelefono = document.primero.telefono.value.trim();
    
    var verNombre = /^[a-z]([a-z]|\s|\-)+[a-z]$/i;
    var verApellidos = /^[a-z]([a-z]|\s|\-)+[a-z]$/i;
    var verEmail = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.[a-z]{2,4})+$/i;
    var verTelefono = /^[679]\d{8}$/;

    if (!verNombre.test(vNombre)){
        vblEnviar = false;
        document.primero.nombre.value = "";
		document.primero.nombre.placeholder = "ERROR!";
		document.primero.nombre.focus();
	}
    if (!verApellidos.test(vApellidos)) {
        vblEnviar = false;
        document.primero.apellidos.value = "";
        document.primero.apellidos.placeholder = "ERROR!";
		document.primero.apellidos.focus();
    }
    if (!verEmail.test(vEmail)) {
        vblEnviar = false;
        document.primero.email.value = "";
        document.primero.email.placeholder = "ERROR!";
		document.primero.email.focus();
    }
    if (!verTelefono.test(vTelefono)) {
        vblEnviar = false;
        document.primero.telefono.value = "";
        document.primero.telefono.placeholder = "ERROR!";
		document.primero.telefono.focus();
    }
    return vblEnviar;
}