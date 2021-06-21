<?php

$filename = 'data.json';

$data = file_get_contents($filename);
$users = json_decode($data);
$agora = date('d/m/Y H:i');
echo $agora;
?>

<html>
    <body>
       <p>
			Avaliação Socps 2 </br>
			Nome: Matheus Teixeira de Souza</br>
			
	   </p>
    </body>
</html>