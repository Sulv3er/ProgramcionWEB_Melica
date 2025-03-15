function crearFigura() {
    const figuras = ['cuadrado', 'circulo', 'triangulo'];
    const figuraAleatoria = figuras[Math.floor(Math.random() * figuras.length)];
    
    const figura = document.createElement('div');
    figura.classList.add('figura', figuraAleatoria);

    // Posición aleatoria en la pantalla
    figura.style.top = Math.random() * 70 + 'vh';
    figura.style.left = Math.random() * 70 + 'vw';

    document.body.appendChild(figura);
}
