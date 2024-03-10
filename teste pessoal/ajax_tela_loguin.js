$(document).ready(function(){
    var Botao_SigIn = $("#enviaSignIn");
    var Botao_SigUp = $("#enviaSignUp");

    Botao_SigUp.on('click', function(e){
        e.preventDefault();
        debugger;
        console.log("clicou");
         var usunome = $("#usuSignUp").val();
         var ususenha = $("#passSignUp").val();

        //  console.log(u"sunome, ususenha);
        $.post("index.php", {nome: usunome, senha: ususenha})
            .done(function(data){
                alert(data);
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
});