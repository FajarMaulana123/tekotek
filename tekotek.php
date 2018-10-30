<!DOCTYPE html>
<html>
<head>
	<title>TEKOTEK</title>
</head>
<body>
	<?php
		echo "<font face ='Helvetica'>Tekottek-kotek
			anak ayam turun 100</font> <br>";
		$tekottek = 99;
		for ($i=$tekottek;$i > 0 ; $i--) {
			if($i % 2 == 0)
				{echo "<font face
					='Helvetica' color='brown'>Mati satu
					tinggal $i</font>"; echo "<br>";
				}
			else
				{ echo "<font face
					='Helvetica' color='orange'>Mati satu
					tinggal $i</font>"; echo "<br>";
				}
			}
	?>
</body>
</html>