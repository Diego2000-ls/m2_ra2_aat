<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Reservaciones</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/forms.css'); ?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <h1>Actualizar Reservaciones</h1>
        <a href="reservacion"><button class="btn btn-danger">Pagina Reservaciones</button></a>
        <div class="formularios_contenedor">
        <form action="<?php echo base_url('actualizar_reservacion'); ?>" method="post">
        <div class="mb-8">
        <div class="mb-8">
                <label for="txtIdReservacion" class="form-label">Id de reservacion:</label>
                <input type="number" id="txtIdReservacion" name="txtIdReservacion" class="form-control" placeholder="Ingrese el ID de la reservacion"
                value =<?= $datos['reservacion_id'];?>>
            </div>
            <div class="mb-8">
                <label for="txtFecha" class="form-label">Fecha:</label>
                <input type="date" id="txtFecha" name="txtFecha" class="form-control" placeholder="Ingrese la fecha"
                value =<?= $datos['fecha'];?>>
            </div>
            <div class="mb-8">
                <label for="txtIdCliente" class="form-label">ID de la reservacion:</label>
                <input type="number" id="txtIdCliente" name="txtIdCliente" class="form-control" placeholder="Ingrese el ID del cliente"
                value =<?= $datos['cliente_id'];?>>
            </div>
            <div class="mb-8">
                <label for="txtIdHotel" class="form-label">ID del hotel:</label>
                <input type="number" id="txtIdHotel" name="txtIdHotel" class="form-control" placeholder="Ingrese el ID del hotel"
                value =<?= $datos['hotel_id'];?>>
            </div>
            <div class="mb-8">
                <label for="txtDescripcion" class="form-label">Descripcion de la Reservacion:</label>
                <input type="number" id="txtDescripcion" name="txtDescripcion" class="form-control" placeholder="Ingrese la descripcion"
                value =<?= $datos['descripcion'];?>>
            </div>
            <div class="mb-8">
                <label for="txIdUsuario" class="form-label">ID del usuario:</label>
                <input type="number" id="txIdUsuario" name="txIdUsuario" class="form-control" placeholder="Ingrese el id del usuario"
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