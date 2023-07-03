<?php
    $array_matchs = [
        [
           'match' => 'Lakers - Nuggets',
           'results'=> '102 - 99'
        ],
        [
            'match' => 'Magic - Celtics',
            'results'=> '100 - 125' 
        ],
        [
            'match' => 'Trail Blazers - Warriors',
            'results'=> '105 - 104'
        ],
        [
            'match' => 'Cavaliers - Knicks',
            'results'=> '113 - 115'
        ],
        [
            'match' => 'Suns - Spurs',
            'results'=> '130 - 110'
        ],
        [
            'match' => 'Bucks - Bulls',
            'results'=> '125 - 90'
        ]      
    ]
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
                <?php foreach($array_matchs as $match) { ?>
                    <li>
                        <?php echo $match['match']." - ".$match['results']; ?>
                    </li>
                <?php } ?>
            </ul>
        </div>
    </body>
</html>