<?php 
require 'includes/funciones.php';
incluirTemplate('header');
?>
    <main class="contenedor seccion contenido-centrado">
      <h1>Terraza en el techo de tu casa</h1>

      <picture>
        <source srcset="/../build/img/blog1.jpg" type="image/jpeg" />
        <img
          loading="lazy"
          src="/../build/img/blog1.jpg"
          alt="Imagen de la propiedad"
        />
      </picture>

      <p class="informacion-meta">
        Escrito el: <span>20/10/2024 </span>por: <span>Admin</span>
      </p>

      <div class="contenido-nosotros">
        <div class="resumen-propiedad"></div>
      </div>

      <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. A autem,
        inventore rem consequuntur facere ab dolore ratione perferendis minima!
        Magnam tenetur perspiciatis dicta aliquid doloremque impedit sequi quod,
        animi sed.
      </p>

      <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. A autem,
        inventore rem consequuntur facere ab dolore ratione perferendis minima!
        Magnam tenetur perspiciatis dicta aliquid doloremque impedit sequi quod,
        animi sed.
      </p>
    </main>

<?php incluirTemplate('footer'); ?>