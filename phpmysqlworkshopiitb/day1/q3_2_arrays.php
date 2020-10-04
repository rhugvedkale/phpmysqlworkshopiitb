<?php 

	$matrix1 = array('0'=>array('0'=>2,'1'=>6),'1'=>array('0'=>4,'1'=>5));

	$matrix2 = array('0'=>array('0'=>5,'1'=>8),'1'=>array('0'=>9,'1'=>11));

	echo "Matrix 1 : <br>".$matrix1[0][0]." &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ".$matrix1[0][1].
					"<br>".$matrix1[1][0]." &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ".$matrix1[1][1];

	echo "<br><br>Matrix 2 : <br>".$matrix2[0][0]." &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ".$matrix2[0][1].
					"<br>".$matrix2[1][0]." &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ".$matrix2[1][1];


	$matrix3 = array();

	for($i=0;$i<=1;$i++)

		for($j=0;$j<=1;$j++)

			$matrix3[$i][$j] = $matrix1[$i][$j] + $matrix2[$i][$j];

	echo "<br><br>Adding Matrix 1 and Matrix 2 : <br>".$matrix3[0][0]." &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ".$matrix3[0][1].
					"<br>".$matrix3[1][0]." &nbsp;&nbsp;&nbsp;&nbsp;".$matrix3[1][1];

 ?>