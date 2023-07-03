<?php
    if(isset($_GET['name']) && isset($_GET['mail']) && isset($_GET['age'])){
        $name = $_GET['name'];
        $mail = $_GET['mail'];
        $age = $_GET['age'];
        
        if(strlen($name) > 3 && strpos($mail, '.') !== false  && strpos($mail, '@') !== false && is_numeric($age)){
            echo "Accesso Riuscito";
        } else {
            echo "Accesso Negato";
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Snacks Blocco 1</title>
</head>
    <body>
        <div>
            <form action="" method="GET">
                <label for="name"><strong>NOME:</strong></label>
                <input type="text" id="name" name="name" placeholder='Inserisci il nome' required>
                <label for="mail"><strong>E-MAIL:</strong></label>
                <input type="email" id="mail" name="mail" placeholder='Inserisci la mail' required>
                <label for="age"><strong>ETA':</strong></label>
                <input type="text" id="age" name="age" placeholder='Inserisci età' required>
                <input type="submit" value="INVIA">
            </form>
        </div>
    </body>
</html>