<html>
	<head>
		<meta charset="utf-8">
		<title>Lista dos 20 primeiros números pares</title>
	</head>
	<body>
	
		<h1> Lista dos 20 primeiros números pares</h1>
		
		<?php
		
			$i = 1;
			
			while ($i <= 20){
				printf('<br> * Número %d => %d', $i, $i*2);
				$i++;
			}
			
			echo '<br>lucas Assagra - 8128968';
		
		?>
	
	</body>

</html>