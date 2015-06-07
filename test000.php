<?php
$nume=$_POST['a'];
$prenume=$_POST['b'];
$nr=$_POST['c'];
$nm=$_POST['d'];
$ng=$_POST['e'];
//echo "$nume, $prenume,$nr,$nm,$ng";
$c=mysqli_connect("localhost","root","admin");
mysqli_select_db($c,"xiia");
$query = mysqli_query($c,"SELECT * FROM products_table") or die(mysqli_error());
while($result = mysqli_fetch_array($query))
{
	print_r($result);
  echo PHP_EOL;
}die;
mysqli_query($c,"insert into elevi (nume,prenume,n_rom,n_mate,n_geog) values ('$nume','$prenume',$nr,$nm,$ng)") or die(mysqli_error());
//mysqli_query($c,"update elevi set media=(n_rom+n_mate+n_geog)/3");
echo "Elevi admisi sunt : <br>";
$result=mysqli_query($c,"select * from elevi where (media>=6 and n_rom>=5 and n_mate>=5 and n_geog>=5)");
echo "<table border='10'>";
echo "<tr><td>Nume</td><td>Prenume</td><td>Nota 
Rom</td><td>Nota Mate</td><td>Nota Geografie </td><td>Media </td></tr>";
while($row = mysqli_fetch_array( $result ))
{echo "<tr><td>$row[0] </td>";
echo "<td>$row[1] </td>";
echo "<td>$row[2] </td>";
echo "<td>$row[3] </td>";
echo "<td>$row[4] </td>";
echo "<td>$row[5] </td></tr>"; 
}
echo "</table>";
echo "Elevi respinsi sunt : <br>";
$r=mysqli_query($c,"select * from elevi where (media<6 or n_rom<5 or n_mate<5 or n_geog<5)");
echo "<table border='10'>";
echo "<tr><td>Nume</td><td>Prenume</td><td>Nota 
Rom</td><td>Nota Mate</td><td>Nota Geografie </td><td>Media </td></tr>";
while($row = mysqli_fetch_array( $r ))
{echo "<tr><td>$row[0] </td>";
echo "<td>$row[1] </td>";
echo "<td>$row[2] </td>";
echo "<td>$row[3] </td>";
echo "<td>$row[4] </td>";
echo "<td>$row[5] </td></tr>"; 
}
echo "</table>";
?>













///<?php
//
//
//function calcul($x, $y, $adanc)
//{
//	static $zile=0, $urc=0;
//	
//	if($urc < $adanc)
//	{
//		$urc += $x;
//		if($urc >= $adanc)
//		{
//			echo 'A URCAT IN ', $zile, ' zile';
//		}
//		$urc -= $y;
//		
//		$zile++;
//		calcul(3, 2, 30);
//	}
//	else
//	{
//		echo $zile, PHP_EOL;
//	}
//}
//
//$zile = calcul(5, 2, 30);
//
//echo 'A URCAT IN ', $zile, 'zile', PHP_EOL;
//?>