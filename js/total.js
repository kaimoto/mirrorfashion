var $input_quantidade =  document.querySelector("#qt");
var $output_total= document.querySelector("#total");


$input_quantidade.oninput = function(){
	var preco = document.querySelector("#preco").textContent;
	preco = preco.replace("R$ ","");
	preco = preco.replace(",",".");

	preco = parseFloat (preco);

	var quantidade= $input_quantidade.value;
	var total = preco*quantidade;
	total="R$ " + total;
	total= total.replace(".", ",");

	$output_total.value = total;
}