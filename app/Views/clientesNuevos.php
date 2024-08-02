<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Clientes Nuevos</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/forms.css'); ?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <h1>Nuevos Clientes</h1>
        <a href="clientes"><button class="btn btn-danger">Pagina Clientes</button></a>
        <div class="formularios_contenedor">
        <form action="<?php echo base_url('agregar_cliente'); ?>" method="post">
            <div class="mb-8">
                <label for="txtIdCliente" class="form-label">Id de cliente:</label>
                <input type="number" id="txtIdCliente" name="txtIdCliente" class="form-control" placeholder="Ingrese el ID del cliente">
            </div>
            <div class="mb-8">
                <label for="txtNombreCliente" class="form-label">Nombre del cliente:</label>
                <input type="text" id="txtNombreCliente" name="txtNombreCliente" class="form-control" placeholder="Ingrese el nombre del cliente">
            </div>
            <div class="mb-8">
                <label for="txtApellido" class="form-label">Apellido del cliente:</label>
                <input type="number" id="txtApellido" name="txtApellido" class="form-control" placeholder="Ingrese  de departamento">
            </div>
            <div class="mb-8">
                <label for="txtNit" class="form-label">NIT del cliente:</label>
                <input type="number" id="txtNit" name="txtNit" class="form-control" placeholder="Ingrese  el nit">
            </div>
            <div class="mb-8">
                <label for="txtTelefono" class="form-label">Telefono del cliente:</label>
                <input type="number" id="txtTelefono" name="txtTelefono" class="form-control" placeholder="Ingrese el telefono">
            </div>
            <div class="mb-8">
                <label for="txtCorreo" class="form-label">Correo del cliente:</label>
                <input type="number" id="txtCorreo" name="txtCorreo" class="form-control" placeholder="Ingrese el correo electronico">
            </div>
            <div class="mb-8">
                <label for="txtDireccion" class="form-label">Direccion del cliente:</label>
                <input type="number" id="txtDireccion" name="txtDireccion" class="form-control" placeholder="Ingrese la direccion">
            </div>
            <div class="mb-8">
                <label for="txtContraseña" class="form-label">Contreseña del cliente:</label>
                <input type="number" id="txtContraseña" name="txtContraseña" class="form-control" placeholder="Ingrese la contraseña">
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