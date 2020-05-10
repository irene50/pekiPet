window.onload = function () {
  document.contacto.onsubmit = enviar;
};

function enviar() {
  var vblEnviar = true;
  var vEmail = document.contacto.email.value.trim();
  console.log(vEmail);
  var verEmail = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.[a-z]{2,4})+$/i;

  if (!verEmail.test(vEmail)) {
    vblEnviar = false;
    document.contacto.email.value = "";
    document.contacto.email.placeholder = "ERROR!";
    document.contacto.email.focus();
  }
  if (vblEnviar) {
    //alert("Formulario enviado");
    //msj('Login no válido','Tu usuario o contraseña son incorrectos','Volver');
  }
  return vblEnviar;
}
