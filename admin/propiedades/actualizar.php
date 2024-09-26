<?php

//Validar URL por ID válido
$id = $_GET['id'];
$id = filter_var($id, FILTER_VALIDATE_INT);

if (!$id) {
    header('Location: /admin');
}

// Base de datos
require '../../includes/config/database.php';
$db = conectarDB();

//Consulta para obtener datos de la propiedad
$consulta = "SELECT * FROM propiedades WHERE id = ${id}";
$resultado = mysqli_query($db, $consulta);
$propiedad = mysqli_fetch_assoc($resultado);

//Consultar para obtener los vendedores
$consulta = "SELECT * FROM vendedores";
$resultado_vendedores = mysqli_query($db, $consulta);

// Arreglo de errores
$errores = [];

$titulo = $propiedad['titulo'];
$precio = $propiedad['precio'];
$descripcion = $propiedad['descripcion'];
$habitaciones = $propiedad['habitaciones'];
$wc = $propiedad['wc'];
$estacionamiento = $propiedad['estacionamiento'];
$vendedorId = $propiedad['vendedorId'];
$imagenPropiedad = $propiedad['imagen'];

// Ejecutar el código después de que el usuario envía el formulario
if ($_SERVER['REQUEST_METHOD'] === 'POST') {


    $titulo = mysqli_real_escape_string($db, $_POST['titulo']);
    $precio = mysqli_real_escape_string($db, $_POST['precio']);
    $descripcion = mysqli_real_escape_string($db, $_POST['descripcion']);
    $habitaciones = mysqli_real_escape_string($db, $_POST['habitaciones']);
    $wc = mysqli_real_escape_string($db, $_POST['wc']);
    $estacionamiento = mysqli_real_escape_string($db, $_POST['estacionamiento']);
    $vendedorId = mysqli_real_escape_string($db, $_POST['vendedor']);
    $creado = date('Y/m/d');

    //Asignar files hacia una variable
    $imagen = $_FILES['imagen'];


    if (!$titulo) {
        $errores[] = "Debes añadir un título";
    }

    if (!$precio) {
        $errores[] = "Debes añadir un precio";
    }

    if (strlen($descripcion) < 50) {
        $errores[] = "Debes añadir una descripción de por lo menos 50 caracteres.";
    }

    if (!$habitaciones) {
        $errores[] = "Debes añadir el número de habitaciones";
    }

    if (!$wc) {
        $errores[] = "Debes añadir el número de baños";
    }

    if (!$estacionamiento) {
        $errores[] = "Debes añadir el número de estacionamientos";
    }

    if (!$vendedorId) {
        $errores[] = "Debes añadir un vendedor";
    }

    //Validar por tamaño (100Kb máximo)
    $medida = 1000 * 1000;

    if ($imagen['size'] > $medida) {
        $errores[] = "La imagen es muy pesada";
    }

    // Si no hay errores, insertar en la base de datos
    if (empty($errores)) {

        //Crear carpeta
        $carpetaImagenes = '../../imagenes/';
        if (!is_dir($carpetaImagenes)) {
            mkdir($carpetaImagenes);
        }

        //Evitar que si no subo una nueva imagen se elimine la anterior
        $nombreImagen = '';

        //SUBIDA DE ARCHIVOS

        if ($imagen['name']) {
            //Eliminar la imagen previa
            unlink($carpetaImagenes . $propiedad['imagen']);

            //Generar un nombre único
            $nombreImagen = md5(uniqid(rand(), true)) . ".jpg";

            //Subir imagen
            move_uploaded_file($imagen['tmp_name'], $carpetaImagenes . $nombreImagen);
        } else {
            $nombreImagen = $propiedad['imagen'];
        }

        // Insertar en la base de datos
        $query = "UPDATE propiedades SET 
          titulo = '{$titulo}',
          precio = '{$precio}',
          imagen = '{$nombreImagen}',
          descripcion = '{$descripcion}',
          habitaciones = {$habitaciones},
          wc = {$wc},
          estacionamiento = {$estacionamiento},
          vendedorId = {$vendedorId} WHERE id = {$id}";

        $resultado = mysqli_query($db, $query);

        if ($resultado) {
            // Redireccionar al usuario
            header('Location: /admin?resultado=2');
        }
    }
}

require '../../includes/funciones.php';
incluirTemplate('header');
?>

<main class="contenedor seccion">
    <h1>Actualizar inmueble</h1>

    <?php foreach ($errores as $error) : ?>
        <div class="alerta error">
            <?php echo $error; ?>
        </div>
    <?php endforeach; ?>

    <a href="/admin/" class="boton boton-verde">Volver</a>

    <form class="formulario" method="POST" enctype="multipart/form-data">
        <fieldset>
            <legend>Información general del inmueble</legend>

            <label for="titulo">Título:</label>
            <input type="text" id="titulo" name="titulo" placeholder="Título Inmueble" value="<?php echo $titulo; ?>">

            <label for="precio">Precio:</label>
            <input type="number" id="precio" name="precio" placeholder="Precio Inmueble" value="<?php echo $precio; ?>">

            <label for="descripcion">Descripción:</label>
            <textarea id="descripcion" name="descripcion"><?php echo $descripcion; ?></textarea>

            <label for="imagen">Imagen:</label>
            <input type="file" id="imagen" accept="image/jpeg, image/png" name="imagen">

            <?php if ($imagenPropiedad) : ?>
                <img src="../../imagenes/<?php echo $imagenPropiedad; ?>" class="imagen-small">
            <?php endif; ?>
        </fieldset>

        <fieldset>
            <legend>Información Propiedad</legend>

            <label for=" habitaciones">Habitaciones</label>
            <input type="number" id="habitaciones" name="habitaciones" placeholder="Ej. 3" min="1" max="9" value="<?php echo $habitaciones; ?>">

            <label for="wc">Baños</label>
            <input type="number" id="wc" name="wc" placeholder="Ej. 3" min="1" max="9" value="<?php echo $wc; ?>">

            <label for="estacionamiento">Estacionamiento</label>
            <input type="number" id="estacionamiento" name="estacionamiento" placeholder="Ej. 3" min="1" max="9" value="<?php echo $estacionamiento; ?>">
        </fieldset>

        <fieldset>
            <legend>Vendedor</legend>

            <select name="vendedor">
                <option value="">-- Seleccione --</option>
                <?php while ($vendedor = mysqli_fetch_assoc($resultado_vendedores)) : ?>
                    <option <?php echo $vendedorId === $vendedor['id'] ? 'selected' : ''; ?> value="<?php echo $vendedor['id']; ?>">
                        <?php echo $vendedor['nombre'] . " " . $vendedor['apellido']; ?>
                    </option>
                <?php endwhile; ?>
            </select>
        </fieldset>

        <input type="submit" value="Actualizar Propiedad" class="boton boton-verde">
    </form>
</main>

<?php incluirTemplate('footer'); ?>