<?php

    $numero = $_POST["numero"];
    $data = $_POST["data"];
    $firma = $_POST["firma"];
    $endereco = $_POST["endereco"];
    $complemento = $_POST["complemento"];
    $bairro = $_POST["bairro"];
    $cidade = $_POST["cidade"];
    $estado = $_POST["estado"];
    $cep = $_POST["cep"];
    $cnpj = $_POST["cnpj"];
    $inscr = $_POST["inscr"];
    $telefone = $_POST["telefone"];
    $celular = $_POST["celular"];
    $email =  $_POST["email"];
    $obs = $_POST["obs"];
    

    function validaCNPJ($cnpj = null) {
        // função do site https://www.geradorcnpj.com/script-validar-cnpj-php.htm
        if(empty($cnpj)) {
            return false;
        }
        $cnpj = preg_replace("/[^0-9]/", "", $cnpj);
        $cnpj = str_pad($cnpj, 14, '0', STR_PAD_LEFT);
        if (strlen($cnpj) != 14) {
            return false;
        }
        else if ($cnpj == '00000000000000' || 
            $cnpj == '11111111111111' || 
            $cnpj == '22222222222222' || 
            $cnpj == '33333333333333' || 
            $cnpj == '44444444444444' || 
            $cnpj == '55555555555555' || 
            $cnpj == '66666666666666' || 
            $cnpj == '77777777777777' || 
            $cnpj == '88888888888888' || 
            $cnpj == '99999999999999') {
            return false;
         } else {   
            $j = 5;
            $k = 6;
            $soma1 = "";
            $soma2 = "";
            for ($i = 0; $i < 13; $i++) {
                $j = $j == 1 ? 9 : $j;
                $k = $k == 1 ? 9 : $k;
                $soma2 += ($cnpj{$i} * $k);
                if ($i < 12) {
                    $soma1 += ($cnpj{$i} * $j);
                }
                $k--;
                $j--;
            }
            $digito1 = $soma1 % 11 < 2 ? 0 : 11 - $soma1 % 11;
            $digito2 = $soma2 % 11 < 2 ? 0 : 11 - $soma2 % 11;
            return (($cnpj{12} == $digito1) and ($cnpj{13} == $digito2));
        }
    }
  
    if(empty($firma))
    {
        echo "<p><b>O campo firma deve ser preenchido.</b></p>";
    } 
    
    if( !validaCNPJ($cnpj)){
        echo "<p><b>Insira um CNPJ valido</b></p>";
    }

    if(empty($celular && $telefone && $email)){
        echo "<p><b>Preencha um campo de contato: celular, email ou telefone</b></p>";
        include "trab.php";
       die;
    }
    else{
        if(!empty($email) && !filter_var($email, FILTER_VALIDATE_EMAIL)){
            echo "<p><b>Insira um email valido</b></p>";
            include "trab.php";
            die;
        }
    }



   











    $f = fopen("formulario.csv","a");
    fputcsv($f, array( $numero, $data, $firma, $endereco, $complemento, $bairro, $cidade, $estado,
     $cep, $cnpj, $inscr, $telefone, $celular,$email ));
    fclose($f);

 
    header('location: resposta.html');

?>