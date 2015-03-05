<?php 
  
    session_start();

    if (!isset($_SESSION['usuario'])) {//Si no hay nada en sesion regresar al login
        
        echo "<script>location.href='../../';</script>";
        exit();
        
    } else {//Set time out session life
        $inactive = 6000; // set timeout period in seconds

        if (isset($_SESSION['timeout'])) {// check to see if $_SESSION['timeout'] is set
            $session_life = time() - $_SESSION['timeout'];

            if ($session_life > $inactive) {
                echo "<script>location.href='../../logout.php';</script>";
                exit();
            }
        }
        
        $_SESSION['timeout'] = time();
    }
    
    
    require_once("../../dbconect.php");
?>


