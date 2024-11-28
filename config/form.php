<?php
require_once('conexion.php');

try {
    // obtener datos directamente del formulario
    $fullname = $_POST ['fullname'];
    $email = $_POST ['email'];
    $phone = $_POST ['phone'];
    $edad = $_POST ['edad'];
    $id_entidades = $_POST ['id_entidades'];
    $id_vistas = $_POST ['id_vistas'];
    $redes_sociales = $_POST ['redes_sociales'];



    $sql = "INSERT INTO usuario (fullname, email, phone, edad, id_entidades, id_vistas, redes_sociales) VALUES (:fullname, :email, :phone, :edad, :id_entidades, :id_vistas, :redes_sociales)";
    // preparar la consulta y ligar los parámetros al mensaje SQL
    $stmt = $conn->prepare ($sql);

    $stmt->bindParam(":fullname", $fullname);
    $stmt->bindParam(":email", $email);
    $stmt->bindParam(":phone", $phone);
    $stmt->bindParam(":edad", $edad);
    $stmt->bindParam(":id_entidades", $id_entidades);
    $stmt->bindParam(":id_vistas", $id_vistas);
    $stmt->bindParam(":redes_sociales", $redes_sociales);
    $stmt->execute();


    header("Location: ../index.php");

} catch (PDOException $e){
    //throw $th;
    
    echo "Error: ". $e->getMessage();

}

?>