<!DOCTYPE html>
<html>
<head>
	<title>
	</title>
</head>
<body style="display: flex; flex-wrap: wrap;">
	<section style="background-color: pink; width: 400px; border-radius: 6px; margin: 10px; padding: 12px">
		<h1>Exersice 1</h1>
		<?=
			$x = $_GET['x'];
		 	$x1 = $_GET['x1'];
		 	$x2 = $_GET['x2'];
		 ?>
		<div style="display: block;">
			<h1>I variant: x = <?= $x?>, x2 = <?= $x1?> </h1>
			<h3>f(x) = 5x^2 + 6 = <?= 5 * pow($x, 2) + 6 ?></h3>
			<h3>f(x) = x^3 + 7 = <?= pow($x1, 3) + 7 ?></h3>
		</div>

		<div style="display: block;">
			<h1>II variant: x = <?= $x?>, x2 = <?= $x1?> </h1>
			<h3>f(x) = 5x = <?= 5 * pow($x, 1) ?></h3>
			<h3>f(x) = 3x^4 + 9 = <?= 3 * pow($x1, 4) + 9 ?></h3>
		</div>

		<div style="display: block;">
			<h1>III variant: x = <?= $x?>, x2 = <?= $x1?>, x3 = <?= $x2?> </h1>
			<h3>f(x) = x = <?= pow($x, 1) ?></h3>
			<h3>f(x) = x^3 + x = <?= pow($x1, 3) + $x1 ?></h3>
			<h3>f(x) = 3x^3 + 5 = <?= 3 * pow($x2, 3) + 5 ?></h3>
		</div>

		<div style="display: block;">
			<h1>IV variant: x = <?= $x?>, x2 = <?= $x1?> </h1>
			<h3>f(x) = x = <?= pow($x, 1) ?></h3>
			<h3>f(x) = 5x^3 + 1,7 = <?= 5 * pow($x1, 3) + 1.7 ?></h3>
		</div>

		<div style="display: block;">
			<h1>V variant: x = <?= $x?>, x2 = <?= $x1?>, x3 = <?= $x2?> </h1>
			<h3>f(x) = x^3 = <?= pow($x, 3) ?></h3>
			<h3>f(x) = 3x^4 + 7 = <?= 3 * pow($x1, 4) + 7 ?></h3>
			<h3>f(x) = x = <?= pow($x2, 1) ?></h3>
		</div>

		<div style="display: block;">
			<h1>VI variant: x = <?= $x?>, x2 = <?= $x1?>, x3 = <?= $x2?> </h1>
			<h3>f(x) = x = <?= pow($x, 1) ?></h3>
			<h3>f(x) = x^3 = <?= pow($x1, 3) ?></h3>
			<h3>f(x) = 3x^3 + 5 = <?= 3 * pow($x2, 3) + 5 ?></h3>
		</div>

	</section>

	<section style="background-color: yellow; width: 400px; border-radius: 6px; margin: 10px; padding: 12px">
		<h1>Exercise 2</h1>
		<?=
			$x = $_GET['x'];
			$n = $_GET['n'];
			$k = $_GET['k'];
			$res = 0;
		?>
		<fieldset>
			<legend>first task</legend>
			<h1>x = <?= $x?>, n = <?= $n?></h1>
		</fieldset>
		<p>The sum is:
			<?php
				while ($n != 0) :
					$res += pow($x, $n) / 2;
					$n --;

				endwhile;
				echo $res;
				
			?>
		</p>

		<fieldset>
			<legend>second task</legend>
			<h1>x = <?= $x?>, n = <?= $n?>, k = <?= $k?></h1>
		</fieldset>
		<p>The multiply is:
			<?php
				while ($n != 0) :
					$res *= 1 + (($k * $x) / 2);
					$n --;

				endwhile;
				echo $res;
				
			?>
		</p>
	</section>
	

	<section style="background-color: green; width: 400px; border-radius: 6px; margin: 10px; padding: 12px">
		<h1>Exercise 3</h1>

		1.<h2 style="border-radius: 6px; margin: 6px; border: 1px solid white; padding: 3px">
			<?php 
				$a10 = array(26, -12, 25, 74, -35, 8, 21, -13, 4, 7);
				function ex1($a)
				{
					$sum = 0;
					$count = 0;
				    foreach($a as $i) {
				    echo $i . " ";
				    if($i > 0) {
				        $sum += $i;
				        $count++;
				 	   }
					}
					echo "<br>";
					echo "The sum is: "  .$sum . "<br>";
					echo "The positive numbers count is: " . $count;
				};
				ex1($a10);	
				?>
		</h2>
		2.<h2 style="border-radius: 6px; margin: 6px; border: 1px solid white; padding: 3px">
			<?php 
				$a20 = array(32,	16,	-99,	132,	-76,
				36,	8,	40,	-41,	56,
				15,	-45,	100,	61,	-31,
				-53,	-71,	-13,	3,	21);

				function ex2($ar) {
					$max = max($ar);
					$min = min($ar);
					$max_index = array_search($max, $ar);
					$min_index = array_search($min, $ar);
					foreach($ar as $i) {
					    echo $i . " ";
					}
					echo "<br>";
					echo "max is: "  .$max . " position: " .$max_index. "<br>";
					echo "min is: " . $min . " position: " .$min_index. "<br>";
				}

				ex2($a20);
				?>
		</h2>	
		3.<h2 style="border-radius: 6px; margin: 6px; border: 1px solid white; padding: 3px">
			<?php 
				$a15 = array(49,	57,	-5,	28,	-36,
					-41,	-41,	70,	-20,	-33,
					98,	64,	32,	11,	91);

				function ex3($ar) {
					$odd = array();
					foreach($ar as $a) {
					    echo $a . " ";
					}
					echo "<br>";
					foreach ($ar as $key => $value) {
					    if ($key % 2 == 1) {
					        $odd[] = $value;
					    }
					}
					echo "Odd indexed numbers: <br>";

					foreach($odd as $i) {
					    echo $i . " ";
					}
					echo "<br>";
					$min = min($odd);

					echo "min is: " . $min ;
				}

				ex3($a15);
				?>
		</h2>
		4.<h2 style="border-radius: 6px; margin: 6px; border: 1px solid white; padding: 3px">
			<?php 
				$a30 = array(-87, 96,	-45,	-197,	41,
						-74,	81,	36,	26,	-94,
						-98,	-66,	22,	-44,	-39,
						8,	-17,	132,	-59,	8,
						10,	23,	-57,	-38,	82,
						39,	-75,	22,	-28,	-53);

				function ex4($ar) {
					$max_index = array_search(max($ar), $ar);
					$min_index = array_search(min($ar), $ar);
					$sub_array = array();
					$sum = 0;
					foreach($ar as $i) {
					    echo $i . " ";
					}
					echo "<br>";
					echo " position: " .$min_index. "<br>";
					echo " position: " .$max_index. "<br>";

					foreach ($ar as $key => $value) {
					    if ($key >=$min_index && $key <= $max_index) {
					        $sub_array[] = $value;
					    }
					}
					foreach($sub_array as $i) {
					    echo $i . " ";
					    if($i > 0) {
					        $sum += $i;
					    }
					}
					echo "<br> sum of positive numbers: " .$sum;
				}

				ex4($a30);
				?>
		</h2>
		5.<h2 style="border-radius: 6px; margin: 6px; border: 1px solid white; padding: 3px">
			<?php 
				$a15 = array(49,	5,	-5,	28,	-36,
					-41,	-41,	70,	-20,	-33,
					98,	64,	32,	11,	91);

				function ex5($ar) {
					$sum = 0;
					foreach ($ar as $key => $value) {
					    echo $value . " ";
					    if($value > 0) {
					        $sum += $value;
					    }
					}
					foreach ($ar as $key => $value) {
					    if($value == 5) {
					        array_splice($ar,$key,1,$sum);
					    }
					}
					echo "<br> Sum is: ".$sum."<br>";
					foreach($ar as $i) {
					    echo $i . " ";
					}
									}
					ex5($a15);
				?>
		</h2>
		6.<h2 style="border-radius: 6px; margin: 6px; border: 1px solid white; padding: 3px">
			<?php 
				$a12 = array(49,	57,	-5,	28,	-36,
					-41,	-41,	70,	-20,	-33,
					98,	64);

				function ex6($ar) {
					$sum = 0;
					foreach($ar as $i) {
					    echo $i . " ";
					    if($i < 0) {
					        $sum += $i;
					    }
					}
					echo "<br>";
					echo "sum is: "  .$sum . "<br>";
				}
				
				ex6($a12);
				?>
		</h2>	
		7.<h2 style="border-radius: 6px; margin: 6px; border: 1px solid white; padding: 3px">
			<?php 
				$a20 = array(32,	16,	-99,	132,	-76,
					36,	8,	40,	-41,	56,
					15,	-45,	100,	61,	-31,
					-53,	-71,	-13,	3,	21);

				function ex7($ar) {
					$max = max($ar);
					$max_index = array_search($max, $ar);
					foreach($ar as $i) {
					    echo $i . " ";
					}
					echo "<br>";
					echo "max is: "  .$max . "<br> position: " .$max_index. "<br>";

				}
				
				ex7($a20);
				?>
		</h2>
		8.<h2 style="border-radius: 6px; margin: 6px; border: 1px solid white; padding: 3px">
			<?php 
				$a18 = array(49,	57,	-5,	28,	-36,
					-41, 65, 82, -4,	-49,	70,	-20,	-33,
					98,	64,	32,	11,	91);

				function ex8($ar) {
					$odd = array();
					foreach($ar as $a) {
					    echo $a . " ";
					}
					echo "<br>";
					foreach ($ar as $key => $value) {
					    if ($key % 2 == 1) {
					        $odd[] = $value;
					    }
					}
					echo "Odd indexed numbers: <br>";

					foreach($odd as $i) {
					    echo $i . " ";
					}
					echo "<br>";
					$min = min($odd);

					echo "min is: " . $min ;

				}
				
				ex8($a18);
				?>
		</h2>
		9.<h2 style="border-radius: 6px; margin: 6px; border: 1px solid white; padding: 3px">
			<?php 
				$a17 = array(-87, -159, 45, -17,	81, -74, 35);

				function ex9($ar) {
					$max_index = array_search(max($ar), $ar);
					$min_index = array_search(min($ar), $ar);
					$sub_array = array();
					$sum = 0;
					$count = 0;
					foreach($ar as $i) {
					    echo $i . " ";
					}
					echo "<br>";
					echo " position: " .$min_index. "<br>";
					echo " position: " .$max_index. "<br>";

					foreach ($ar as $key => $value) {
					    if ($key >=$min_index && $key <= $max_index) {
					        $sub_array[] = $value;
					    }
					}
					foreach($sub_array as $i) {
					    echo $i . " ";
					    if($i > 0) {
					        $sum += $i;
					        $count++;
					    }
					}
					echo "<br>";
					echo "sum is: "  .$sum . "<br>";
					echo "count is: " . $count;
				}
				
				ex9($a17);
				?>
		</h2>	
		10.<h2 style="border-radius: 6px; margin: 6px; border: 1px solid white; padding: 3px">
			<?php
				$a14= array(49,	5,	-5,	28,	-36,
					-41,	-41,	7,	-20,	-33,
					98,	64,	32,	11);

				function ex10($ar) {
					$sum = 0;

					foreach ($ar as $key => $value) {
					    echo $value . " ";
					    if($value > 0) {
					        $sum += $value;
					    }
					}
					foreach ($ar as $key => $value) {
					    if($value == 7) {
					        array_splice($ar,$key,1,$sum);
					    }
					}
					echo "<br> Sum is: ".$sum."<br>";
					foreach($ar as $i) {
					    echo $i . " ";
					}
				}
				
				ex10($a14);
				?>
		</h2>
		11.<h2 style="border-radius: 6px; margin: 6px; border: 1px solid white; padding: 3px">
			<?php
				$a17 = array(32,	16,	-99,	132,	-76,
					36,	8,	40,	-41,	56,
					15,	-45,	100,	61,	-31,
					-53,	-71);

				function ex11($ar) {
					$max = max($ar);
					$min = min($ar);
					$max_index = array_search($max, $ar);
					$min_index = array_search($min, $ar);
					foreach($ar as $i) {
					    echo $i . " ";
					}
					echo "<br>";
					echo "max is: "  .$max . " position: " .$max_index. "<br>";
					echo "min is: " . $min . " position: " .$min_index. "<br>";
				}
				
				ex11($a17);
				?>
		</h2>	
		12.<h2 style="border-radius: 6px; margin: 6px; border: 1px solid white; padding: 3px">
			<?php
				$a15 = array(49,	57,	-5,	28,	-36,
					-41, 65, 82, -4,	-49,	70,	-20,	-33,
					98,	64);

				function ex12($ar) {
					$odd = array();
					foreach($ar as $a) {
					    echo $a . " ";
					}
					echo "<br>";
					foreach ($ar as $key => $value) {
					    if ($key % 2 == 1) {
					        $odd[] = $value;
					    }
					}
					echo "Odd indexed numbers: <br>";

					foreach($odd as $i) {
					    echo $i . " ";
					}
					echo "<br>";
					$max = max($odd);

					echo "max is: " . $max ;	
				}
				
				ex12($a15);
				?>
		</h2>		
	</section>
</body>
</html>