<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<center>
		<table width="25%" border="4">
			<tbody><tr align="left" valign="right">
				<td>
					<center><img src="my toff.jpg" width="30%" border="2"></center>
					<hr width="100%">
					<?php
					$prenom="Mouhamadou Atoumane";
					$nom="Diop";
					$age="56";
					$email="atoumane2019@gmail.com";
					$adresse="Rufisque, Dangou Residence";
				$personne=array(
					"nom"=>"Diop",
					"prenom"=>"Mouhamadou Atoumane ",
					"age"=>"56",
					"email"=>"atoumane2019@gmail.com",
					"adresse"=>"Rufisque,Dangou Residence");
				foreach ($personne as $key => $value) {
					echo $key. ":" .$value."<br/>"; 
					
				     }
				     ?>

				</td>
			</tr>
				
			</tbody>
			   
		</table>
	</center>

	
</body>
</html>