<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
    <title>Document</title>
</head>
<body>
    
<h1>Vos resultats:</h1>

<?php  

if($_POST['selections']){

    $numberadd = $_POST['selections'];
    
    foreach ($numberadd as $items)
    {
            echo "Resultats de la table de : " .$items;
        
        for ($i = 0; $i <= 10; $i++)
        {
            echo '<p>' .$i * $items. '</p>';   
        }
    }
}

?>

<a href="index.php"><button type="button" class="btn btn-primary">Retour</button></a>

</body>
</html>