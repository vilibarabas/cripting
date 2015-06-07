<?php
define("ENCRYPTION_KEY", "!@#$%^&*");

require 'function_class.php';

include "function.php";
$cript_name = $_POST['select_cript'];
//$cript_type = $_POST['select_cript_type'];
$text = $_POST["introduce"];
$deplasare = $_POST['deplasare'];

$type = 

$cr = new SelectClass($cript_name, $text, $deplasare, 1);
$textCript = $cr->callFunction();
$cr = new SelectClass($cript_name, $textCript, $deplasare, 0);
$textDecript = $cr->callFunction();

if($cript_name === 'ECB')
{
	$textCript = encrypt($text, ENCRYPTION_KEY);
	$textDecript = decrypt($textCript, ENCRYPTION_KEY);
}

?>

<html>
	<head>
		<title>Criptare</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
			<link rel="stylesheet" type="text/css" href="css/bootsrap.css" media="screen">
	</head>
	<body id="body_afisare">

<?php
echo "</br>";
echo "
		<a href='index.php'><h1 id='inapoi'>INAPOI</h1><a>
		<table id='tabela_criptare' border=1>
			<tr>
				<td>
					<h3>Metoda Criptare</h3>
				</td>
				<td>
					" .  $cript_name."
				</td>
			</tr>
			<tr>
				<td>
					<h3>Text introdus</h3>
				</td>
				<td>
					" .  $text."
				</td>
			</tr>
			<tr>
				<td>
					<h3>Text dupa criptare</h3>
				</td>
				<td>
					" .  str_replace(' ', '', $textCript)."
				</td>
			</tr>
			<tr>
				<td>
					<h3>Text dupa decriptare</h3>
				</td>
				<td>
					" .  str_replace(' ', '', $textDecript)."
				</td>
			</tr>
		</table>
";
?>

	</body>
</html>