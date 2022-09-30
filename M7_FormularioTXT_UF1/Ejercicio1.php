<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>FormulariTXT</title>
    </head>
    <body>
        <form method= "POST" action= "">
            <label>USER: </label>
            <input type="text" name="user"><br>
        
            <?php
            $artistas= file("./free.txt");
            foreach ($artistas as $line_num => $artistas) {
                echo "<label>{$artistas}</label>";
                echo "<input type= 'checkbox' name= $artistas><br>";
            }
            ?>
            <input type='submit' value= 'ENVIAR'>
        </form>
        
        <?php
        foreach ($_POST as $key => $value){
            if ($key == "user"){
                $file = fopen("comandes.txt", "w");
                fwrite($file, "USERNAME: ".$value."\n\nPRODUCTES:\n");
            }
    
            if ($value == "on"){
                fwrite($file, "-".$key."\n");
            }

            fclose(file);
        }
        ?>

    </body>
</html>