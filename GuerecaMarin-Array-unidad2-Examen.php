<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>EXAMEN UNIDAD2 GUERECA MARIN</title>
</head>
<body>
	<style type="text/css">
		body{
			background-color: black;
			color: white;
			text-align: left;
			tab-size: 30px;
			font-family: inherit;
			font-size: 30px;

		}
	</style>

	<?php 
    //CREAMOS EL ARRAY//
	$array = array("Chevrolet Camaro 1979" => "100000", "Dodge Charger 1969" => "75000", "Jeep Rubicon 2003" => "150000", "Kawasaki Ninja" => "120000");

    //ASOCIAMOS EL AUTO AL PRECIO//
	foreach($array as $carro => $precio) {
		echo " El carro " . $carro. " cuesta: ". $precio ."<br>";
		echo "<p>";
	}

    //AGREGAMOS 2 AUTOS MAS//
	$array["Tsuru "] = "15000";
	$array["Bocho"] = "20000";

    //ORDENAMOS EL ARRAY DE FORMA ASCENDENTE//
	

	//VOLVEMOS A IMPRIMIR EL ARRAY//
	foreach ($array as $carro => $precio) {
		echo " El carro " . $carro. " cuesta: ". $precio ."<br>";
		echo "<p>";
	}
	//ORDENAMOS EL ARRAY DE FORMA ASCENDENTE//
	sort($array);
	var_export($array);
	 ?>

</body>
</html>
