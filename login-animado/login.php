<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>Registrarse</title>
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <link rel="stylesheet" href="./assets/css/reset.css">
  <link rel="stylesheet" href="./assets/css/styles.css">
</head>
<body>

  <div class="login">
    <h1 class="login__heading">Registrarse</h1>
    <span class="login__circuit-mask"></span>
    <p>Ingresa tus datos:</p>
    <form id="registerForm" method="post">
    <input type="text" id="nombres" name="nombres" placeholder="Nombres" required maxlength="50" pattern="[A-Za-z\s]+" title="Solo se permiten letras y espacios" oninput="validateLetters(this)"><br>
      <input type="text" id="apellidos" name="apellidos" placeholder="Apellidos" required maxlength="50" pattern="[A-Za-z\s]+" title="Solo se permiten letras y espacios" oninput="validateLetters(this)"><br>
     <input type="tel" id="telefono" name="telefono" placeholder="Celular" required maxlength="15"><br>
      <input type="email" id="email" name="email" placeholder="Email" required maxlength="100"><br>
      <span id="emailError" style="color:red;"></span><br>
      <input type="password" id="password" name="password" placeholder="Password" required maxlength="100"><br>
      <select id="tipoDocumento" name="tipoDocumento" required>
        <option value="" disabled selected>Seleccionar tipo de documento</option>
        <option value="Cedula de ciudadania">Cedula de ciudadania</option>
        <option value="pasaporte">Pasaporte</option>
        <option value="ruc">RUC</option>
      </select><br>
      <input type="text" id="numeroDocumento" name="numeroDocumento" placeholder="Número de documento" required><br>
      <input type="date" id="fechaNacimiento" name="fechaNacimiento" placeholder="Fecha de Nacimiento" required><br>
      <button type="submit" name="register" class="register">Registrar</button>
    </form>
  </div>

  <script src="validation.js"></script>
  <script src="validarEmail.js"></script>
</body>
</html>
