
<?php
 
 //IF STATEMENT PRACTICE//
 
 /*$user = "Callum";
 $age = "24";
 
 if($user == "Callum" && $age == "24")
	{
		echo ("Your name is Callum        ");
		echo ("\n");
	} else {
				echo ("This is not you!");
		   }
if ($user == "Callum" || !$age = "24")
	{
		echo("You said your age was 24!!!!");
	}

*/
	
//SWITCH STATEMENT PRACTICE//
/*$animal = "Dog";

switch ($animal)
	{
		case "Cat":
		echo "you didn't ask for a cat!";
		break;
		
		case "Dog":
		echo "You did ask for a Dog!";
		break;
		
		default:
		echo "You need to pick an animal: ";
		break;
	}
*/


//FOR LOOPS PRACTICE//


/*for($i = 0; $i < 10; $i++)
	{
		echo $i;
	}
*/

//VARIABLES WITH THE FOR LOOP//
/*$iTest = 99;
$forLoop = 101;

for($i = $iTest; $i < $forLoop; $i++) 
	{
		echo $i;
	}
*/

//ARRAY + FOREACH LOOP//
/*$array = array(1, 2, 3, 4, 5, 6);

foreach ($array as $number)
	{
		echo $number;
	}
*/

//USING A WHILE LOOP//
/*$i = 0;

while($i<10)
	{	
		echo ($i);
		$i++;
	}
*/
?>

<html>
<body>
<?php

	function testFunction()
		{
			echo ("This is the first test function, all this does is print out this information");
		}
		
	function multipleArguements($a, $b)
		{
			$c = $a + $b;
			$total = $c +$a / $b;
				echo ("$a + $b = $c, $c + $a / $b = $total");
				echo ("Your total therefore is: $total");
		}
		
	function ifTrueFunction($a,$b,$isTrue = true)
		{
			if($isTrue)
			{
				$total = $a + $b;
				echo ("$total");
			}
			if(!$isTrue)
			{
				$total = $a - $b;
				echo("$total");
			}
		}
?>


<?php testFunction(); ?>
<p>I have called the function called testFunction() in the above section</p>
<br>
<br>
<p> BELOW IS A MULTIPLE ARGUEMENT MATH FUNCTION, NUMBERS ASSIGNED IN PARAMETERS ARE USED TO REPLACE $A, $B </p>	
<?php multipleArguements(5, 10); ?>
<br>
<br>
<p> BELOW IS NESTED IF STATEMENT IN A FUNCTION</p>
<?php IfTrueFunction(5,10,true); ?>
<?php IfTrueFunction(5,10,false); ?>
</body>
</html>













