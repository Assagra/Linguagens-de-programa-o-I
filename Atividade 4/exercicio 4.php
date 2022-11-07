<html>
	<head>
		<meta charset="utf-8">
		<title>Lista dos 500 primeiros números FOR</title>
	</head>
	<body>
	
		<h1>Soma dos 100 primeiros números</h1>
		
		<?php
		
			$i = 1;
			$soma = 0;
			
			while ($i <= 100){
				$soma = $soma + $i;
				$i++;
			}
			
			printf('<br> soma = %d', $soma);
			
			echo '<br>lucas Assagra - 8128968';
			
		?>
	
	</body>

</html>