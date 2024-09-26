<?php 
require 'includes/funciones.php';
incluirTemplate('header');
?>
    <main class="contenedor seccion">
      <h1>Contáctame</h1>

      <picture>
        <source srcset="build/img/destacada3.jpg" type="image/jpeg" />
        <img
          loading="lazy"
          src="build/img/destacada3.jpg"
          alt="Imagen de contacto"
        />
      </picture>

      <h2>Llene el formulario de contacto</h2>

      <form class="formulario">
        <fieldset>
          <legend>Información Personal</legend>

          <label for="nombre">Nombre</label>
          <input type="text" placeholder="Ingresa tu nombre" id="nombre" />

          <label for="email">Email</label>
          <input type="email" placeholder="Tu email" id="email" />

          <label for="telefono">Teléfono</label>
          <input type="tel" placeholder="Tu teléfono" id="telefono" />

          <label for="mensaje">Mensaje</label>
          <textarea id="mensaje" placeholder="Ingresa tu mensaje"></textarea>
        </fieldset>

        <fieldset>
          <legend>Información sobre la propiedad</legend>
          <label for="opciones">Quiero:</label>
          <select name="opciones" id="opciones">
            <option value="" disabled selected>-SELECCIONE UNA OPCIÓN-</option>
            <option value="Quiere comprar">Comprar una propiedad</option>
            <option value="Quiere vender">Vender una propiedad</option>
          </select>
          <label for="presupuesto">Precio o Presupuesto </label>
          <input
            type="number"
            placeholder="Tu precio o presupuesto"
            id="presupuesto"
          />
        </fieldset>

        <fieldset>
          <legend>Información</legend>
          <p>¿Cómo desea ser contactado?</p>

          <div class="forma-contacto">
            <label for="contactar-telefono">Teléfono</label>
            <input
              name="contacto"
              type="radio"
              value="telefono"
              id="contactar-telefono"
            />

            <label for="contactar-email">Email</label>
            <input
              name="contacto"
              type="radio"
              value="email"
              id="contactar-email"
            />
          </div>

          <p>
            Si eligió teléfono, indique la fecha y hora para ser contactado.
          </p>

          <label for="fecha">Fecha</label>
          <input type="date" id="fecha" />

          <label for="hora">Hora</label>
          <input type="time" id="hora" min="9:00" max="18:00" />
        </fieldset>
        <input type="submit" value="Enviar" class="boton-verde" />
      </form>
    </main>

<?php incluirTemplate('footer'); ?>