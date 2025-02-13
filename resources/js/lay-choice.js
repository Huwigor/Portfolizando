document.addEventListener('DOMContentLoaded', function () {
    const largura = window.innerWidth;
    const urlAtual = window.location.pathname; // Obtém a URL atual

    if (largura < 500 && urlAtual !== "/home-mobile") {
        window.location.href = "/home-mobile";
    } else if (largura >= 500 && urlAtual !== "/home-desktop") {
        window.location.href = "/home-desktop";
    }
});