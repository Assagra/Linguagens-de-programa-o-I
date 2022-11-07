<html>
	<head>
		<meta charset="utf-8">
		<title>soma dos 10 primeiros números pares</title>
	</head>
	<body>
		
		<h1>Soma dos 10 primeiros números pares</h1>
		
		<?php
		
			$i = 1;
			$soma = 0;
			
			while($i <= 10){
				
				$soma = $soma + $i*2;
				$i = $i + 1;
			}
			
			printf('<br> Soma = %d', $soma);
			
			echo '<br>lucas Assagra - 8128968';
		
		?>
		
	</body>

</html>