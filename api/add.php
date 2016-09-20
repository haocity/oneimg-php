<?php
 $head="<?php \$oneimgsun=";
 $foot=";?>";
	if($_POST["number"]&&$_POST["number"]){
		echo "success";	
		$number = fopen("sunn.php", "w");
		fwrite($number, $head.$_POST["number"].$foot);
		fclose($number);
	}
	else{
		echo "eero";
		}
	
	
	?>