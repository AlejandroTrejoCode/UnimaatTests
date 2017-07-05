<?php
require 'conexion.php';
if (isset($_POST['user'])) {
  	$user=$_POST['user'];
  	$pass=$_POST['pass'];
  }
  else {
  	header('Location: ../index.html');
  }

	$query = $connection -> prepare(
    'SELECT * FROM alumno WHERE matricula = :user AND password = :pass ');
    $query -> execute(array(
    'user' => $user, 'pass' => $pass));

    $data = $query -> fetch();

    var_dump($data);

    if(empty($data)){
        header('Location: ../index.html');
    }
    else{
        session_start();
        $_SESSION['id'] = $data['idAlumno'];
        header('Location: ../evaluaciones.html');
    }
 ?>
