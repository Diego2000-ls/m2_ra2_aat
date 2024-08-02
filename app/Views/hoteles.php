<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hoteles</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css'); ?>">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="enlaces">
    <form action="<?php echo base_url('formulario_hotel'); ?>" method="get">
            <button type="submit" class="btn btn-danger"><span class="secondarycolor">Agregar Nuevo</span>
                Hotel</button>
        </form>
        <a href="<?php echo base_url('cliente'); ?>"><button type="button" class="btn btn-primary"><span
                    class="secondarycolor">Ver</span> pagina
                clientes</button></a>
        <a href="<?php echo base_url('reservacion'); ?>"><button type="button" class="btn btn-primary">Ver pagina
                reservaciones
            </button></a>
    </div>
    <h1 class="animate__animated animate__zoomInDown">Hoteles</h1>
    <div class="tabla">
        <table class="table table-striped table-border">
            <thead>
                <tr class="table-primary">
                    <th class="animate__animated animate__rubberBand">ID del Hotel</th>
                    <th class="animate__animated animate__rubberBand">Nombre del Hotel</th>
                    <th class="animate__animated animate__rubberBand">Correo electronico</th>
                    <th class="animate__animated animate__rubberBand">Telefono</th>
                    <th class="animate__animated animate__rubberBand">Direccion</th>
                    <th class="animate__animated animate__rubberBand">ID de Ciudad</th>
                    <th class="animate__animated animate__rubberBand">ID de Categoria</th>
                    <th class="animate__animated animate__rubberBand">ID de Usuario</th>
                </tr>
            </thead>
            <tbody>
                <?php
          foreach($datos as $hotel):
        ?>
                <tr>
                    <td><?=$hotel['hotel_id'];?></td>
                    <td><?=$hotel['nombre'];?></td>
                    <td><?=$hotel['correoelectronico'];?></td>
                    <td><?=$hotel['telefono'];?></td>
                    <td><?=$hotel['direccion'];?></td>
                    <td><?=$hotel['ciudad_id'];?></td>
                    <td><?=$hotel['categoria_id'];?></td>
                    <td><?=$hotel['usuario_id'];?></td>
                    <td><a href="<?php echo base_url('buscar_hotel/').$hotel['hotel_id']; ?>"
                            class="btn btn-info"><i class="bi bi-pencil-square"></i></a></td>
                    <td><a href="<?php echo base_url('eliminar_hotel').$hotel['hotel_id']; ?>"
                            class="btn btn-danger"><i class="bi bi-trash"></i></a></td>
                </tr>
                <?php
          endforeach;
        ?>
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>