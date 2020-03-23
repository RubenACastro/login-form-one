<?php



 function conecto()
{

    $cadenac = 'mysql:host=localhost:3308;dbname=db_aduana';
    
    $usuario = 'root';
    $contraseña = '';

       try{   
                
        $Primeconex = new PDO($cadenac,$usuario,$contraseña);
            return $Primeconex;
    
    }catch(PDOExcepcion $e){
        print "¡Error:!" . $e->getmessage() . "<br/>";
        return false;
    }

}

?>