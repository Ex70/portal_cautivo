<?php
require_once("config/conexion.php");
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../portal_cautivo/css/styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <title>Registro Portal UEH</title>
</head>

<body>
    <!-- Navbar -->
    <?php
    include "../portal_cautivo/view/navbar.php";
    ?>

    <div class="container">
        <h1>Ya dejen de ponernos tanto proyecto</h1>
        <div class="col-md-8">
            <h2>Información Personal</h2>
            <p>Por favor complete los siguientes datos para continuar con el registro.</p>
        </div>
        <hr>
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <form action="config/form.php" method="POST" id="registrationForm">
                            <div class="form-group">
                                <label for="fullname">Nombre Completo:</label>
                                <input type="text" class="form-control" id="fullname" name="fullname">
                            </div>
                            <div class="form-group">
                                <label for="email">Email:</label>
                                <input type="text" class="form-control" id="correo" name="correo">
                            </div>
                            <div class="form-group">
                                <label for="phone">Telefono:</label>
                                <input type="text" class="form-control" id="phone" name="phone">
                            </div>
                            <div class="form-group">
                                <label for="edad">Edad:</label>
                                <input type="text" class="form-control" id="edad" name="edad">
                            </div>
                            <div class="form-group">
                                <label for="genero">Sexo:</label>
                                <select class="form-control" name="genero" id="genero">
                                    <option value="Masculino">Masculino</option>
                                    <option value="Femenino">Femenino</option>
                                    <option value="Prefiero no especificar">Prefiero no especificar</option>
                                </select>

                            </div>
                            <div class="form-group">
                                <label for="estado">Estado de donde nos visita:</label>
                                <select id="estado" name="estado" class="form-control" size="3">
                                    <option value="Aguascalientes">Aguascalientes</option>

                                </select>
                            </div>
                            <button type="submit" class="btn btn-success">Enviar</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h3>Terminos y condiciones</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non felis id felis consectetur rutrum. Integer non faucibus ligula, ac sagittis ipsum. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nulla facilisi. In efficitur, turpis non ullamcorper efficitur, justo lectus imperdiet velit, non eleifend velit nulla vel dui.</p>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="terms" required>
                            <label class="form-check-label" for="terms">Acepto los Terminos y Condiciones generales</label>
                        </div>
                    </div>
                </div>
                <div class="card" style="height:390px;">
                    <div class="row">
                        <div class="col-md-6">
                            <img class="card-img" src="img/logo.png" alt="">
                        </div>
                        <div class="col-md-6">
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sed architecto alias accusantium quam molestiae ipsum, deleniti non dolorem voluptatem sint libero nemo enim tenetur dolore magnam error! Vitae, omnis sunt!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- <div class="container">
        <div class="card-header">
            <h2>Redes Sociales</h2>
            <p>Por favor complete los siguientes datos para continuar con el registro.</p>
        </div>
        <hr>
        <form id="registrationForm">
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <h5>¿Donde nos vieron?</h5>
                        <div class="form-group">
                            <label for="redSocial">Redes Sociales</label>
                            <select multiple class="form-control" id="whatview" name="whatview" size="3">
                                <option value="instagram">Instagram</option>
                                <option value="facebook">Facebook</option>
                                <option value="twitter">Twitter</option>
                                <option value="youtube">Youtube</option>
                                <option>TikTok</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <h5>¿Como se enteraron?</h5>
                        <div class="form-group">
                            <label for="redSocial">Redes Sociales</label>
                            <select multiple class="form-control" id="view" name="view" size="3">
                                <option>Instagram</option>
                                <option>Facebook</option>
                                <option>Twitter</option>
                                <option>Youtube</option>
                                <option>TikTok</option>
                                <option>Propaganda</option>
                                <option>Radio</option>
                                <option>TV</option>
                                <option>Volantes publicitarios</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <h5>¿Como le gustaria recibir mas información?</h5>
                    <div class="form-group">
                        <label for="comunicate">Canales de Comunicación</label>
                        <select multiple class="form-control" id="comunicate" name="comunicate" size="3">
                            <option>Email</option>
                            <option>SMS</option>
                            <option>Whatsapp</option>
                            <option>Facebook Messenger</option>
                            <option>Telegram</option>
                        </select>
                    </div>
                </div>
        </form>
    </div> -->



    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <script>

    </script>


</body>

</html>