<?php session_start();     

if(isset($_SESSION['usuario'])){

header('location: index.html');

}

 include_once 'ConexionP.php';
$conexion = conecto(); 

$error = '';
 


    try
    {

      $usuario =  $_POST['User'];
      $password = $_POST['pass'];

      if($conexion!=false)
      {

        $pQuery = $conexion->prepare("call Logueo_aduana(:usuario,:password);");    
        $pQuery->bindParam(':usuario',$usuario);
        $pQuery->bindParam(':password',$password);
        $resul = $pQuery->execute();
        //$pQuery->setFetchMode(PDO::FETCH_ASSOC);
var_dump($resul);
       
     /*   if($pQuery->fetch()>0){
         
          header("location:biembenido.html");

          $this->Primeconex = null;

        }
        else{
          echo ("Error de autenticacion");
        }
*/
      }


   }catch(PDOException $e){
 
    echo("Mysql.proalmlog -- " . $E->getmessage()."\n");

  }



?>


