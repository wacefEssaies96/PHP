<!DOCTYPE html>
<html>
<head>
	<title>exercice11</title>
</head>
<body>
	<?php
	    $arg1="1";
	    $arg2="2";
	    $arg3="3";
	    function plusPetit($arg1,$arg2,$arg3){
	    	if($arg1<$arg2&&$arg1<$arg3){
	    		return $arg1;
	    	}
	    	if($arg2<$arg1&&$arg2<$arg3){
	    		return $arg2;
	    	}
	    	if($arg3<$arg1&&$arg3<$arg2){
	    		return $arg3;
	    	}
	    }
	    echo plusPetit($arg1,$arg2,$arg3);
	?>
</body>
</html>