$(document).ready(function(){
    var Botao_SigIn = $("#btnSignin");
    var Botao_SigUp = $("#btnSignUp");

    Botao_SigIn.on('click', function(){
        console.log("clicou");
        var 
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