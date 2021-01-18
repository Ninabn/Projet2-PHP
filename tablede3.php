<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="styles.css">
    <title>Table de 3</title>
</head>
<body>
    
<p>La table de 3 est :</p>
<?php

$table = 3;
for ( $chiffre = 0; $chiffre <= 10; $chiffre++ ) 
{
    echo $chiffre * $table. '<br/>';
}
?>

<a href="index.php"><button type="button" class="btn btn-primary">Retour</button></a>


</body>
</html>