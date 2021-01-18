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

<?php
    session_start();
    $reponse = $_POST['nombre'];
    $resultat = $_SESSION['end'] ;


 
if ($resultat  == $reponse) {
    echo "<p class='alert-success'>Bonne réponse !!</p>";
    
}else {
    echo "<p class='alert-danger'>Mauvaise réponse !!</p>";
    echo "<p class='mot'> blablabla</p>";
}

//var_dump($resultat);
//var_dump($reponse)
?>

<a href="index.php"><button type="button" class="btn btn-primary">Retour</button></a>

</body>
</html>