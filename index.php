<?php
require_once("config/conexion.php");
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../portal_ueh/css/styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <title>Registro Portal UEH</title>
</head>

<body>
    <!-- Navbar -->
    <?php
    // include "../portal_ueh/view/navbar.php";
    ?>

    <div class="container">
        <h1>Registro UEH</h1>    
        <hr>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="card-header">
                            <h2>Redes Sociales</h2>
                            <p>Por favor complete los siguientes datos para continuar con el registro.</p>
                        </div>
                        <form action="config/form.php" method="POST" id="registrationForm">
                            <div class="container">
                                <div class="row">                                
                                    <div class="col-md-6 ">
                                        <div class="form-group">
                                            <label for="fullname">Nombre Completo:</label>
                                            <input type="text" class="form-control" id="fullname" name="fullname">
                                        </div>
                                        <div class="form-group">
                                            <label for="email">Email:</label>
                                            <input type="text" class="form-control" id="email" name="email">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="phone">Telefono:</label>
                                            <input type="text" class="form-control" id="phone" name="phone">
                                        </div>
                                        <div class="form-group">
                                            <label for="edad">Edad:</label>
                                            <input type="text" class="form-control" id="edad" name="edad">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="id_entidades">Estado de donde nos visita:</label>
                                    <select id="id_entidades" name="id_entidades" class="form-control" size="3">
                                        <!-- <option value="Aguascalientes">Aguascalientes</option> -->
                                        <?php
                                        $sql = "SELECT id, nombre FROM entidades";
                                        $result = $conn->query($sql);
                                        while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
                                        ?>
                                            <option value="<?php echo $row['id']; ?>"><?php echo $row['nombre']; ?></option>
                                        <?php
                                        }
                                        ?>
                                    </select>
                                </div>
                                <hr>
                                <div class="card-header">
                                    <h2>Redes Sociales</h2>
                                    <p>Por favor complete los siguientes datos para continuar con el registro.</p>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="card">
                                            <label for="id_vistas">¿Donde nos vieron?</label>
                                            <select id="id_vistas" name="id_vistas" class="form-control" size="3">
                                                <?php
                                                $sql = "SELECT id, nombre FROM vistas";
                                                $result = $conn->query($sql);
                                                while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
                                                ?>
                                                    <option value="<?php echo $row['id']; ?>"><?php echo $row['nombre']; ?></option>
                                                <?php
                                                }

                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="card">
                                            <div class="form-group">
                                                <label for="redes_sociales">Redes Sociales</label>
                                                <select multiple class="form-control" id="redes_sociales" name="redes_sociales" size="3">
                                                    <?php
                                                    $sql = "SELECT id, nombre FROM redes_sociales";
                                                    $result = $conn->query($sql);
                                                    while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
                                                    ?>
                                                        <option value="<?php echo $row['id']; ?>"><?php echo $row['nombre']; ?></option>
                                                    <?php
                                                    }
                                                    ?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-success">Enviar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <script>

    </script>


</body>

</html>