function sandwich(){
	document.getElementById('menuSandwich').style.display = (document.getElementById('menuSandwich').style.display=="none")?"":"none";
	$('#menuPizza').hide();
	$('#menuBeber').hide();
	$('#menuProd1').hide();
	$('#menuProd2').hide();
	$('#menuProd3').hide();
	$('#menuProd4').hide();
	$('#menuProd5').hide();
	$('#menuProd6').hide();
	$('#menuProd7').hide();
	$('#menuProd8').hide();
	$('#menuProd9').hide();
	$('#menuProd10').hide();
	$('#menuProd11').hide();
	$('#menuProd12').hide();
	$('#menuProd13').hide();
}



function pizza(){
	document.getElementById('menuPizza').style.display = (document.getElementById('menuPizza').style.display=="none")?"":"none";
	$('#menuSandwich').hide();
	$('#menuBeber').hide();
	$('#menuProd1').hide();
	$('#menuProd2').hide();
	$('#menuProd3').hide();
	$('#menuProd4').hide();
	$('#menuProd5').hide();
	$('#menuProd6').hide();
	$('#menuProd7').hide();
	$('#menuProd8').hide();
	$('#menuProd9').hide();
	$('#menuProd10').hide();
	$('#menuProd11').hide();
	$('#menuProd12').hide();
	$('#menuProd13').hide();
}

function beber()
{
	document.getElementById('menuBeber').style.display = (document.getElementById('menuBeber').style.display=="none")?"":"none";
	$('#menuSandwich').hide();
	$('#menuPizza').hide();
	$('#menuProd1').hide();
	$('#menuProd2').hide();
	$('#menuProd3').hide();
	$('#menuProd4').hide();
	$('#menuProd5').hide();
	$('#menuProd6').hide();
	$('#menuProd7').hide();
	$('#menuProd8').hide();
	$('#menuProd9').hide();
	$('#menuProd10').hide();
	$('#menuProd11').hide();
	$('#menuProd12').hide();
	$('#menuProd13').hide();
}



function listaProductos(id){
	document.getElementById('menuProd'+id).style.display = (document.getElementById('menuProd'+id).style.display=="none")?"":"none";
}

function cargarProdcuto(nombre, precio, idProducto){
	document.getElementById('detalleProducto').style.display = "";
	document.getElementById('NomProducto').innerHTML = nombre;
	document.getElementById('precio').innerHTML ='Total $ '+formatNumber(precio);
	document.getElementById('cantidad').value = 1;
	document.getElementById('precioUni').value = precio;
	document.getElementById('idProduct').value = idProducto;
}

function minus(){
	var cant = document.getElementById("cantidad"); 
	if(cant.value>=2){
		cant.value = parseInt(cant.value) - 1;
		if(cant.value == 1){
			cant.value = 1;
		}
	}
}

function more(){
	var cant = document.getElementById("cantidad"); 
	cant.value = parseInt(cant.value) + 1; 
	if(cant.value == 1){
		cant.value = 1;
	}
}

function calcularTotal(){
	m1=document.getElementById("cantidad").value;
	m2=document.getElementById("precioUni").value;
	resultado=m1*m2;
	document.getElementById("precio").innerHTML="Total $   "+formatNumber(resultado);
}

function formatNumber (n) {
	n = String(n).replace(/\D/g, "");
  return n === '' ? n : Number(n).toLocaleString();
}