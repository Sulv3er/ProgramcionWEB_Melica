document.addEventListener('DOMContentLoaded', function() {
    const exampleItems = document.querySelectorAll('.example-item');
    
    exampleItems.forEach(item => {
        item.addEventListener('click', function() {
            // Remover clase active de todos los items
            exampleItems.forEach(i => i.classList.remove('active'));
            
            // Añadir clase active al item clickeado
            this.classList.add('active');
            
            // Ocultar todos los contenidos
            document.querySelectorAll('.example-detail').forEach(content => {
                content.classList.remove('active');
            });
            
            // Mostrar el contenido correspondiente
            const targetId = this.getAttribute('data-target');
            document.getElementById(targetId).classList.add('active');
        });
    });
});