<?php 
require 'includes/funciones.php';
incluirTemplate('header');
?>
    <main class="contenedor seccion">
      <h1>Sobre mí</h1>

      <div class="contenido-nosotros">
        <div class="imagen">
          <picture
            ><source
              srcset="/../build/img/vane_foto_2.webp"
              type="image/webp"
            />
            <source srcset="/../build/img/vane_foto_2.jpg" type="image/jpeg" />
            <img
              loading="lazy"
              src="(../build/img/vane_foto_2.jpg"
              )
              alt="Sobre mí"
            />
          </picture>
        </div>

        <div class="texto-nosotros">
          <blockquote>Más de 5 años de experiencia</blockquote>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima
            dolores reprehenderit vero ipsam ullam eveniet fuga praesentium
            debitis assumenda fugit, molestiae beatae quisquam maiores
            temporibus quas alias labore saepe recusandae.
          </p>

          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima
            dolores reprehenderit vero ipsam ullam eveniet fuga praesentium
            debitis assumenda fugit, molestiae beatae quisquam maiores
            temporibus quas alias labore saepe recusandae.
          </p>
        </div>
      </div>
    </main>

    <section class="contenedor seccion">
      <h1>Mi servicio se basa en 3 pilares</h1>

      <div class="iconos-nosotros">
        <div class="icono">
          <img
            src="build/img/icono1.svg"
            alt="Icono Seguridad"
            loading="lazy"
          />
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
          <img
            src="build/img/icono3.svg"
            alt="Icono Seguridad"
            loading="lazy"
          />
          <h3>Tiempo</h3>
          <p>
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Placeat
            provident vitae exercitationem ex ratione neque, recusandae aliquam
            voluptatum dolorum voluptatem et doloremque tenetur, pariatur
            assumenda dicta, similique ea dolores. Doloremque?
          </p>
        </div>
      </div>
    </section>

<?php incluirTemplate('footer'); ?>