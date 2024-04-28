$(document).ready(function(){
   
    var Botao_SigUp = $("#enviaSignUp");

    Botao_SigUp.on('click', function(e){
            e.preventDefault();
           

            var usunome = $("#usuSignUp").val();
            var ususenha = $("#passSignUp").val();

            if(usunome == "" && ususenha == ""){
                alert("preencha os campos para poder criar seu usuario");
            };

            usunome = $.trim(usunome);
            ususenha = $.trim(ususenha);
                    
            console.log(usunome, ususenha);
            
            // var Req = new XMLHttpRequest();
            var oDados = {
                "nome": usunome, "senha": ususenha
            };
            
            $.ajax({
                url: 'http://localhost/Site-Teste/login.php',
                method: 'POST',
                data: JSON.stringify(oDados),
                contentType: 'aplication/json',
                dataType: 'json',
            }).done(function(result){
                alert(result);
            });
       
        });
            
    });

   
    
    document.addEventListener('DOMContentLoaded', function() {
        var formSignin = document.querySelector('#signin');
        var formSignup = document.querySelector('#signup');
        var btncollor = document.querySelector('.btnCollor');        
        
        document.querySelector('#btnSignin').addEventListener('click', () => {
            formSignin.style.left = '25px';
            formSignup.style.left = '450px';
            btncollor.style.left = '0px';
        });
        
        document.querySelector('#btnSignup').addEventListener('click', () => {
            formSignin.style.left = '-450px';
            formSignup.style.left = '25px';
            btncollor.style.left = '110px';
        });

        document.querySelector('#btnSignin').click();
    });
    
    // var btnEnviarSignIn = document.querySelector('#enviaSignIn');
        // var btnEnviarSignUp = document.querySelector('#enviaSignUp');        
        // document.querySelector('#enviaSignIn').addEventListener('click', () => {
        //     btnEnviarSignIn.style.boxShadow = 'inset 0 0 20px 0 #4c048f';
        // });       
        // document.querySelector('#usuSignIn').addEventListener('click', () => {
        //     btnEnviarSignIn.style.boxShadow = '';
        // });       