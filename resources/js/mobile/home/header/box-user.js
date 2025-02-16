document.addEventListener('DOMContentLoaded', function(){

    const botaoUser = document.getElementById('btn-user');
    const boxUser = document.getElementById('box-user');
    const svg = document.querySelector('.svg-user');

    botaoUser.addEventListener('click', function(){
        boxUser.classList.toggle('box-user-active');
        svg.classList.toggle('svg-user-active');
    });

});