document.addEventListener('DOMContentLoaded', function(){

    const btnEsconder = document.getElementById('btn-esconder');
    const btnMostrar = document.getElementById('btn-mostrar');
    const inputPassword = document.getElementById('password');

    btnEsconder.addEventListener('click', function(e){
        e.preventDefault();
        btnEsconder.classList.add('hidden-btn');
        btnMostrar.classList.remove('hidden-btn');
        inputPassword.type = 'text';
    });
    btnMostrar.addEventListener('click', function(e){
        e.preventDefault();
        btnMostrar.classList.add('hidden-btn');
        btnEsconder.classList.remove('hidden-btn');
        inputPassword.type = 'password';
    });

    const btnEsconderRepeat = document.getElementById('btn-esconder-repeat');
    const btnMostrarRepeat = document.getElementById('btn-mostrar-repeat');
    const inputPasswordRepeat = document.getElementById('repeat-password');

    btnEsconderRepeat.addEventListener('click', function(e){
        e.preventDefault();
        btnEsconderRepeat.classList.add('hidden-btn');
        btnMostrarRepeat.classList.remove('hidden-btn');
        inputPasswordRepeat.type = 'text';
    });
    btnMostrarRepeat.addEventListener('click', function(e){
        e.preventDefault();
        btnMostrarRepeat.classList.add('hidden-btn');
        btnEsconderRepeat.classList.remove('hidden-btn');
        inputPasswordRepeat.type = 'password';
    });



});