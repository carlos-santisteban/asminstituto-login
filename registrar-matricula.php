<?php
    //require 'database.php';

    $conn = mysqli_connect('localhost','root', '', 'login_database');

    $nombresapellidos = $_POST['nombre-ape'];
    $dni = $_POST['dni'];
    $cicloturno = $_POST['ciclo-turno'];
    $carreraprof = $_POST['carrera-prof'];
    $fechanac = $_POST['fecha-nac'];
    $email = $_POST['email'];

    $voucher_name = $_FILES['voucher-pago']['name'];
    $voucher_file = $_FILES['voucher-pago']['tmp_name'];
    $route = "files/" .$voucher_name;

    move_uploaded_file($voucher_file, $route);

    $cel = $_POST['numero-cel'];
    $mensaje = $_POST['mensaje'];


    if(isset($_POST['submit'])){
        $sql = "INSERT INTO registro_matricula (nombres_apellidos, dni, ciclo_turno, carrera_prof, fecha_nac, email, voucher_pago, celular, mensaje) VALUES ('$nombresapellidos', '$dni', '$cicloturno', '$carreraprof', '$fechanac', '$email', '$voucher_name', '$cel', '$mensaje')";
        $resultado = mysqli_query($conn, $sql);
        echo '<script type="text/javascript"> alert("Datos enviados exitosamente. Te contactaremos a la brevedad para confirmar tu matrícula."); window.location="home.php" </script>';
    }else{
        echo '<script type="text/javascript"> alert("No se pudo procesar los datos. Intente nuevamente."); window.location="home.php" </script>';
    }
?>