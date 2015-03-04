<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of medicos
 *
 * @author oamg
 */
class medicos {
    //put your code here
   
       public function selectMedico($entidad,$medico,$fechaInicial,$fechaFinal) {
        global $conn;

        try {

            $stmt = $conn->prepare("
				select * 
				from cargosCuentaPaciente 
				where entidad = :entidad and 
                                medico = :medico and 
                                fecha1 = :fechaInicial and 
                                fecha1 = :fechaFinal" );

            $stmt->execute(array(":entidad" => $entidad,":medico" => $medico,":fechaInicial" => $fechaInicial,":fechaFinal" => $fechaFinal));

            $results = $stmt->fetchAll(PDO::FETCH_OBJ);

            if ($results) {

                $this->map($results[0]);

                return true;
            } else {
                return false;
            }
        } catch (PDOException $e) {
            echo 'ERROR: - usuarios.php|select' . $e->getMessage();
        }
    }
        
   

}
