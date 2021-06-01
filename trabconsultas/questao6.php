<html>
    <head>
        <title> Países que falam francês </title>
		<?php include 'lib/app.php'; ?>
    </head>

<body>
        <br>
        <h1> Países que falam francês </h1>

	<?php
		$link = bancoConecta();

		$sql = <<<EOT

			SELECT country.Name, country.Continent, countrylanguage.IsOfficial, countrylanguage.Percentage
				FROM country, countrylanguage
				WHERE countrylanguage.Language = "French" AND country.Code = countrylanguage.CountryCode
		EOT;
	?>   

	<table  class="table table-striped table-sm table-bordered">
		<thead >
			<tr>
				<th scope="col">Nome</th>
				<th scope="col">Continente</th>
				<th scope="col">Oficial</th>
				<th scope="col">Percentual</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach(executaSelect($link,$sql) as $linha) { ?> 
				<tr>
					<td><?=$linha['Name']?></td>
					<td><?=$linha['Continent']?></td>
					<td><?=$linha['IsOfficial']?></td>
					<td><?=$linha['Percentage']?></td>
				</tr>
			<?php }  ?>
		</tbody>
	</table>
</body>
</html>