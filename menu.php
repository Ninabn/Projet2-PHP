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
    
<h1>Votre resultat:</h1>

<?php  
    for ($multi = 0; $multi <= 10; $multi++)
{
    echo htmlspecialchars($_POST['selection']) * $multi.'<br />';
}
?>

<a href="index.php"><button type="button" class="btn btn-primary">Retour</button></a>



</body>
</html>