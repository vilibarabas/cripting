

<html>
	<head>
		<link rel="stylesheet" type="text/css" href="css/style.css" media="screen">
		<link rel="stylesheet" type="text/css" href="css/bootsrap.css" media="screen">
	</head>	
	<body id="body1">
		<br />
		</br>
		<div id="content">
			<form action="afisare.php"  method="post">
				<table>
					<tr>
						<td><h3 class="title">&nbsp;Tip Criptare:</h3></td>
						<td>
						<center><select name="select_cript" style="text-align:center">
							<option value="">
								
							</option>
							<option value="Cezar">
								Cezar
							</option>
							<option value="Permutare">
								Permutare
							</option>
							<option value="Transpozitie">
								Transpozitie
							</option>
							<option value="ECB">
								ECB
							</option>
						</select>
						</center>
						</td>
						<td rowspan="4">
						<input type="text" name="introduce" style="margin-left: 50px;width: 350px; height: 150px"></input>
						</td>
					</tr>
					<tr>
						<td><h3 class="title">&nbsp;Numar deplasare: </h3></td>
						<td>
							<select name="deplasare">
								<option value="">
									
								</option>
								<option value="1">
									1
								</option>
								<option value="2">
									2
								</option>
								<option value="3">
									3
								</option>
								<option value="4">
									4
								</option>
								<option value="5">
									5
								</option>
								<option value="6">
									6
								</option>
								<option value="7">
									7
								</option>
								<option value="8">
									8
								</option>
								<option value="9">
									9
								</option>
							</select>
						</td>
					</tr>
					<tr>
						<td><h3 class="title">&nbsp;Criptare: </h3></td>
						<td>
							<input type="submit" name="Criptare"></input>
						</td>
					</tr>
					<tr>
						
					</tr>
				</table>
			</form>
		</div>
	</body>
	
</html>