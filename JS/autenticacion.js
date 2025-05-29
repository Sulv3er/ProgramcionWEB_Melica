document.addEventListener('DOMContentLoaded', function () {
    // -------------------- Validación del registro --------------------
    const registroForm = document.getElementById('registro-form');
    const errorDiv = document.getElementById('error-message');

    if (registroForm) {
        registroForm.addEventListener('submit', function (e) {
            const password = document.getElementById('contraseña').value;
            const confirmPassword = document.getElementById('confirm-password').value;

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

    // -------------------- Validación del login --------------------
    const loginForm = document.getElementById('login-form');

    if (loginForm) {
        loginForm.addEventListener('submit', function (e) {
            const email = document.getElementById('email').value.trim();
            const password = document.getElementById('contraseña').value;

            if (!email || !password) {
                e.preventDefault();
                alert("Por favor, completa todos los campos.");
                return false;
            }

            // Validar formato de correo (simple)
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailRegex.test(email)) {
                e.preventDefault();
                alert("Ingresa un correo electrónico válido.");
                return false;
            }

            return true;
        });
    }
});
