function validarForm(formulario) {
  if(formulario.nombre.value.length==0) { //comprueba que no esté vacío
    formulario.nombre.focus();   
    alert('Ingrese su nombre completo.'); 
    return false; //devolvemos el foco
  }else{
  if(formulario.telefono.value.length==0) { //comprueba que no esté vacío
    formulario.telefono.focus();
    alert('Por favor ingrese su telefono, es de suma importancia para poder comunicarnos con usted.');
    return false;
  }else{
  if(formulario.correo.value.length==0) { //comprueba que no esté vacío
    formulario.correo.focus();
    alert('Por favor ingrese su correo electronico.');
    return false;
  }else{
  if(formulario.asunto.value.length==0) { //comprueba que no esté vacío
    formulario.asunto.focus();
    alert('Por favor ingrese el asunto.');
    return false;
  }
  }}} 
  return true;
}