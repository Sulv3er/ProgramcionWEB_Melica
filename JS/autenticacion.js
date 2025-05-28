document.addEventListener('DOMContentLoaded', function () {

    // Validación del formulario de registro
    const registroForm = document.getElementById('registro-form');
    const errorDiv = document.getElementById('error-message');

    if (registroForm) {
        registroForm.addEventListener('submit', function (e) {
            const password = document.getElementById('contraseña').value;
            const confirmPassword = document.getElementById('confirm-password').value;

            // Regex para validar: mínimo 8 caracteres, al menos 1 mayúscula y 1 número
            const regex = /^(?=.*[A-Z])(?=.*\d).{8,}$/;

            if (password !== confirmPassword) {
                e.preventDefault(); 
                errorDiv.textContent = 'Las contraseñas no coinciden.';
                errorDiv.style.display = 'block';
                return false;
            }

            if (!regex.test(password)) {
                e.preventDefault();
                errorDiv.textContent = 'La contraseña debe tener al menos 8 caracteres, una mayúscula y un número.';
                errorDiv.style.display = 'block';
                return false;
            }

            errorDiv.style.display = 'none'; 
            return true;
        });
    }

});
