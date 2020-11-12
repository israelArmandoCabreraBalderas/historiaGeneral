<?php 

	$fechaNacimiento=$_POST['date'];
	global bool mayorEdad;
	global $edad;
	
	function obtener_edad_segun_fecha($fecha_nacimiento)
	{
		$nacimiento = new DateTime($fecha_nacimiento);
		$ahora = new DateTime(date("Y-m-d"));
		$diferencia = $ahora->diff($nacimiento);
		return $diferencia->format("%y");
	}
	
	function mayorDeEdad ($edad)
	{
		if($edad>=18)
		{
			$mayorEdad = true;
			return mayorEdad;
			printf("Usted es mayor de edad: "+$mayorEdad);
		}
		else
		{
			$mayorEdad = false;
			return mayorEdad;
		}
	}
	
	$edad = obtener_edad_segun_fecha($fechaNacimiento);
	$mayorEdad = mayorDeEdad($edad);
	
?>