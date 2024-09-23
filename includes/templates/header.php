<!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Vane Álvarez, tu Aliada Inmobiliaria</title>
  <link rel="stylesheet" href="/build/css/app.css" />
  <style>
    .logo {
      max-width: 400px;
      /* Ajusta este valor según el tamaño deseado */
    }
  </style>
</head>

<body>
  <header class="header <?php echo ($inicio) ? 'inicio' : ''; ?>">
    <div class="contenedor contenido-header">
      <div class="barra">
        <a href="/">
          <img src="/src/img/vane_logo.png" alt="Logotipo de bienes raíces" class="logo" />
        </a>
        <div class="mobile-menu">
          <img src="/build/img/barras.svg" alt="Icono menú responsive" />
        </div>

        <div class="derecha">
          <img class="dark-mode-boton" src="../../build/img/dark-mode.svg" alt="dark mode" />
          <nav class="navegacion">
            <a href="/">Inicio</a>
            <a href="/nosotros.php">Sobre mí</a>
            <a href="/anuncios.php">Anuncios</a>
            <a href="/blog.php">Blog</a>
            <a href="/contacto.php">Contacto</a>
          </nav>

        </div>
      </div><!--.barra-->
      <?php
      if ($inicio) {
        echo "<h1>Asesoría Inmobiliaria Personalizada en la Perla Tapatía</h1>";
      }
      ?>
    </div>
  </header>
</body>

</html>