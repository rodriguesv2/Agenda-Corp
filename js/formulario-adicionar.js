var botaoAdicionaCampoTel = document.querySelector("#adiciona-campo-telefone");
var botaoSubtraiCampoTel = document.querySelector("#subtrai-campo-telefone");

var botaoAdicionaCampoEmail = document.querySelector("#adiciona-campo-email");
var botaoSubtraiCampoEmail = document.querySelector("#subtrai-campo-email");

var countTel = 2;
var countEmail = 2;

botaoAdicionaCampoTel.addEventListener("click", function(event){
	event.preventDefault();

	var novoInput = document.createElement("input");
	novoInput.setAttribute("name","telefone"+countTel);
	novoInput.setAttribute("placeholder","(XX) XXXX-XXXX");
	novoInput.setAttribute("type","tel");
	novoInput.classList.add("telefone"+countTel);
	
	var divTel = document.querySelector(".input-form-tel");
	divTel.appendChild(novoInput);
	
	console.log('antes de adicionar, count = '+countTel);
	countTel += 1;
	console.log('depois de adicionar, count = '+countTel);
});

botaoSubtraiCampoTel.addEventListener("click", function(event){
	event.preventDefault();
	
	if(countTel > 2){
		var inputTel = document.querySelector(".telefone"+(countTel-1)); 
		var divTel = document.querySelector(".input-form-tel");
		divTel.removeChild(inputTel);
		countTel -= 1;
	}
});

botaoAdicionaCampoEmail.addEventListener("click", function(event){
	event.preventDefault();

	var novoInput = document.createElement("input");
	novoInput.setAttribute("name","email"+countEmail);
	novoInput.setAttribute("placeholder","username@provider.com");
	novoInput.setAttribute("type","mail");
	novoInput.classList.add("email"+countEmail);
	
	var divEmail = document.querySelector(".input-form-email");
	divEmail.appendChild(novoInput);
	
	countEmail += 1;
});

botaoSubtraiCampoEmail.addEventListener("click", function(event){
	event.preventDefault();
	
	if(countEmail > 2){
		var inputEmail = document.querySelector(".email"+(countEmail-1)); 
		var divEmail = document.querySelector(".input-form-email");
		divEmail.removeChild(inputEmail);
		countEmail -= 1;
	}
});
