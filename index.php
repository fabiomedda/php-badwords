<?php
/*
Istruzioni:
Creare una variabile con un paragrafo di testo.
Visualizzare a schermo il paragrafo con la relative lunghezza 
e sostituire la badword passata in GET con tre *.
*/

$var_text = "Lorem ipsum dolor sit amet consectetur adipisicing elit.";

$badword = $_GET["badword"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords</title>
</head>
<body>
    <h3><?php echo $var_text . " " . strlen($var_text) . " caratteri";?></h3>
    <h3><?php echo $badword;?></h3>
    <h3><?php echo str_replace($badword, "***", $badword);?></h3>
</body>
</html>