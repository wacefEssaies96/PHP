<!DOCTYPE html>
<html>
<head>
	<title>exercice10</title>
</head>
<body>
	<?php
    	$arg1=5;
   		$arg2=5;
	    function plusGrand($arg1,$arg2){
	        if($arg1>$arg2){return $arg1;}
	        if($arg1<$arg2){return $arg2;}
	        if($arg1==$arg2){return "egalité";}
		}
		echo plusGrand($arg1,$arg2);
	?>
</body>
</html>