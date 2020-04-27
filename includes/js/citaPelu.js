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

var varSelect1_1 = new Array('Perro pequeño', 'Perro mediano', 'Perro grande');
var varSelect1_2 = new Array('Perro pequeño', 'Perro mediano', 'Perro grande', 'Perro gigante (+50kg)');

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
    if (valor2 == 1) {
        switch (valor) {
            case 'Perro pequeño':
                document.getElementById('formprecio').value = 30;
              break;
            case 'Perro mediano':
                document.getElementById('formprecio').value = 35;
                break;
            case 'Perro grande':
                document.getElementById('formprecio').value = 40;
              break;
          }
    } else if (valor2 == 2) {
        console.log(valor);
        switch (valor) {
            case 'Perro pequeño':
                document.getElementById('formprecio').value = 15;
              break;
            case 'Perro mediano':
                document.getElementById('formprecio').value = 20;
                break;
            case 'Perro grande':
                document.getElementById('formprecio').value = 30;
              break;
            case 'Perro gigante (+50kg)':
                document.getElementById('formprecio').value = 40;
              break;
        }
    } else {
        document.getElementById('formprecio').value = 0;
    }
    
}

function precio2() {
    var valor = document.getElementById('form-tiempo').value;
    if (valor == 1) {
        document.getElementById('formprecio').value = 30;
    } else if (valor == 2) {
        document.getElementById('formprecio').value = 15;
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