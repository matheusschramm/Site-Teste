<?php
    require_once("../conexao.php");
    require_once("../login.php");

    class MontaTelaLogin{
        public $html;
    
        public function CriaTelaLogin(){
            $html = '<!DOCTYPE html>
            <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>login</title>
                <link rel="stylesheet" href="style.css">
                <script src="jquery.js"></script>
                <script src="login.js"></script>
            </head>
            <body>
            
               <div class="container">
                <div class="buttonForm"> 
                    <div class="btnCollor"></div>
                    <button id="btnSignin">Sign In</button>
                    <button id="btnSignup">Sign Up</button>
                </div>
                <form id="signin">
                    <input id="usuSignIn" type="text" placeholder="Usuario" required />
                    <input id="passSignIn" type="password" placeholder="Senha" required />
                    <button id="enviaSignIn" type="submit">Enviar</button>
                </form>
            
                <form id="signup">
                    <input name="usuSignUp" id="usuSignUp" type="text" placeholder="Usuario" required />
                    <input name="passSignUp" id="passSignUp" type="password" placeholder="Senha" required />
                    <button id="enviaSignUp" type="submit">Enviar</button>
                </form>
                </div>
                
                

            </body>
            </html>';
            echo $html;
        }
    }
    // <button id="openModal">eManuel</button>

    $CriarPrimeiraTelaLoguin = new MontaTelaLogin();

    echo $CriarPrimeiraTelaLoguin->CriaTelaLogin();



