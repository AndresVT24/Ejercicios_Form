<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>t</title>
    </head>
    <?php
        if ($_GET["colors"]=="FOC"){
            echo "<body style= 'background-color:red'>";
        }

        if ($_GET["colors"]=="AIGUA"){
            echo "<body style= 'background-color:blue'>";
        }

        if ($_GET["colors"]=="TERRA"){
            echo "<body style= 'background-color:green'>";
        }

        else{
            echo "<body>";
        }

    ?>
    <form method="GET" selected>
        <select name="colors">
            <option <?php if ($_GET["colors"]== "FOC"){
                echo "selected";
            }   
            ?>
            >FOC</option>
            <option <?php if ($_GET["colors"]== "AIGUA"){
                echo "selected";
            }   
            ?>>AIGUA</option>
            <option <?php if ($_GET["colors"]== "TERRA"){
                echo "selected";
            }   
            ?>>TERRA</option>

        </select>
        <input type= "submit">
    </form>
    </body>
</html>