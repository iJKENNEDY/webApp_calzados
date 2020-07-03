

<?php 

	include("conexion.php");
	function insertar($codigo,$nombre,$descripcion,$precio,$area){
		global $cn;

		$sql = "INSERT INTO servicios (codigo,nombre,descripcion,precio,area) VALUES ('".$codigo."','".$nombre."','".$descripcion."','".$precio."','".$area."')";
		if (mysqli_query($cn, $sql)) {
			return "los datos se registraron";
		}else{
			return "ERROR, ....!!!";
		}
	}

	function getServicios(){
		global $cn;
		$sql= "SELECT * FROM servicios";
		return mysqli_query($cn,$sql);
	}

	function consultarServicios1($idC){
		global $cn;

		$sql="SELECT * FROM servicios WHERE codigo='".$idC."'";
		return mysqli_query($cn, $sql);
	}

	function modificar($codigo,$nombre,$descripcion,$precio,$area)
	{
		global $cn;
		$sql = "UPDATE servicios SET nombre='".$nombre."',descripcion='".$descripcion."',precio='".$precio."',area='".$area."' WHERE codigo='".$codigo."'";
		if (mysqli_query($cn, $sql)) {
			return "se registro correctamente";
		}
		else{
			return "error, no se pudo actualizar";
		}

	}


	function eliminarServicio($codigo){
		global $cn;

		$sql = "DELETE FROM servicios WHERE codigo='".$codigo."'";

		if (mysqli_query($cn, $sql)) {
			return "el curso fue eliminado con EXITO";
		}else{
			return "ERROR, el curso no eliminado";
		}
	}

 ?>