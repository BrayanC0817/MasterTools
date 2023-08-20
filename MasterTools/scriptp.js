document.addEventListener("DOMContentLoaded", function () {
    const loginForm = document.getElementById("login-form");
    const loginMessage = document.getElementById("login-message");
  
    loginForm.addEventListener("submit", function (event) {
      event.preventDefault();
  
      const username = loginForm.username.value;
      const password = loginForm.password.value;
  
      if (username === "usuario" && password === "contraseña") {
        // Redirigir a la página de inicio después de un inicio de sesión exitoso
        window.location.href = "registrop.php";
      } else {
        loginMessage.textContent = "Credenciales incorrectas. Inténtalo de nuevo.";
        loginMessage.style.color = "red";
      }
    });
  });
  
  
  
  
  
  
  