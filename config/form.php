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
    $id_redes = $_POST ['id_redes'];
    $id_dominio = $_POST ['id_dominio'];



    $sql = "INSERT INTO usuario (fullname, email, phone, edad, id_entidades, id_vistas, id_redes, id_dominio) VALUES (:fullname, :email, :phone, :edad, :id_entidades, :id_vistas, :id_redes, :id_dominio)";
    // preparar la consulta y ligar los parámetros al mensaje SQL
    $stmt = $conn->prepare ($sql);

    $stmt->bindParam(":fullname", $fullname);
    $stmt->bindParam(":email", $email);
    $stmt->bindParam(":phone", $phone);
    $stmt->bindParam(":edad", $edad);
    $stmt->bindParam(":id_entidades", $id_entidades);
    $stmt->bindParam(":id_vistas", $id_vistas);
    $stmt->bindParam(":id_redes", $id_redes);
    $stmt->bindParam(":id_dominio", $id_dominio);
    $stmt->execute();


    header("Location: ../index.php");

} catch (PDOException $e){
    //throw $th;
    
    echo "Error: ". $e->getMessage();

}

?>