<html>
    <head>
        <title> Países africanos </title>
		<?php include 'lib/app.php'; ?>
    </head>

<body>
        <br>
        <h1> Países africanos </h1>

	<?php
		$link = bancoConecta();

		$sql = <<<EOT

			SELECT Name, Population, LifeExpectancy, GNP
				FROM country
				WHERE Continent = 'Africa'


		EOT;
	?>   

	<table  class="table table-striped table-sm table-bordered">
		<thead >
			<tr>
				<th scope="col">Nome</th>
				<th scope="col">População</th>
				<th scope="col">Expectativa de vida</th>
                <th scope="col">PIB</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach(executaSelect($link,$sql) as $linha) { ?> 
				<tr>
					<td><?=$linha['Name']?></td>
					<td><?=$linha['Population']?></td>
					<td><?=$linha['LifeExpectancy']?></td>
                    <td><?=$linha['GNP']?></td>
				</tr>
			<?php }  ?>
		</tbody>
	</table>
</body>
</html>