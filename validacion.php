<?php
session_start(); // Iniciar la sesión

include("./login-animado/con_db.php"); // Incluir el archivo de conexión a la base de datos

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los datos del formulario
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Sanitizar los datos para prevenir inyección SQL
    $email = mysqli_real_escape_string($conex, $email);
    $password = mysqli_real_escape_string($conex, $password);

    // Consultar la base de datos
    $query = "SELECT * FROM registro WHERE email='$email' AND password='$password'";
    $result = mysqli_query($conex, $query);

    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        // Usuario encontrado
        $_SESSION['email'] = $email; // Guardar el email del usuario en la sesión
        if ($row['is_admin'] == 1) {
            header("Location: ./users/admin/dashboard-admin.html"); // Redirigir a la página de administrador
        } else {
            header("Location: ./users/client/dashboard-client.html"); // Redirigir a la página de cliente
        }
    } else {
        // Usuario no encontrado
        echo "<h3 class='bad'>Correo electrónico o contraseña incorrectos.</h3>";
    }
}
?>
