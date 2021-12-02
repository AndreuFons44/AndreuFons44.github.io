function validarform() {
  var valor_nick = document.getElementById("nickname").value;
  var valor_disc = document.getElementById("discord").value;
  var valor_email = document.getElementById("email").value;
  var valor_uid = document.getElementById("uid").value;
  var valor_server = document.getElementById("server").value;
  var valor_idioma = document.getElementById("idioma").value;
  var valor_textarea = document.getElementById("text_area").value;
  var patt_discord = /^\d{9}[0-9]$/;
  var patt_uid = /^\d{9}[0-9]$/;
  var patt_email = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
  //Nickname
  if (valor_nick.length <= 0 || valor_nick.length > 25) {
    document.getElementById("er_nick").innerHTML = "  El NickName no tiene formato correcto correcta";
    document.getElementById("er_nick").style.color = "red";
  } else{
    document.getElementById("er_nick").innerHTML = "";
  }
  //Discord
  if (valor_disc.length <= 0 || valor_disc.length > 20) {
    document.getElementById("er_disc").innerHTML = "  El discord no tiene formato correcto correcta";
    document.getElementById("er_disc").style.color = "red";
  } else{
    document.getElementById("er_disc").innerHTML = "";
  }
  //Email
  if (!patt_email.test(valor_email)) {
    document.getElementById("er_email").innerHTML = "  El Email no tiene formato correcto correcta";
    document.getElementById("er_email").style.color = "red";
  } else{
    document.getElementById("er_email").innerHTML = "";
  }
  //UID
  if (!patt_discord.test(valor_uid)) {
    document.getElementById("er_uid").innerHTML = "  La UID no tiene formato correcto correcta (Max 9 numeros)";
    document.getElementById("er_uid").style.color = "red";
  } else{
    document.getElementById("er_uid").innerHTML = "";
  }
  //Select_Server
  if (valor_server <= 0){
    document.getElementById("er_server").innerHTML = "  No hay servidor selecionado";
    document.getElementById("er_server").style.color = "red";
  }else{
    document.getElementById("er_server").innerHTML = "";
  }
  //Select_Idioma
  if (valor_idioma <= 0){
    document.getElementById("er_idioma").innerHTML = "  No hay idioma selecionado";
    document.getElementById("er_idioma").style.color = "red";
  }else{
    document.getElementById("er_idioma").innerHTML = "";
  }
  //Textdesc
  if (valor_textarea.length <= 0 || valor_textarea.length > 200) {
    document.getElementById("er_texta").innerHTML = "  La descripcion personal no tiene formato correcto";
    document.getElementById("er_texta").style.color = "red";
  }else{
    document.getElementById("er_texta").innerHTML = "";
  }
}
