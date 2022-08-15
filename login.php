<!DOCTYPE html>
<html>
    <head>
        <title> Blog da torcida</title>
        <meta charset="utf-8">
        <link a href="style.css" type="text/css" rel="stylesheet" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="cache-control" content="no-cache" />		
        
    </head>
    <body>
        <nav class="menu">
            <a class="" href="index.html">Inicio</a>
            <a class="" href="">Campeonatos</a>
            <a class="" href="">Postagens</a>
            <a class="" href="sobre.html">Sobre</a>
            <a class="" href="login.php">Login</a>			
        </nav>

        <div class="header">
            <div class="center">
                <img src="imagens/fundo.png" class="img_fundo"/>
            </div>
        </div>
        
       
        <main class="container-banner">
            <div class="center">
                <div class="form">
                    <h2> Fazer login no sistema </h2>
                    <form method="POST"> 
    					<div class="input-container">
                            <label for="username">Username: </label>
                            <input id="username" name="username" required>
                        </div>
        
    					<div class="input-container">
                            <label for="password">Password: </label>
                            <input id="password" name="password" required type="password">    
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