<!DOCTYPE html>
<html>
    <head>
        <title> Posts</title>
        <meta charset="utf-8">
        <link a href="style.css" type="text/css" rel="stylesheet" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="cache-control" content="no-cache" />		
        
    </head>
    <body>
        
     <?php
	    include "menu.php";
	?>

     

        <div class="header">
            <div class="">
                <img src="imagens/fundo2.png" class="img_fundo"/>
            </div>
        </div>

        <main class="container-banner">
            <div class="center">
                <div class="form">
                    <h2> Criar novo post </h2>
                    <form method="POST"> 
    					<div class="input-container">
                            <label for="titulo">Título do post: </label>
                            <input id="titulo" name="titulo" required>
                        </div>
        
    					<div class="input-container">
                            <label for="descricao">Descrição do post: </label>
                            <textarea id="story" name="story" ></textarea>
                        </div>    
                    
                        <p class="warning"> Campos obrigatórios </p>
                        <div class="input-submit-container">
                            <input type="submit" value="Enviar">    
                        </div>
                    </form>                
                </div>
        
            </div>
        </main>

        <footer class="rodape">
            <img class="img_rodape" src="imagens/rodape.png"></a>
        </footer>
        
    </body>
</html>