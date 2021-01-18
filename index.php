<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="styles.css">
    <title>Document</title>
</head>
<body>


   <!--Table de 3--> 

   <h2>Afficher le table de 3</h2>
   <a href="tablede3.php"><button type="button" class="btn btn-primary">Table de 3</button></a>


<!--Menu deroulant-->

<h2>Selection d'un multiple</h2>
<form action="menu.php" method="post" >

<select id="Menu" class="form-select" aria-label="Default select example" id="selection" name="selection">
<option selected value="1">One</option>
<option value="2">Two</option>
<option value="3">Three</option>
<option value="4">Four</option>
<option value="5">Five</option>
<option value="6">Six</option>
<option value="7">Seven</option>
<option value="8">Height</option>
<option value="9">Nine</option>
<option value="10">Ten</option>
</select>

<button type="submit" class="btn btn-primary">Résultat</button>
</form>


<!--Choix boutons radio-->
<h2>Afficher avec des boutons radio</h2>

<form action="radio.php" method="post" >

<div class="form-check">
  <input class="form-check-input" type="checkbox" value="1" id="flexCheckDefault" name="selections[]" id="radio1">
  <label class="form-check-label" for="flexCheckDefault">
    1
  </label>
</div>

<div class="form-check">
  <input class="form-check-input" type="checkbox" value="2" id="flexCheckDefault" checked name="selections[]" id="radio2">
  <label class="form-check-label" for="flexCheckDefault">
    2
  </label>
</div>

<div class="form-check">
  <input class="form-check-input" type="checkbox" value="3" id="flexCheckDefault" name="selections[]">
  <label class="form-check-label" for="flexCheckDefault">
    3
  </label>
</div>

<div class="form-check">
  <input class="form-check-input" type="checkbox" value="4" id="flexCheckDefault" name="selections[]">
  <label class="form-check-label" for="flexCheckDefault">
    4
  </label>
</div>

<div class="form-check">
  <input class="form-check-input" type="checkbox" value="5" id="flexCheckDefault"name="selections[]">
  <label class="form-check-label" for="flexCheckDefault">
    5
  </label>
</div>

<div class="form-check">
  <input class="form-check-input" type="checkbox" value="6" id="flexCheckDefault"name="selections[]">
  <label class="form-check-label" for="flexCheckDefault">
    6
  </label>
</div>

<div class="form-check">
  <input class="form-check-input" type="checkbox" value="7" id="flexCheckDefault"name="selections[]">
  <label class="form-check-label" for="flexCheckDefault">
    7
  </label>
</div>

<div class="form-check">
  <input class="form-check-input" type="checkbox" value="8" id="flexCheckDefault"name="selections[]">
  <label class="form-check-label" for="flexCheckDefault">
    8
  </label>
</div>

<div class="form-check">
  <input class="form-check-input" type="checkbox" value="9" id="flexCheckDefault"name="selections[]">
  <label class="form-check-label" for="flexCheckDefault">
    9
  </label>
</div>

<div class="form-check">
  <input class="form-check-input" type="checkbox" value="10" id="flexCheckDefault"name="selections[]">
  <label class="form-check-label" for="flexCheckDefault">
    10
  </label>
</div>

<button type="submit" class="btn btn-primary">Résultat</button>

</form>

<!--Hasard-->

<h2>Une multiplication au hasard</h2>

<?php
session_start();
//$choose = array (1, 2, 3, 4, 5, 6, 7, 8, 9, 10);

// for ($multi = 0; $multi <= 10; $multi++)
 //{
 //    echo rand(array $choose, $multi);
 //    array_rand ( array$choose , $multi = 1 );
 //}

 $a=array(1,2,3,4,5,6,7,8,9,10);
$random_keys=array_rand($a,3);
echo ($resultat1 = $a[$random_keys[0]])." X ".($resultat2 = $a[$random_keys[1]])." = ";
 
$_SESSION['end'] = $resultatend  = $resultat1 * $resultat2;
?>

<p>Votre reponse:</p>
<form method="post" action="random.php">
<div class="input-group mb-3">
  <input name="nombre" type="text" class="form-control" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1">
</div>
<button class="btn btn-outline-secondary" type="submit" id="button-addon1">Valider</button>
</form>


</body>
</html>