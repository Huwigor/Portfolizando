document.addEventListener('DOMContentLoaded', function(){

    const mainMenu = document.getElementById('main-menu');
    const btnCategoria = document.querySelectorAll('.btn-categoria');

    document.getElementById('menu-btn').addEventListener('click', function(event){
        event.preventDefault();  
        mainMenu.classList.toggle('main-menu-active');   
        btnCategoria.forEach(btn=> btn.classList.toggle('active') );
    });


    const botaoFechar = document.getElementById('btn-fechar-categorias');
       botaoFechar.addEventListener('click', function(event){
        event.preventDefault();
        mainMenu.classList.remove('main-menu-active');
        btnCategoria.forEach(btn=> btn.classList.remove('active') );
    });

});