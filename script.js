document.addEventListener("DOMContentLoaded", function() {
  var dialogOpen = false;

  document.querySelector(".myButton").addEventListener("click", function(event) {
    event.preventDefault();

    if (dialogOpen) {
      return;
    }

    dialogOpen = true;

    var popup = document.createElement("div");
    popup.className = "popup";
    popup.innerHTML = `
      <button class="close">X</button>
      <h2>Registro</h2>
      <p>Ingresa tus datos:</p>
      <form id="registerForm">
        <input type="text" id="primerNombre" placeholder="Primer Nombre" required><span>*</span><br>
        <input type="text" id="segundoNombre" placeholder="Segundo Nombre"><br>
        <input type="text" id="primerApellido" placeholder="Primer Apellido" required><span>*</span><br>
        <input type="text" id="segundoApellido" placeholder="Segundo Apellido" required><span>*</span><br>
        <input type="number" id="celular" placeholder="Celular" required><span>*</span><br>
        <input type="email" id="email" placeholder="Email" required><span>*</span><br>
        <select id="tipoDocumento" required>
          <option value="">Seleccionar tipo de documento</option>
          <option value="dni">DNI</option>
          <option value="pasaporte">Pasaporte</option>
          <option value="ruc">RUC</option>
        </select><br>
        <input type="text" id="numeroDocumento" placeholder="Número de documento" required><span>*</span><br>
        <input type="date" id="fechaNacimiento" placeholder="Fecha de Nacimiento" required>*<br>
        <p>todos los campos " * " son obligatorios</p>
        <button type="submit" class="register">Registrar</button>
      </form>
    `;

    var linkElement = document.createElement("link");
    linkElement.rel = "stylesheet";
    linkElement.type = "text/css";
    linkElement.href = "styles-jss.css";
    document.head.appendChild(linkElement);

    popup.querySelector(".close").addEventListener("click", function() {
      document.body.removeChild(popup);
      dialogOpen = false;
    });

    var registerForm = popup.querySelector("#registerForm");
    registerForm.addEventListener("submit", function(event) {
      event.preventDefault();

      // Obtener los valores de los campos del formulario
      var primerNombre = document.querySelector("#primerNombre").value;
      var segundoNombre = document.querySelector("#segundoNombre").value;
      var primerApellido = document.querySelector("#primerApellido").value;
      var segundoApellido = document.querySelector("#segundoApellido").value;
      var celular = document.querySelector("#celular").value;
      var email = document.querySelector("#email").value;
      var tipoDocumento = document.querySelector("#tipoDocumento").value;
      var numeroDocumento = document.querySelector("#numeroDocumento").value;
      var fechaNacimiento = document.querySelector("#fechaNacimiento").value;

      // Validaciones adicionales
      if (!primerNombre || !primerApellido || !celular || !email || !tipoDocumento || !numeroDocumento || !fechaNacimiento) {
        alert("Por favor, completa todos los campos obligatorios.");
        return;
      }

      // Obtener la fecha de nacimiento seleccionada
      var fechaNacimientoInput = new Date(fechaNacimiento);
      var fechaNacimientoValue = fechaNacimientoInput.getTime();

      // Obtener la fecha actual
      var fechaActual = new Date().getTime();

      // Calcular la diferencia de tiempo en milisegundos
      var diferenciaTiempo = fechaActual - fechaNacimientoValue;

      // Convertir la diferencia de tiempo a años
      var edad = Math.floor(diferenciaTiempo / (1000 * 60 * 60 * 24 * 365.25));

      // Verificar si la edad es menor a 18 años
      if (edad < 18) {
        alert("Lo sentimos, no cumples con las políticas de edad requeridas.");
        return;
      }

      // Crear un objeto FormData y agregar los valores del formulario
      var formData = new FormData();
      formData.append("primerNombre", primerNombre);
      formData.append("segundoNombre", segundoNombre);
      formData.append("primerApellido", primerApellido);
      formData.append("segundoApellido", segundoApellido);
      formData.append("celular", celular);
      formData.append("email", email);
      formData.append("tipoDocumento", tipoDocumento);
      formData.append("numeroDocumento", numeroDocumento);
      formData.append("fechaNacimiento", fechaNacimiento);

      // Ejemplo de envío de datos usando AJAX
      var xhr = new XMLHttpRequest();
      xhr.open("POST", "guardar_datos.php", true);
      xhr.onreadystatechange = function() {
        if (xhr.readyState === 4 && xhr.status === 200) {
          // Lógica después de recibir la respuesta del servidor
          mostrarMensajeConfirmacion();
        }
      };
      xhr.send(formData);

      document.body.removeChild(popup);
      dialogOpen = false;
    });

    document.body.appendChild(popup);
  });

  function mostrarMensajeConfirmacion() {
    // Lógica para mostrar un mensaje de confirmación después de enviar los datos
    alert("Registro exitoso. ¡Gracias por registrarte!");
  }
});
