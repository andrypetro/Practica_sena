<?php
include("con_db.php");
header('Content-Type: application/json'); // Indicamos que la respuesta será en formato JSON

$response = array('status' => '', 'message' => '');

if (isset($_POST['email'])) {
    $nombres = $_POST['nombres'];
    $apellidos = $_POST['apellidos'];
    $telefono = $_POST['telefono'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $tipoDocumento = $_POST['tipoDocumento'];
    $numeroDocumento = $_POST['numeroDocumento'];
    $fechaNacimiento = $_POST['fechaNacimiento'];

    // Validación básica de campos
    if (empty($nombres) || empty($apellidos) || empty($telefono) || empty($email) || empty($password) || empty($tipoDocumento) || empty($numeroDocumento) || empty($fechaNacimiento)) {
        $response['status'] = 'error';
        $response['message'] = 'Por favor complete todos los campos.';
    } else {
        // Validar el email
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $response['status'] = 'error';
            $response['message'] = 'El correo electrónico no es válido.';
        } else {
            // Sanitizar los datos para prevenir la inyección SQL
            $nombres = mysqli_real_escape_string($conex, $nombres);
            $apellidos = mysqli_real_escape_string($conex, $apellidos);
            $telefono = mysqli_real_escape_string($conex, $telefono);
            $email = mysqli_real_escape_string($conex, $email);
            $password = mysqli_real_escape_string($conex, $password);
            $tipoDocumento = mysqli_real_escape_string($conex, $tipoDocumento);
            $numeroDocumento = mysqli_real_escape_string($conex, $numeroDocumento);
            $fechaNacimiento = mysqli_real_escape_string($conex, $fechaNacimiento);

            // Verificar si el correo ya está registrado
            $query = "SELECT * FROM registro WHERE email='$email'";
            $result = mysqli_query($conex, $query);

            if (mysqli_num_rows($result) > 0) {
                $response['status'] = 'error';
                $response['message'] = 'El correo electrónico ya está registrado.';
            } else {
                // Insertar en la base de datos
                $consulta = "INSERT INTO registro (nombres, apellidos, telefono, email, password, tipoDocumento, numeroDocumento, fechaNacimiento) VALUES ('$nombres', '$apellidos', '$telefono', '$email', '$password', '$tipoDocumento', '$numeroDocumento', '$fechaNacimiento')";
                $resultado = mysqli_query($conex, $consulta);
                $confirmacion = 'Te has registrado correctamente';

                if ($resultado) {
                    $response['status'] = 'success';
                    $response['message'] = $confirmacion;
                } else {
                    $response['status'] = 'error';
                    $response['message'] = '¡Ups! Ha ocurrido un error al registrar tus datos. Por favor, inténtalo de nuevo.';
                }
            }
        }
    }
}

echo json_encode($response);
?>
