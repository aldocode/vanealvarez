<?php

require 'includes/funciones.php';
incluirTemplate(
  'header',
  $inicio = true
);
?>

<main class="contenedor seccion">
  <h1>Más sobre mí</h1>

  <div class="iconos-nosotros">
    <div class="icono">
      <img src="build/img/icono1.svg" alt="Icono Seguridad" loading="lazy" />
      <h3>Seguridad</h3>
      <p>
        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Placeat
        provident vitae exercitationem ex ratione neque, recusandae aliquam
        voluptatum dolorum voluptatem et doloremque tenetur, pariatur
        assumenda dicta, similique ea dolores. Doloremque?
      </p>
    </div>

    <div class="icono">
      <img src="build/img/icono2.svg" alt="Icono Precio" loading="lazy" />
      <h3>Precio</h3>
      <p>
        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Placeat
        provident vitae exercitationem ex ratione neque, recusandae aliquam
        voluptatum dolorum voluptatem et doloremque tenetur, pariatur
        assumenda dicta, similique ea dolores. Doloremque?
      </p>
    </div>

    <div class="icono">
      <img src="build/img/icono3.svg" alt="Icono Seguridad" loading="lazy" />
      <h3>Gana tiempo</h3>
      </h4>
      <p>
        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Placeat
        provident vitae exercitationem ex ratione neque, recusandae aliquam
        voluptatum dolorum voluptatem et doloremque tenetur, pariatur
        assumenda dicta, similique ea dolores. Doloremque?
      </p>
    </div>
  </div>
</main>

<section class="seccion contenedor">
  <h2>Inmuebles en venta</h2>

  <?php
  include 'includes/templates/anuncios.php'
  ?>

  <div class="alinear-derecha">
    <a href="anuncios.php" class="boton-verde">Ver todas</a>
  </div>
</section>

<section class="imagen-contacto">
  <h2>Encuentra la casa de tus sueños</h2>
  <p>Llena el formulario y me pondré en contacto contigo.</p>
  <a href="contacto.php" class="boton-amarillo">Contáctame</a>
</section>

<div class="contenedor seccion seccion-inferior">
  <section class="blog">
    <h3>Nuestro blog</h3>

    <article class="entrada-blog">
      <div class="imagen">
        <picture>
          <source srcset="build/img/blog1.webp" type="image/webp" />
          <source srcset="build/img/blog1.jpg" type="image/jpeg " />
          <img loading="lazy" src="build/img/blog1.jpg" alt="Texto entrada" />
        </picture>
      </div>

      <div class="texto-entrada">
        <a href="entrada.php">
          <h4>Terraza en el techo de tu casa</h4>
          <p>
            Consejos para construir una terraza en el techo de tu casa con
            los mejores materiales y ahorrando dinero.
          </p>
          <p class="informacion-meta">
            Escrito el: <span>20/04/24 </span>por <span>Vane Alvarez</span>
          </p>
        </a>
      </div>
    </article>

    <article class="entrada-blog">
      <div class="imagen">
        <picture>
          <source srcset="build/img/blog2.webp" type="image/webp" />
          <source srcset="build/img/blog2.jpg" type="image/jpeg " />
          <img loading="lazy" src="build/img/blog2.jpg" alt="Texto entrada" />
        </picture>
      </div>

      <div class="texto-entrada">
        <a href="entrada.php">
          <h4>Terraza en el techo de tu casa</h4>

          <p>
            Consejos para construir una terraza en el techo de tu casa con
            los mejores materiales y ahorrando dinero.
          </p>
          <p class="informacion-meta">
            Escrito el: <span>20/04/24 </span>por <span>Vane Alvarez</span>
          </p>
        </a>
      </div>
    </article>
  </section>
  <section class="testimoniales">
    <h3>Testimoniales</h3>
    <div class="testimonial">
      <blockquote>
        El excelente servicio de Vane nos ayudó a concretar nuestro proceso
        de compra de manera muy satisfactoria."
      </blockquote>
      <p>Arturo Gonzalez</p>
    </div>
  </section>
</div>

<?php incluirTemplate('footer'); ?>