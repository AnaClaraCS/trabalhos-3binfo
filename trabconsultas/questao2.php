<html>
    <head>
        <title> Cidades brasileiras </title>
		<?php include 'lib/app.php'; ?>
    </head>

<body>
		<br>
        <h1> Cidades brasileiras </h1>

	<?php
		$link = bancoConecta();

		$sql = <<<EOT

			SELECT Name, Population
				FROM city
				WHERE CountryCode ='BRA'
				ORDER BY Name
		EOT;
	?>   

	<table  class="table table-striped table-sm table-bordered">
		<thead >
			<tr>
				<th scope="col">Cidade</th>
				<th scope="col">População</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach(executaSelect($link,$sql) as $linha) { ?> 
				<tr>
					<td><?=$linha['Name']?></td>
					<td><?=$linha['Population']?></td>
				</tr>
			<?php }  ?>
		</tbody>
	</table>
</body>
</html>