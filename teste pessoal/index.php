<?php

    class MontaSite{
        public $html;

        public function CriaTelaLogin(){
            $html = '<!DOCTYPE html>
            <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>login</title>
                <link rel="stylesheet" href="style.css">
                <script src="loguin.js"></script>
            </head>
            <body>
            
               <div class="container">
                <div class="buttonForm"> 
                    <div class="btnCollor"></div>
                    <button id="btnSignin">Sign In</button>
                    <button id="btnSignup">Sign Up</button>
                </div>
                <form id="signin">
                    <input type="text" placeholder="Ususario" required />
                    <input type="password" placeholder="Senha" required />
                    <button type="submit">Enviar</button>
                </form>
            
                <form id="signup">
                    <input type="text" placeholder="Ususario" required />
                    <input type="password" placeholder="Senha" required />
                    <button type="submit">Enviar</button>
                </form>
               </div>
            </body>
            </html>';
            echo $html;
        }

    }

    $CriarPrimeiraTelaLoguin = new MontaSite();

    echo $CriarPrimeiraTelaLoguin->CriaTelaLogin();

