<?php

    $local = $_POST['valor'];

        $tabela = fopen("violencia-domestica-df.csv","r");
        $total = 0;

        $linha = fgetcsv($tabela);

        while($linha){
            if($linha[0] == $local){
                $total = $linha[1] +$linha[2]+$linha[3]+$linha[4]+$linha[5]+$linha[6];
                echo $linha[0];
                // echo "<table>";
                // echo "<tr><td>2011</td><td>", $linha[1], "</td></tr>";
                // echo "<tr><td>2012</td><td>", $linha[2], "</td></tr>";
                // echo "<tr><td>2013</td><td>", $linha[3], "</td></tr>";
                // echo "<tr><td>2014</td><td>", $linha[4], "</td></tr>";
                // echo "<tr><td>2015</td><td>", $linha[5], "</td></tr>";
                // echo "<tr><td>2016</td><td>", $linha[6], "</td></tr>";
                // echo "<tr><td><b>Total</b></td><td>", $total, "</td></tr>";
                // echo "</table>";

                $linha=fgetcsv($tabela);
            }
        }
        
        fclose($tabela);
        
?>