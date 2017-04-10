<?php
		header("Content-type: application/json");
		$json_array = array (
		'Ime' => 'Milanka',
		'Prezime' => 'Bjelic',
		'Broj indeksa' => '2626',
		'Smer' => 'Softversko inzenjerstvo'
		);
		echo json_encode($json_array);
	
?>