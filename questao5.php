<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Questão5</title>
    </head>
    <body>
        <?php
            $sites = array(
                "Marshmello",
                "Deadmau5",
                "Alan Walker",
                "Imagine Dragons",
                "Eminem",
                "Skillet",
                "Linkin Park",
                "Kamaitachi",
                "Charlie Brown Jr.",
                "Alok"
            );
            print "<select>";
                foreach ($sites as $nome) {                
                    print "<option>".$nome."</option>";                    
                }
            print ("</select>");


        ?>
    </body>
</html>