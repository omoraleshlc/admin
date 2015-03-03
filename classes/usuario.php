<?php

class usuario{

	//VARIABLES
	private $folio;
	private $usuario;
	private $passwd;
	private $nombre;
	private $aPaterno;
	private $aMaterno;
	private $llave;
	private $ejercicio;
	private $fecha;
	private $medico;
	private $tipoUsuario;
	private $status;
	private $fechaIngreso;
	private $fechaSalida;
	private $horaIngreso;
	private $horaSalida;
	private $entidad;
	private $email;

	//CONSTRUCTOR
	public function usuario(){
		$this->folio 		= "";
		$this->usuario 		= "";
		$this->passwd 		= "";
		$this->nombre 		= "";
		$this->aPaterno		= "";
		$this->aMaterno 	= "";
		$this->llave	 	= "";
		$this->ejercicio 	= "";
		$this->fecha 	 	= "";
		$this->medico 	 	= "";
		$this->tipoUsuario 	= "";
		$this->status 	 	= "";
		$this->fechaIngreso = "";
		$this->fechaSalida 	= "";
		$this->horaIngreso 	= "";
		$this->horaSalida 	= "";
		$this->entidad 		= "";
		$this->email 		= "";
	}

	//GETTERS AND SETTERS
	public function getFolio() {
        return $this->folio;
    }

    public function setFolio($folio) {
        $this->folio = $folio;
    }

    public function getUsuario() {
        return $this->usuario;
    }

    public function setUsuario($usuario) {
        $this->usuario = $usuario;
    }

    public function getPasswd() {
        return $this->passwd;
    }

