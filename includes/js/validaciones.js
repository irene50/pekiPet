window.onload = function () {
  document.primero.onsubmit = enviar;
};

function enviar() {
  var vblEnviar = true;
  var vMensaje = "";

  var vNombre = document.primero.nombre.value.trim();
  var vApellido1 = document.primero.apellido1.value.trim();
  var vApellido2 = document.primero.apellido2.value.trim();
  var vUsuario = document.primero.usuario.value.trim();
  var vContrasena = document.primero.contrasena.value.trim();
  var vContrasena2 = document.primero.contrasena2.value.trim();
  var vEmail = document.primero.email.value.trim();
  var vEmail2 = document.primero.email2.value.trim();
  var vTelefono = document.primero.telefono.value.trim();

  var verNombre = /^[a-z]([a-z]|\s|\-)+[a-z]$/i;
  var verApellido = /^[a-z]([a-z]|\s|\-)+[a-z]$/i;
  var verUsuario = /^[a-z](\w|\_)+[\w|\.]$/i;
  var verContrasena = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)([a-zA-Z\d@$!%*?&]|[^ ]){8,15}$/;
  var verEmail = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.[a-z]{2,4})+$/i;
  var verTelefono = /^[679]\d{8}$/;

  if (!verNombre.test(vNombre)) {
    vblEnviar = false;
    document.primero.nombre.value = "";
    document.primero.nombre.placeholder = "ERROR!";
    document.primero.nombre.focus();
    vMensaje += "El nombre es incorrecto<br>";
  }
  if (!verApellido.test(vApellido1)) {
    vblEnviar = false;
    document.primero.apellido1.value = "";
    document.primero.apellido1.placeholder = "ERROR!";
    document.primero.apellido1.focus();
    vMensaje += "El apellido es incorrecto<br>";
  }
  if (!verApellido.test(vApellido2) && vApellido2 != "") {
    vblEnviar = false;
    document.primero.apellido2.value = "";
    document.primero.apellido2.placeholder = "ERROR!";
    document.primero.apellido2.focus();
    vMensaje += "El segundo apellido es incorrecto<br>";
  }
  if (!verUsuario.test(vUsuario)) {
    vblEnviar = false;
    document.primero.usuario.value = "";
    document.primero.usuario.placeholder = "ERROR!";
    document.primero.usuario.focus();
    vMensaje += "El usuario es incorrecto<br>";
  }
  if (!verContrasena.test(vContrasena) || !verContrasena.test(vContrasena2)) {
    vblEnviar = false;
    document.primero.contrasena.value = "";
    document.primero.contrasena.placeholder = "ERROR!";
    document.primero.contrasena2.value = "";
    document.primero.contrasena2.placeholder = "ERROR!";
    document.primero.contrasena.focus();
    vMensaje +=
      "La contraseña debe contener al menos mayus., minus. y digito. Entre 8 y 15.<br>";
  }
  if (!verEmail.test(vEmail) || !verEmail.test(vEmail2)) {
    vblEnviar = false;
    document.primero.email.value = "";
    document.primero.email.placeholder = "ERROR!";
    document.primero.email2.value = "";
    document.primero.email2.placeholder = "ERROR!";
    document.primero.email.focus();
    vMensaje += "El email no tiene un formato válido<br>";
  }
  if (!verTelefono.test(vTelefono) && vTelefono != "") {
    vblEnviar = false;
    document.primero.telefono.value = "";
    document.primero.telefono.placeholder = "ERROR!";
    document.primero.telefono.focus();
    vMensaje += "El teléfono es incorrecto<br>";
  }
  if (vContrasena2 != vContrasena) {
    vblEnviar = false;
    document.primero.contrasena.value = "";
    document.primero.contrasena.placeholder = "ERROR!";
    document.primero.contrasena2.value = "";
    document.primero.contrasena2.placeholder = "ERROR!";
    document.primero.contrasena.focus();
    vMensaje += "Las contraseñas deben de coincidir<br>";
  }
  if (vEmail2 != vEmail) {
    vblEnviar = false;
    document.primero.email.value = "";
    document.primero.email.placeholder = "ERROR!";
    document.primero.email2.value = "";
    document.primero.email2.placeholder = "ERROR!";
    document.primero.email.focus();
    vMensaje += "Los correos deben de coincidir<br>";
  }
  if (!vblEnviar) {
    $.confirm({
      boxWidth: "50%",
      useBootstrap: false,
      theme: "dark",
      icon: "fa fa-paw",
      title: "!Registro incorrecto!",
      content: vMensaje,
    });
    //alert(vMensaje);
  }
  return vblEnviar;
}
