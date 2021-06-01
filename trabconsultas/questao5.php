<html>
    <head>
        <title> Países europeus </title>
		<?php include 'lib/app.php'; ?>
    </head>

<body>
        <br>
        <h1> Países europeus </h1>

	<?php
		$link = bancoConecta();

		$sql = <<<EOT

			SELECT Name, GNP, LifeExpectancy, Population
				FROM country
				WHERE Continent = 'Europe'

		EOT;
	?>   

	<table  class="table table-striped table-sm table-bordered">
		<thead >
			<tr>
				<th scope="col">Nome</th>
				<th scope="col">PIB</th>
				<th scope="col">Expectativa de vida</th>
                <th scope="col">População</th>
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