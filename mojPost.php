<?php

$type = $_POST['type'];
$ime = $_POST['ime'];
$prezime = $_POST['prezime'];
$indeks = $_POST['brojIndeksa'];
$br = $_POST['smer'];

	if($type == "json")
	{
		header("Content-type: application/json");
		$json_array = array (
		'Ime' => $ime,
		'Prezime' => $prezime,
		'Broj indeksa' => $brojIndeksa,
		'Smer' => $smer
		);
		echo json_encode($json_array);
	}else 
	{	
		header("Content-type: text/xml");
		$xml_array = array (
		$ime => 'Ime',
		$prezime => 'Prezime',
		$brojIndeksa => 'Broj indeksa',
		$smer => 'Smer'
		);
		$xml = new SimpleXMLElement('<root/>');
		array_walk_recursive($xml_array, array ($xml, 'addChild'));
		print $xml->asXML();
	}
?>