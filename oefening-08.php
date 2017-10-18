<?php 

function greySquare($i) {
    return "<div class='rect' style='background: rgb($i, $i, $i)'></div>";
}

for ($i = 0; $i <= 50; $i++) {
    echo greySquare($i);
}

?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>oefening-08</title>
    <style>
        .rect {
            width: 50px;
            height: 50px;
            margin: 3px;
            display: inline-block;
        }
    </style>
</head>
<body>
    
</body>
</html>