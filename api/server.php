<?php 

header("Content-Type: application/json");

$rawData = file_get_contents('../db/listaToDoOriginale.json');
echo $rawData;




?>