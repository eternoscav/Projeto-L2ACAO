//<![CDATA[
function Validar(formreg){
	if(formreg.iagree.checked == true){
	  formreg.validation.disabled = false 
	}
	if(formreg.iagree.checked == false){
		formreg.validation.disabled = true
	}
}
function isEmailAddress(email){
	if (email.match(/^([a-zA-Z0-9])+([.a-zA-Z0-9_-])*@([a-zA-Z0-9_-])+(.[a-zA-Z0-9_-]+)+/)){
		return true;
	}else{
		return false;
	}
}
function isAlphaNumeric(value){
	if (value.match(/^[a-zA-Z0-9]+$/))
	  return true;
	else
	  return false;
}
function checkform(formreg){
	//validar user
	if (formreg.account.value==""){
	  alert("Preencha todos os campos!");
	  return false;
	}
	if (!isAlphaNumeric(formreg.account.value)){
	  alert("Preencha todos os campos! Use só caracteres a-Z A-Z 0-9");
	  return false;
	}
	//validar senha
	if (formreg.password.value==""){
	  alert("Sem Senha ");
	  return false;
	}
	if (!isAlphaNumeric(formreg.password.value)){
	  alert("444444. Use só caracteres a-Z A-Z 0-9");
	  return false;
	}
	if (formreg.password2.value==""){
	  alert("Você não repetiu a senha");
	  return false;
	}
	if (formreg.password.value!=formreg.password2.value){
	  alert("Senhas não são iguais ");
	  return false; 
	}
	//validar email original
	/*
	if (!isEmailAddress(formreg.email.value)) {
		alert("E-mail Incorreto!! Por favor verifique e tente novamente!");
		return false;
	}
	*/
	//validar email
	if (formreg.email.value==""){
			 alert("O campo " + formreg.email.name + " deve ser preenchido!");
			 formreg.email.focus();
			 return false;
	}
	 //validar email(verificao de endereco eletrônico)
	parte1 = formreg.email.value.indexOf("@");
	parte2 = formreg.email.value.indexOf(".");
	parte3 = formreg.email.value.length;
	if (!(parte1 >= 3 && parte2 >= 6 && parte3 >= 9)) {
			 alert ("O campo " + formreg.email.name + " deve ser conter um endereco eletronico!");
			 formreg.email.focus();
			 return false;
	}
	return true;
}
//]]>