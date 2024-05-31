document.getElementById('registerForm').addEventListener('submit', function(event) {
    event.preventDefault(); // Prevenir el envío del formulario

    var formData = new FormData(this);
   
    // Crear una solicitud AJAX para verificar y registrar
    var xhr = new XMLHttpRequest();
    xhr.open('POST', 'registrar.php', true);
    xhr.onload = function() {
        if (xhr.status === 200) {
            var response = JSON.parse(xhr.responseText);
            if (response.status === 'error') {
                window.alert (response.message);
            } else if (response.status === 'success') {
                alert(response.message);
                window.location.href = '../index.php';
            }
        }
    };
    xhr.send(formData);
});
