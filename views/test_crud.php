<div>
	
	nombre <input type="text" name="nom" id="">
	<input type="submit" value="agregar" name="btnadd">
	<br>
	<input type="submit" value="ver" name="btnver">
</div>
<?php 

	$n1 = 32432;
	$n2 = 333;
	$varios = array(243,99,4565,76,68,76,12);
	$add = array_push($varios,$n2);
	$nom = array();

	echo $add; 
	if (isset($_REQUEST['btnadd'])) {
		# code...
		$arrp ;
	for ($i=0; $i <3 ; $i++) { 
		$nom = $_REQUEST['nom'];
		$arrp = array_push($nom);
	}	
	}

	if(isset($_REQUEST['btnver'])){
		$arrp;
	$size = strlen($arrp);
	for ($i=0; $i < $size; $i++) { 
		echo "$arrp <br>";
	}
	}
?>