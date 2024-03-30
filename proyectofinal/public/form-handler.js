$(document).ready(function () {
  $('#contact-form').submit(function (event) {
      event.preventDefault(); // Previene la recarga de la página

      var formData = $(this).serialize();

      $.ajax({
          type: 'POST',
          url: 'public/home2.php', // Asegúrate de que la ruta es relativa a la ubicación actual del archivo.
          data: formData,
          success: function (data) {
              // Muestra la alerta emergente con éxito
              showCustomAlert('Mensaje enviado con éxito.');
              // Limpia el formulario
              $('#contact-form')[0].reset();
              // Redirige al usuario a home2.php después de 1 segundo
              setTimeout(function () {
                  window.location.href = 'public/home2.php'; // Ruta corregida
              }, 1000);
          },
          error: function (jqXHR, textStatus, errorThrown) {
              // Muestra la alerta emergente de error
              showCustomAlert('Error al enviar el mensaje: ' + errorThrown);
          }
      });
  });

  function showCustomAlert(message) {
      var alert = $('<div class="custom-alert">' + message + '</div>');
      alert.appendTo('body').fadeIn().delay(1000).fadeOut(500, function () {
          $(this).remove();
      });
  }
});
