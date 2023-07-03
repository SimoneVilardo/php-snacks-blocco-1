<?php
    $arrayNum=[];

    while(count($arrayNum) < 15){
        $randomNum = rand(1,100);

        if(!in_array($randomNum, $arrayNum)){
            $arrayNum[] = $randomNum;
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
            <ul>
                <?php foreach($arrayNum as $num) { ?>
                    <li>
                        <?php echo $num ?>
                    </li>
                <?php } ?>
            </ul>
        </div>
    </body>
</html>