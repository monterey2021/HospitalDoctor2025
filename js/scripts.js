function mostrarContraseña() {
    const input = document.getElementById("input-contraseña");
    const icono = document.getElementById("icono-ojo");
    
    if (input.type === "password") {
      input.type = "text";
      icono.src = "img/eye-closed.png"; // cuando se muestra la contraseña
      icono.alt = "ocultar";
    } else {
      input.type = "password";
      icono.src = "img/eye-open.png"; // cuando se oculta
      icono.alt = "mostrar";
    }
  }
