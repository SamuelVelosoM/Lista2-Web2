<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Questão3</title>
    </head>
    <body>
        <?php
        $cont=1;
        $maior = 0;
        $indice=0;
        $soma=0;
        for ($i=1;$i<31; $i++) {
            $matriz[$i] = $cont++;
            print ($matriz[$i]." ");
            
            //valor maior
            $teste_maior = $matriz[$i];
            if ($maior < $teste_maior) {
                $maior = $teste_maior;
                //índice
                $indice = $i;
            }
        
            //soma
            $soma+=$matriz[$i];        
        } 

        $media=$soma/30;

        print ("<br><br><br>O maior valor é: ".$maior."<sub>(".$i.",0)</sub>");
        print ("<br>O resultado da soma é: ".$soma);
        print ("<br>A média é: ".$media);
        ?>
    </body>
</html>
