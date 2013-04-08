<?php 
$i=1;
$j=1;
$sum=0;
$mul = 1;
$evensum = 0;
$sum100 = 0;
while($i<=10){
	$sum = $sum + $i;
	$mul = $mul * $i;
$i++;
}

echo "sum=".$sum . "  mul =" .$mul;

while($j<=100){
		if($j % 2 == 0){
			echo $j;		
			if($j!=100) echo ",";
			
			$evensum =  $evensum + $j;
		}
		$j++;
		
}
echo "<br>". $evensum;

for($k=1;$k<=100;$k++){
		$sum100  = $sum100 + $k;

}
echo "<br>sum from 1 to 100== ".$sum100."<br>";


for($p=1;$p<=5;$p++){
	for($q = 1; $q <= $p; $q++ )
	{
		echo $q. " ";
	}
	echo "<br>";
}

for($p=5;$p<=5;$p--){
	for($q = 1; $q <= $p; $q++ )
	{
		echo $q. " ";
	}
	echo "<br>";
}






?>

