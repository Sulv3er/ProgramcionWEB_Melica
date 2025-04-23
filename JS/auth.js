// auth.js - Sistema completo de autenticación

// Función para actualizar la sección de autenticación
function updateAuthSection() {
    const user = JSON.parse(localStorage.getItem('currentUser'));
    const authSection = document.querySelector('.auth-section');
    
    if (!authSection) return;
    
    if (user) {
        // Usuario logueado - Mostrar bienvenida, ícono y botón de cerrar sesión
        authSection.innerHTML = `
            <ul class="auth-list">
                <li><span class="welcome-msg">Bienvenido(a), ${user.name.split(' ')[0]}</span></li>
                <li><a href="perfil.html"><i class="fas fa-user user-icon"></i></a></li>
            </ul>
        `;
        
        // Agregar evento al botón de cerrar sesión
        authSection.querySelector('.logout-btn').addEventListener('click', logout);
    } else {
        // Usuario no logueado - Mostrar botones normales
        authSection.innerHTML = `
            <ul class="auth-list">
                <li><a href="login.html" class="login-btn">Iniciar sesión</a></li>
                <li><a href="registro.html" class="register-btn">Registro</a></li>
                <li><a href="perfil.html"><i class="fas fa-user user-icon"></i></a></li>
            </ul>
        `;
    }
}

// Función para cargar datos del perfil
function loadProfileData() {
    const user = JSON.parse(localStorage.getItem('currentUser'));
    
    if (!user) {
        window.location.href = 'login.html';
        return;
    }

    // Mostrar datos en el perfil
    if (document.getElementById('profile-title')) {
        document.getElementById('profile-title').textContent = `Perfil de ${user.name}`;
        document.getElementById('profile-name').textContent = user.name;
        document.getElementById('profile-email').textContent = user.email;
        
        if (user.createdAt) {
            document.getElementById('profile-date').textContent = new Date(user.createdAt).toLocaleDateString();
        } else {
            document.getElementById('profile-date').textContent = new Date().toLocaleDateString();
        }
        
        document.getElementById('profile-activity').textContent = '0 publicaciones este mes'; // Puedes cambiar esto
    }
    
    // Configurar botón de cerrar sesión en el perfil
    const logoutBtn = document.getElementById('logout-btn');
    if (logoutBtn) {
        logoutBtn.addEventListener('click', logout);
    }
}

// Función para registrar usuario
function registerUser(name, email, password) {
    let users = JSON.parse(localStorage.getItem('users')) || [];
    
    // Verificar si el usuario ya existe
    if (users.some(user => user.email === email)) {
        return { success: false, message: 'El correo electrónico ya está registrado' };
    }
    
    // Validar contraseña (mínimo 8 caracteres)
    if (password.length < 8) {
        return { success: false, message: 'La contraseña debe tener al menos 8 caracteres' };
    }
    
    // Crear nuevo usuario
    const newUser = {
        id: Date.now().toString(),
        name,
        email,
        password, // En producción, usa hashing!
        createdAt: new Date().toISOString(),
        lastLogin: new Date().toISOString()
    };
    
    users.push(newUser);
    localStorage.setItem('users', JSON.stringify(users));
    localStorage.setItem('currentUser', JSON.stringify(newUser));
    
    return { success: true, user: newUser };
}

// Función para iniciar sesión
function loginUser(email, password) {
    const users = JSON.parse(localStorage.getItem('users')) || [];
    const user = users.find(u => u.email === email && u.password === password);
    
    if (!user) {
        return { success: false, message: 'Correo electrónico o contraseña incorrectos' };
    }
    
    // Actualizar último login
    user.lastLogin = new Date().toISOString();
    localStorage.setItem('currentUser', JSON.stringify(user));
    
    // Actualizar en la lista de usuarios
    const updatedUsers = users.map(u => u.email === email ? user : u);
    localStorage.setItem('users', JSON.stringify(updatedUsers));
    
    return { success: true, user };
}

// Función para cerrar sesión
function logout() {
    localStorage.removeItem('currentUser');
    window.location.href = 'index.html';
}

// Manejar formulario de registro
function setupRegisterForm() {
    const registerForm = document.getElementById('register-form');
    if (registerForm) {
        registerForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            const name = document.getElementById('name').value;
            const email = document.getElementById('email').value;
            const password = document.getElementById('password').value;
            const confirmPassword = document.getElementById('confirm-password').value;
            
            const errorElement = document.getElementById('error-message');
            const successElement = document.getElementById('success-message');
            
            // Validar que las contraseñas coincidan
            if (password !== confirmPassword) {
                errorElement.textContent = 'Las contraseñas no coinciden';
                errorElement.style.display = 'block';
                successElement.style.display = 'none';
                return;
            }
            
            // Registrar usuario
            const result = registerUser(name, email, password);
            
            if (result.success) {
                successElement.textContent = '¡Registro exitoso! Redirigiendo...';
                successElement.style.display = 'block';
                errorElement.style.display = 'none';
                
                // Actualizar UI y redirigir
                updateAuthSection();
                setTimeout(() => {
                    window.location.href = 'perfil.html';
                }, 1500);
            } else {
                errorElement.textContent = result.message;
                errorElement.style.display = 'block';
                successElement.style.display = 'none';
            }
        });
    }
}

// Manejar formulario de login
function setupLoginForm() {
    const loginForm = document.getElementById('login-form');
    if (loginForm) {
        loginForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            const email = document.getElementById('email').value;
            const password = document.getElementById('password').value;
            const errorElement = document.getElementById('error-message');
            
            const result = loginUser(email, password);
            
            if (result.success) {
                // Actualizar UI y redirigir
                updateAuthSection();
                window.location.href = 'perfil.html';
            } else {
                errorElement.textContent = result.message;
                errorElement.style.display = 'block';
            }
        });
    }
}

// Inicializar todo cuando el DOM esté listo
document.addEventListener('DOMContentLoaded', function() {
    // Configurar formularios
    setupRegisterForm();
    setupLoginForm();
    
    // Actualizar sección de autenticación
    updateAuthSection();
    
    // Cargar datos del perfil si estamos en esa página
    if (window.location.pathname.includes('perfil.html')) {
        loadProfileData();
    }
});