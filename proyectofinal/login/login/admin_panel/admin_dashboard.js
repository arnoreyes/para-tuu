document.addEventListener('DOMContentLoaded', function() {

    // Manejo de eliminación de usuarios con confirmación
    const deleteButtons = document.querySelectorAll('.delete-user');
    deleteButtons.forEach(button => {
      button.addEventListener('click', function(event) {
        event.preventDefault();
        const userId = this.dataset.userid;
        if (confirm('¿Estás seguro de que quieres eliminar este usuario?')) {
          deleteUser(userId);
        }
      });
    });
  
    // Función para eliminar usuarios
    function deleteUser(userId) {
      fetch('delete_user.php', {
        method: 'POST',
        body: JSON.stringify({ id: userId }),
        headers: {
          'Content-Type': 'application/json'
        }
      })
      .then(response => response.json())
      .then(data => {
        if (data.success) {
          alert('Usuario eliminado correctamente.');
          // Elimina la fila de la tabla del usuario eliminado
          document.querySelector(`#user-${userId}`).remove();
        } else {
          alert('Hubo un error al eliminar el usuario.');
        }
      })
      .catch(error => {
        alert('Hubo un error al eliminar el usuario.');
      });
    }
  
    // Aquí podrías agregar más interactividad, como la actualización de usuarios
  
  });
  