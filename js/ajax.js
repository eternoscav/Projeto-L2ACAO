// Carregar conteudo na DIV
function ahah(url) {
  document.getElementById("meio_corpo").innerHTML = '<p><img src="img/loadingAnimation.gif" alt="Loading" /></p>';
  if (window.XMLHttpRequest) {
    req = new XMLHttpRequest();
  } else if (window.ActiveXObject) {
    req = new ActiveXObject("Microsoft.XMLHTTP");
  }
  if (req != undefined) {
    req.onreadystatechange = function() {ahahDone(url);};
    req.open("GET", url, true);
    req.send("");
  }
}  

function ahahDone(url) {
  if (req.readyState == 4) { // apenas se req é "carregado"
    if (req.status == 200) { // apenas se "OK"
      document.getElementById("meio_corpo").innerHTML = req.responseText;
	  return false;
    } else {
      document.getElementById("meio_corpo").innerHTML=" AHAH Error:\n"+ req.status + "\n" +req.statusText;
    }
  }
}

function load(name, div) {
	ahah(name,div);
	return false;
}