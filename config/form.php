<?php
require_once('conexion.php');

try {
    // obtener datos directamente del formulario
    $fullname = $_POST ['fullname'];
    $email = $_POST ['email'];
    $phone = $_POST ['phone'];
    $edad = $_POST ['edad'];
    $genero = $_POST ['genero'];
    $estado = $_POST ['estado'];

    $sql = "INSERT INTO datos_personales (fullname, email, phone, edad, genero, estado) VALUES (:fullname, :email, :phone, :edad, :genero, :estado)";
    // preparar la consulta y ligar los parámetros al mensaje SQL
    $stmt = $conn->prepare ($sql);

    $stmt->bindParam(":fullname", $fullname);
    $stmt->bindParam(":email", $email);
    $stmt->bindParam(":phone", $phone);
    $stmt->bindParam(":edad", $edad);
    $stmt->bindParam(":genero", $genero);
    $stmt->bindParam(":estado", $estado);
    $stmt->execute();


    header("Location: ../index.php");

} catch (PDOException $e){
    //throw $th;
    
    echo "Error: ". $e->getMessage();

}

?>