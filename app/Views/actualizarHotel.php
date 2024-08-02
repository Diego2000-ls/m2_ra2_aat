<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hoteles</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/forms.css'); ?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <h1>Actualizar Hoteles</h1>
        <a href="ciudadano"><button class="btn btn-danger">Pagina Hoteles</button></a>
        <div class="formularios_contenedor">
        <form action="<?php echo base_url('actualizar_hotel'); ?>" method="post">
        <div class="mb-8">
                <label for="txtIdHotel" class="form-label">Id de hotel:</label>
                <input type="number" id="txtIdHotel" name="txtIdHotel" class="form-control" placeholder="Ingrese el ID del hotel"
                value =<?= $datos['hotel_id'];?>>
            </div>
            <div class="mb-8">
                <label for="txtNombreHotel" class="form-label">Nombre del Hotel:</label>
                <input type="text" id="txtNombreHotel" name="txtNombreHotel" class="form-control" placeholder="Ingrese el nombre del Hotel"
                value =<?= $datos['nombre'];?>>
            </div>
            <div class="mb-8">
                <label for="txtCorreo" class="form-label">Correo del Hotel:</label>
                <input type="text" id="txtCorreo" name="txtCorreo" class="form-control" placeholder="Ingrese el correo electronico"
                value =<?= $datos['correoelectronico'];?>>
            </div>
            <div class="mb-8">
                <label for="txtTelefono" class="form-label">Telefono del Hotel:</label>
                <input type="number" id="txtTelefono" name="txtTelefono" class="form-control" placeholder="Ingrese el telefono"
                value =<?= $datos['telefono'];?>>
            </div>
            <div class="mb-8">
                <label for="txtDireccion" class="form-label">Direccion del Hotel:</label>
                <input type="text" id="txtDireccion" name="txtDireccion" class="form-control" placeholder="Ingrese la direccion"
                value =<?= $datos['direccion'];?>>
            </div>
            <div class="mb-8">
                <label for="txtIdCiudad" class="form-label">ID ciudad del Hotel:</label>
                <input type="number" id="txtIdCiudad" name="txtIdCiudad" class="form-control" placeholder="Ingrese el ID de la ciudad"
                value =<?= $datos['ciudad_id'];?>>
            </div>
            <div class="mb-8">
                <label for="txtIdCategoria" class="form-label">ID categoria del Hotel:</label>
                <input type="number" id="txtIdCategoria" name="txtIdCategoria" class="form-control" placeholder="Ingrese el ID de la categoria"
                value =<?= $datos['categoria_id'];?>>
            </div>
            <div class="mb-8">
                <label for="txtIdUsuario" class="form-label">ID del usuario del Hotel:</label>
                <input type="number" id="txtIdUsuario" name="txtIdUsuario" class="form-control" placeholder="Ingrese el ID del usuario"
                value =<?= $datos['usuario_id'];?>>
            </div>
            <div id="btn" class="mb-8">
            <button type="submit" class="btn btn-primary">Guardar</button>
            </div>
        </form>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>