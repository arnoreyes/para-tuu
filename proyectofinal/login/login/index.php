<?php
session_start();

// Comprobaciones de mensajes de sesión que pueden haber sido establecidos en otros scripts PHP.
$message = $_SESSION['message'] ?? '';
$error = $_SESSION['error'] ?? '';

// Eliminar los mensajes de la sesión para que no se muestren de nuevo en una recarga de página.
unset($_SESSION['message'], $_SESSION['error']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Webleb</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
    integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="index.css">
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
<div class="vid-container">
    <video class="bgvid" autoplay loop muted>
      <source src="production_id_4109211 (2160p).mp4" type="video/mp4">
    </video>
  </div>
  <div class="form">
    <ul class="tab-group">
      <li class="tab active"><a href="#signup" style="border-radius: 15px!important;margin-right:8px;">Sign Up</a></li>
      <li class="tab"><a href="#login" style="border-radius: 15px!important;margin-left:8px;">Log In</a></li>
    </ul>
    <div class="tab-content">
      <div id="signup">
        <h1>Register</h1>
        <form action="register.php" method="post" id="signup-form">
  <div class="top-row">
    <div class="field-wrap">
      <input type="text" name="first_name" required placeholder="First Name" />
    </div>
    <div class="field-wrap">
      <input type="text" name="last_name" required placeholder="Last Name" />
    </div>
  </div>
  <div class="field-wrap">
<input type="email" name="email" required placeholder="Email" />
  </div>
  <div class="field-wrap">
    <input type="text" name="username" required placeholder="Username" />
  </div>
  <div class="field-wrap">
    <input type="password" name="password" required placeholder="Password" />
  </div>
  <button type="submit" class="button button-block">Sign Up</button>
</form>

      </div>
      <div id="login">
        <h1>Welcome Back!</h1>
        <form action="login.php" method="post">
          <div class="field-wrap">
          <input type="email" name="username" required placeholder="Email" />
          </div>
          <div class="field-wrap">
            <input type="password" name="password" required placeholder="Password" />
          </div>
          <p class="forgot"><a href="#">Forgot Password?</a></p>
          <button type="submit" class="button button-block">Log In</button>
        </form>
      </div>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="main.js"></script>
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<!-- Agrega esto en tu archivo index.php dentro de la sección <script> al final del archivo -->

<script>
// Este código verifica si hay una notificación en la sesión para mostrarla
<?php if (isset($_SESSION['notification'])): ?>
Swal.fire({
    icon: '<?php echo $_SESSION['notification_type']; ?>',
    title: '<?php echo $_SESSION['notification_type'] === 'success' ? '¡Hecho!' : 'Error'; ?>',
    text: '<?php echo $_SESSION['notification']; ?>',
}).then((result) => {
    if (result.isConfirmed && '<?php echo $_SESSION['notification_type']; ?>' === 'success') {
        // Limpia el formulario si el registro fue exitoso
        document.getElementById('signup-form').reset();
    }
});
<?php
    // Borra la notificación de la sesión para que no se muestre de nuevo
    unset($_SESSION['notification']);
    unset($_SESSION['notification_type']);
endif;
?>
</script>

</body>
</html>

