/* mashallah akbar */
var nposti = 70;
var sl="slz";
var selezionati = new Array();
var postsel = new Array();
var postocc = new Array();

function prova2(){
	
	alert("prova");
}

function disdici(filmozzo){
	document.getElementById("fdisdire").value=filmozzo;
}

function shish(){
	// alert("shish");
	var occupati=document.getElementById("postipren").value;
	var arrayoccupati=occupati.split(" ");
	// alert(arrayoccupati[1]);
	
	for(var z=0; z<nposti; z++)
	{
		postsel[z]=0;
		postocc[z]=0;
	}
	
	
	for(var i=0; i<nposti; i++)
	{
		var oImg = document.createElement("img");
		
		var pos = arrayoccupati.indexOf(""+i);
		
		if (pos==-1)
		{
			
			oImg.setAttribute('src', './immagini/icona.png');
			oImg.setAttribute('onclick', 'changeImage('+i+')');			
		}
		else
		{
			oImg.setAttribute('onclick', 'changeImage('+i+')');	
			oImg.setAttribute('src', './immagini/occupato.png');
			postocc[i]=1;
			//onclick alert occupato
		}

		oImg.setAttribute('alt', i);
		oImg.setAttribute('id', i);
		oImg.setAttribute('style', 'width:9%');
		var plaza=document.getElementById("plaza");
		plaza.appendChild(oImg);
	}

	
}

function changeImage(indice)
{

	
	if(postocc[indice]==1)
	{
		alert("posto occupato");
	}
	else
	{
		if(postsel[indice]==0)
		{
			//alert("prova");
			document.getElementById(indice).src = './immagini/selezione.png';
			selezionati.push(indice);
			postsel[indice]=1;
			

			// alert(selezionati[0]);
		}
		else
		{
			document.getElementById(indice).src = './immagini/icona.png';
			var index = selezionati.indexOf(indice);
			selezionati.splice(index, 1);
			postsel[indice]=0;
		}
	}

	
	document.getElementById('slz').value='';
	
	for (var c=0; c<selezionati.length; c++)
	{
		// alert(selezionati[c]);
		if(c==0)
		{
			document.getElementById('slz').value=selezionati[c];
		}
		else
		{
			document.getElementById('slz').value=document.getElementById('slz').value+ " " + selezionati[c];
		}
		
			
	}
		
}

function bottone()
{
	

}



