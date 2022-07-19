<?php
include "dbConnection.php";


$email = $_POST['email'];
$password = hash("sha256", $_POST['password']);




$sql = "SELECT * FROM alumno WHERE correo = '$email' AND contraseña ='$password'";

$result = $pdo->query($sql);








if($result->rowCount() > 0 ){

    foreach($result as $fila){

  
        $tipo = $fila['tipo'];
        
        break;
    }
    
    $data = array('done' => true, 'message'=> "$tipo");
    
   

    Header('Content-type: application/json');
    echo json_encode($data);


    exit();
    
    }

else{

    $data = array('done' => false, 'message'=> "El correo o contraseña no existen");
    Header('Content-type: application/json');
    echo json_encode($data);
    exit();

}


?>