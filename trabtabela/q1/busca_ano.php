<?php

    $ano = $_GET["valor"];
    
        if($ano<2011 || $ano>2016){
            echo "<h2>Ano não disponível. Tente outro<h2>";
            die();
        }
        else{
            $coluna = $ano - 2010;
        
            $tabela = fopen("violencia-domestica-df.csv","r");

            if(!$tabela){
                echo "<h2> Arquivo não disponível<h2>";
            }
            else{
                echo "<table>";
                while(($row = fgetcsv($tabela)) != FALSE){
                    echo "<tr><td>", $row[0], "</td><td>", $row[$coluna], "</td><tr>";
                }
                echo "</table>";
            }

            fclose($tabela);
        }






?>