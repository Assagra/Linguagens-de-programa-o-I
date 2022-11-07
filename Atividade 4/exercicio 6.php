<html>
	<head>
		<meta charset="utf-8">
		<title>Fatorial de um numero</title>
	</head>
	<body>
	
		<h1>Fatoria de um Numero</h1>
		
		<?php
			
			
			$ent = 6;
			$fat = 1;
			
			for($i = 1; $i<=$ent; $i++){
			
				$fat = $i * $fat;
				
			}
			
			printf("O fatorial de %d é: %d", $ent, $fat);
			
			echo '<br>lucas Assagra - 8128968';
			
		?>
	
	</body>

</html>