
// Llamamos al HTML: home-client (usando la funcion cargarInicio)
window.addEventListener('load', cargarInicio);

// Funcion para llamar a home-client al cargar la pagina
function cargarInicio() {
  // Crear una solicitud HTTP GET para "inicio.html"
  const xhr = new XMLHttpRequest();
  xhr.open('GET', 'home-client.html');
  // Especificar el comportamiento al recibir la respuesta
  xhr.onload = function() {
    if (xhr.status === 200) {
      // Si la solicitud fue exitosa, insertar el contenido en el elemento "main"
      const contenidoInicio = xhr.responseText;
      const mainElement = document.getElementById('main-content');
      mainElement.innerHTML = contenidoInicio;
    } else {
      // Manejar errores si la solicitud falla
      console.error('Error al cargar inicio.html:', xhr.statusText);
    }
  };
  // Enviar la solicitud
  xhr.send();
}





function cerrarSesion() {
  // Aquí puedes agregar el código para cerrar sesión, como redirigir a la página de inicio de sesión, eliminar la sesión actual, etc.
  console.log("Cerrando sesión...");
}



function handleNavLinkClick(event) {
  const navLinks = document.querySelectorAll('.nav-link');
  navLinks.forEach(link => link.classList.remove('active'));

  const clickedLink = event.target;
  clickedLink.classList.add('active');
}

const navLinks = document.querySelectorAll('.nav-link');
navLinks.forEach(link => link.addEventListener('click', handleNavLinkClick));













// Script para llamar a cada HTML Segun los botones del SIDEBAR
document.addEventListener("DOMContentLoaded", function() {
  // Obtiene todos los elementos de la barra lateral
  var sidebarLinks = document.querySelectorAll("#sidebarMenu .nav-link");

  // Recorre cada enlace de la barra lateral
  sidebarLinks.forEach(function(link) {
    // Agrega un listener de clic a cada enlace
    link.addEventListener("click", function(event) {
      // Previene el comportamiento predeterminado del enlace
      event.preventDefault();

      // Obtiene la ruta del archivo HTML a cargar
      var pageToLoad = this.getAttribute("href");

      // Realiza una solicitud AJAX para obtener el contenido del archivo HTML
      var xhr = new XMLHttpRequest();
      xhr.open("GET", pageToLoad, true);
      xhr.onreadystatechange = function() {
        if (xhr.readyState === 4 && xhr.status === 200) {
          // Cuando la solicitud se completa con éxito, actualiza el contenido del main
          document.querySelector("main").innerHTML = xhr.responseText;
        }
      };
      xhr.send();
    });
  });
});






(function () {
  'use strict'

  feather.replace({ 'aria-hidden': 'true' })

  // Graphs
  var ctx = document.getElementById('myChart')
  // eslint-disable-next-line no-unused-vars
  var myChart = new Chart(ctx, {
    type: 'line',
    data: {
      labels: [
        'Sunday',
        'Monday',
        'Tuesday',
        'Wednesday',
        'Thursday',
        'Friday',
        'Saturday'
      ],
      datasets: [{
        data: [
          15339,
          21345,
          18483,
          24003,
          23489,
          24092,
          12034
        ],
        lineTension: 0,
        backgroundColor: 'transparent',
        borderColor: '#007bff',
        borderWidth: 4,
        pointBackgroundColor: '#007bff'
      }]
    },
    options: {
      scales: {
        yAxes: [{
          ticks: {
            beginAtZero: false
          }
        }]
      },
      legend: {
        display: false
      }
    }
  })
})()
