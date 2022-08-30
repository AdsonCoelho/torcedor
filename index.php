<!DOCTYPE html>
<html>
<head>
	<title> Blog da torcida</title>
	<meta charset="utf-8">
	<link a href="style.css" type="text/css" rel="stylesheet" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="cache-control" content="no-cache" />		

</head>

<script language="javascript">
			
	function preload(){
		imgs=Array('f1.jpeg','f2.jpeg','f3.jpeg');
		imgQtde=imgs.length;
		for (i=0;i<imgs;i++){
			var preloadimg=new Image();
			preloadimg.src=imgs[1];
		}
	}

	function iniciaSlider(){
		preload();
		max=3;
		min=1;
		fi=min;
		tr=true;
		carregaFoto("imagens/f1.jpeg");
		document.getElementById("moldura").addEventListener("transitionend",fimTr);
		tmr=setInterval(trocaFoto,4000);
	}
	
	function trocaFoto(){
		tr=false;
		fi++;
		if (fi>max){
			fi=min;
		}
		carregaFoto("imagens/f"+fi+".jpeg");
	}

	function fimTr(){
		tr=true;	
	}

	function carregaFoto(foto){
		document.getElementById("moldura").style.backgroundImage="URL("+foto+")";
	}

	function troca(dr){
		clearInterval(tmr);
		if(tr){
			tr=false;
			fi+=dr;
			if(fi>max){
				fi=min;
			}
			if(fi<min){
				fi=max;
			}
			carregaFoto("imagens/f"+fi+".jpeg");
		}
		tmr=setInterval(trocaFoto,6000);
	}

</script>
<body onload="iniciaSlider()">
	
	<?php
	include "menu.php";
	?>

	
	<main class="conteudo">
		<section class="">
			<div class="">
				<h1>Seja bem vindo ao blog dos apaixonados pelo futebol Inglês! 
				Nosso conteúdo foi criado especialmente para você que curte 
				a mais emocinante liga de funtebol do mundo!
				<img class="img_england" src="imagens/england.jpg"></a>
				</h1>				
				
			</div>
			
		</section>

		<div class="moldbt"></div>
			<div class="mold" id="moldura">
				<input type="button" value="Anterior"onclick="troca(-1)"/>
				<input type="button" value="Próximo" onclick="troca(1)"/>
			</div>
			
			<div class="postagens">
				<h3>Últimas postagens...</h3>
			</div>
		
	</main>

	<footer class="rodape">
		<img class="img_rodape" src="imagens/rodape.png"></a>
	</footer>
	
</body>
	

</html>