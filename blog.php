<?php 
require 'includes/funciones.php';
incluirTemplate('header');
?>
    <main class="contenedor seccion contenido-centrado">
      <h1>El Blog de Vane Álvarez</h1>

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
              Consejos para construir una terraza en el techo de tu casa con los
              mejores materiales y ahorrando dinero.
            </p>
            <p>
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
              Consejos para construir una terraza en el techo de tu casa con los
              mejores materiales y ahorrando dinero.
            </p>
            <p>
              Escrito el: <span>20/04/24 </span>por <span>Vane Alvarez</span>
            </p>
          </a>
        </div>
      </article>
    </main>

<?php incluirTemplate('footer'); ?>