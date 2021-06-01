<html>
    <head>
        <title> Países sul-americanos </title>
		<?php include 'lib/app.php'; ?>
    </head>

<body>
        <br>
        <h1> Países sul-americanos </h1>

	<?php
		$link = bancoConecta();

		$sql = <<<EOT

			SELECT Name, GNP, Population, LifeExpectancy
				FROM country
				WHERE Continent = 'South America'

		EOT;
	?>   

	<table  class="table table-striped table-sm table-bordered">
		<thead >
			<tr>
				<th scope="col">Nome</th>
				<th scope="col">PIB</th>
				<th scope="col">População</th>
				<th scope="col">Expectativa de vida</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach(executaSelect($link,$sql) as $linha) { ?> 
				<tr>
					<td><?=$linha['Name']?></td>
					<td><?=$linha['GNP']?></td>
					<td><?=$linha['Population']?></td>
					<td><?=$linha['LifeExpectancy']?></td>
				</tr>
			<?php }  ?>
		</tbody>
	</table>
</body>
</html>