    public function setPasswd($passwd) {
        $this->passwd = $passwd;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function getaPaterno() {
        return $this->aPaterno;
    }

    public function setaPaterno($aPaterno) {
        $this->aPaterno = $aPaterno;
    }

    public function getaMaterno() {
        return $this->aMaterno;
    }

    public function setaMaterno($aMaterno) {
        $this->aMaterno = $aMaterno;
    }

    public function getLlave() {
        return $this->llave;
    }

    public function setLlave($llave) {
        $this->llave = $llave;
    }

    public function getEjercicio() {
        return $this->ejercicio;
    }

    public function setEjercicio($ejercicio) {
        $this->ejercicio = $ejercicio;
    }

    public function getFecha() {
        return $this->fecha;
    }

    public function setFecha($fecha) {
        $this->fecha = $fecha;
    }

    public function getMedico() {
        return $this->medico;
    }

    public function setMedico($medico) {
        $this->medico = $medico;
    }

    public function getTipoUsuario() {
        return $this->tipoUsuario;
    }

    public function setTipoUsuario($tipoUsuario) {
        $this->tipoUsuario = $tipoUsuario;
    }

    public function getStatus() {
        return $this->status;
    }

    public function setStatus($status) {
        $this->status = $status;
    }

    public function getFechaIngreso() {
        return $this->fechaIngreso;
    }

    public function setFechaIngreso($fechaIngreso) {
        $this->fechaIngreso = $fechaIngreso;
    }

    public function getFechaSalida() {
        return $this->fechaSalida;
    }

    public function setFechaSalida($fechaSalida) {
        $this->fechaSalida = $fechaSalida;
    }

    public function getHoraIngreso() {
        return $this->horaIngreso;
    }

    public function setHoraIngreso($horaIngreso) {
        $this->horaIngreso = $horaIngreso;
    }

    public function getHoraSalida() {
        return $this->horaSalida;
    }

    public function setHoraSalida($horaSalida) {
        $this->horaSalida = $horaSalida;
    }

    public function getEntidad() {
        return $this->entidad;
    }

    public function setEntidad($entidad) {
        $this->entidad = $entidad;
    }

    public function getEmail() {
        return $this->email;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

	//INSERT
	public function insert(){
		global $conn;

		try {

			$stmt = $conn->prepare("
				insert into usuarios(
					folio,
					usuario,
					passwd,
					nombre,
					aPaterno,
					aMaterno,
					llave,
					ejercicio,
					fecha,
					medico,
					tipoUsuario,
					status,
					fechaIngreso,
					fechaSalida,
					horaIngreso,
					horaSalida,
					entidad,
					email
				) 
				values (
					:folio,
					:usuario,
					:passwd,
					:nombre,
					:aPaterno,
					:aMaterno,
					:llave,
					:ejercicio,
					:fecha,
					:medico,
					:tipoUsuario,
					:status,
					:fechaIngreso,
					:fechaSalida,
					:horaIngreso,
					:horaSalida,
					:entidad,
					:email
				) ");

			$stmt->execute(array( 
				":folio" 			=> $this->folio,
				":usuario" 			=> $this->usuario,
				":passwd" 			=> $this->passwd,
				":nombre" 			=> $this->nombre,
				":aPaterno" 		=> $this->aPaterno,
				":aMaterno" 		=> $this->aMaterno,
				":llave" 			=> $this->llave,
				":ejercicio" 		=> $this->ejercicio,
				":fecha" 			=> $this->fecha,
				":medico" 			=> $this->medico,
				":tipoUsuario" 		=> $this->tipoUsuario,
				":status" 			=> $this->status,
				":fechaIngreso" 	=> $this->fechaIngreso,
				":fechaSalida" 		=> $this->fechaSalida,
				":horaIngreso" 		=> $this->horaIngreso,
				":horaSalida" 		=> $this->horaSalida,
				":entidad" 			=> $this->entidad,
				":email" 			=> $this->email
			));

			$count = $stmt->rowCount();

			if($count>0){
				return true;
			}else{
				return false;
			}

	    } catch(PDOException $e) {
		    echo "string"; 'ERROR - usuario.php|insert: ' . $e->getMessage();
		}
	}

	//UPDATE
	public function update(){
		global $conn;

		try {

			$stmt = $conn->prepare("
				update usuarios 
				set
					usuario 		= :usuario,
					passwd 			= :passwd,
					nombre 			= :nombre,
					aPaterno 		= :aPaterno,
					aMaterno 		= :aMaterno,
					llave 			= :llave,
					ejercicio 		= :ejercicio,
					fecha 			= :fecha,
					medico 			= :medico,
					tipoUsuario 	= :tipoUsuario,
					status 			= :status,
					fechaIngreso 	= :fechaIngreso,
					fechaSalida 	= :fechaSalida,
					horaIngreso 	= :horaIngreso,
					horaSalida 		= :horaSalida,
					entidad 		= :entidad,
					emai 			= :email
				where folio = :folio ");

			$stmt->execute(array( 
				":folio" 			=> $this->folio,
				":usuario" 			=> $this->usuario,
				":passwd" 			=> $this->passwd,
				":nombre" 			=> $this->nombre,
				":aPaterno" 		=> $this->aPaterno,
				":aMaterno" 		=> $this->aMaterno,
				":llave" 			=> $this->llave,
				":ejercicio" 		=> $this->ejercicio,
				":fecha" 			=> $this->fecha,
				":medico" 			=> $this->medico,
				":tipoUsuario" 		=> $this->tipoUsuario,
				":status" 			=> $this->status,
				":fechaIngreso" 	=> $this->fechaIngreso,
				":fechaSalida" 		=> $this->fechaSalida,
				":horaIngreso" 		=> $this->horaIngreso,
				":horaSalida" 		=> $this->horaSalida,
				":entidad" 			=> $this->entidad,
				":email" 			=> $this->email
			));

			$count = $stmt->rowCount();

			if($count>0){
				return true;
			}else{
				return true;
			}

	    } catch(PDOException $e) {
		    echo 'ERROR - usuarios.php|update: ' . $e->getMessage();
		}
	}

	//SELECT
	public function map($obj){

		$this->folio 			= $obj->folio;
		$this->usuario 			= $obj->usuario;
		$this->passwd 			= $obj->passwd;
		$this->nombre 			= $obj->nombre;
		$this->aPaterno 		= $obj->aPaterno;
		$this->aMaterno 		= $obj->aMaterno;
		$this->llave 			= $obj->llave;
		$this->ejercicio 		= $obj->ejercicio;
		$this->fecha 			= $obj->fecha;
		$this->medico 			= $obj->medico;
		$this->tipoUsuario 		= $obj->tipoUsuario;
		$this->status 			= $obj->status;
		$this->fechaIngreso 	= $obj->fechaIngreso;
		$this->fechaSalida 		= $obj->fechaSalida;
		$this->horaIngreso 		= $obj->horaIngreso;
		$this->horaSalida 		= $obj->horaSalida;
		$this->entidad 			= $obj->entidad;
		$this->email 			= $obj->email;

	}

	public function select($folio){
		global $conn;

		try {

			$stmt = $conn->prepare("
				select * 
				from usuarios 
				where folio = :folio ");

			$stmt->execute( array( ":folio" => $folio ) );

			$results = $stmt->fetchAll( PDO::FETCH_OBJ );

			if($results){

				$this->map($results[0]);

				return true;
			}else{
				return false;
			}

	    } catch(PDOException $e) {
		    echo 'ERROR: - usuarios.php|select' . $e->getMessage();
		}
	}

	public function selectByUsuario($usuario){
		global $conn;

		try {

			$stmt = $conn->prepare("
				select * 
				from usuarios 
				where usuario = :usuario ");

			$stmt->execute( array( ":usuario" => $usuario ) );

			$results = $stmt->fetchAll( PDO::FETCH_OBJ );

			if($results){

				$this->map($results[0]);

				return true;
			}else{
				return false;
			}

	    } catch(PDOException $e) {
		    echo 'ERROR: - usuarios.php|mapByUser' . $e->getMessage();
		}
	}

	//DELETE
	public function delete($folio){
		global $conn;

		try {

			$stmt = $conn->prepare("
				delete from usuarios 
				where folio = :folio");

			$stmt->execute( array( ":folio"  => $folio ) );

			$count = $stmt->rowCount();

			if($count>0){
				return true;
			}else{
				return false;
			}

	    } catch(PDOException $e) {
		    echo 'ERROR - usuarios.php|delete: ' . $e->getMessage();
		}
	}


	//EXIST
	public function exists($folio){
		global $conn;

		try {

			$stmt = $conn->prepare("
				select * 
				from usuarios 
				where folio = :folio ");

			$stmt->execute( array( ":folio" => $folio ) );

			$count = $stmt->rowCount();

			if($count>0){
				return true;
			}else{
				return false;
			}

	    } catch(PDOException $e) {
		    echo 'ERROR: - usuarios.php|exists' . $e->getMessage();
		}
	}


}

?>






