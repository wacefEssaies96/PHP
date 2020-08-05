<!DOCTYPE html>
<html>
<head>
	<title>exercice16</title>
</head>
<body>
	<?php
		// Lecture d'un numéro de série
		list($serial) = sscanf("SN/2350001", "SN/%d");
		// et la date de fabrication
		$mandate = "January 01 2000";
		list($month, $day, $year) = sscanf($mandate, "%s %d %d");
		echo "Le produit $serial a été fabriqué le : $year-" . substr($month, 0, 3) . "-$day\n";

		var_dump($month);
	?>
</body>
</html>