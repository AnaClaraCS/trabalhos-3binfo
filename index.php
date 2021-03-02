<html>
        <!-- A empresa MINE HORTA VALE VERDE te contratou para informatizar um formulário que 
        atualmente é mantido em papel. Sua tarefa é desenvolver um formulário em PHP com os
        mesmos dados do formulário em papel e armazenar as informações em um arquivo CSV. O 
ok     Modelo do formulário encontra-se disponível como um recurso adicionado a esta tarefa.
        Antes de salvar o formulário, você deve fazer algumas validações: 
        ok    O campo Firma é obrigatório,
             pelo menos 1 contato (telefone, celular ou email) deve ser preenchido e 
             o CNPJ deve ser um CNPJ válido (utilize a função disponível em 
             https://www.geradorcnpj.com/script-validar-cnpj-php.htm )-->
	<head>
        <title>Mine horta vale verde</title>



	</head>
	<body>
<?php


    $numero = "";
    $data = "";
    $firma = "";
    $endereco = "";
    $complemento = "";
    $bairro = "";
    $cidade = "";
    $estado = "";
    $cep = "";
    $cnpj = "";
    $inscr = "";
    $telefone = "";
    $celular = "";
    $email = "";
	$obs = "";

?>


<h1>Formulário de Cadastro de Cliente </h1>
<form method="post" action="processo.php">

    <p>Número: <input type="text" name="numero" size="10" value="<?=$numero?>"></p>
    <p>Data: <input type="date" name="data" size="10" value="<?=$data?>"></p>
    <p>Firma: <input type="text" name="firma" size="80" value="<?=$firma?>"></p>
    
    <p>Endereço: <input type="text" name="endereco" size="80" value="<?=$endereco?>"></p>
    <p>Complemento: <input type="text" name="complemento" size="80" value="<?=$complemento?>"></p>

    <p>Bairro: <input type="text" name="bairro" size="80" value="<?=$bairro?>"></p>
    <p>Cidade: <input type="text" name="cidade" size="80" value="<?=$cidade?>"></p>
    <p>Estado: <input type="text" name="estado" size="80" value="<?=$estado?>"></p>

    <p>CEP: <input type="text" name="cep" size="80" value="<?=$cep?>"></p>
    <p>CNPJ: <input type="text" name="cnpj" size="80" value="<?=$cnpj?>"></p>
    <p>Inscr: <input type="text" name="inscr" size="80" value="<?=$inscr?>"></p>

    <p>Telefone: <input type="text" name="telefone" size="80" value="<?=$telefone?>"></p>
    <p>Celular: <input type="text" name="celular" size="80" value="<?=$celular?>"></p>
    <p>Email: <input type="text" name="email" size="80" value="<?=$email?>"></p>
    
    <p>Observação:</p>
    <p><textarea name="obs" rows="3" cols="80"><?=$obs?></textarea></p>
    
    <p><button type="submit" onclick="verificar()">Enviar</button></p>
</form>




	</body>
</html>