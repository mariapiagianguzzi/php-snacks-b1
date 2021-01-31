<!-- PHP Snack 1:
Creiamo un array 'matches' contenente altri array i quali rappresentano 
delle partite di basket di un’ipotetica tappa del calendario. 
Ogni array della partita avrà una squadra di casa e una squadra ospite, 
punti fatti dalla squadra di casa e punti fatti dalla squadra ospite.
Stampiamo a schermo tutte le partite con questo schema:
Olimpia Milano - Cantù | 55 - 60
 -->
 <?php 
 $matches = [
     [
         squadra1 => "Los Angeles Lakers",
         punti1 => "80",
         squadraGuest => "Golden State Warriors ",
         puntiGuest => "50",
     ],
     [
        squadra1 => "Cleveland Cavaliers",
        punti1 => "60",
        squadraGuest => "Los Angeles Clippers ",
        puntiGuest => "30",
     ],
    [
        squadra1 => "Dallas Mavericks",
        punti1 => "40",
        squadraGuest => "Denver Nuggets",
        puntiGuest => "78",
    ],
    [
        squadra1 => "Los Angeles Lakers",
        punti1 => "80",
        squadraGuest => "Golden State Warriors ",
        puntiGuest => "50",
    ],
    [
        squadra1 => "Portland",
        punti1 => "47",
        squadraGuest => "Chicago Bulls ",
        puntiGuest => "85",
    ]
 ]
 ?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Squadre Snack 1</h1>
<p><?php 
    for ($i= 0; $i < count($matches); $i++) { 
        # code... Olimpia Milano - Cantù | 55 - 60 lo schema che devo seguire quindi:
        #metto la i dentro le parentesi quadre per indicare che deve prendere ogni elemento della mia array
        echo $matches[$i] ["squadra1"]. " - " .$matches[$i] ["squadraGuest"].  " / " .$matches[$i]["punti1"]. " - " .$matches[$i]["puntiGuest"];

    }

?></p>
      
</body>
</html>