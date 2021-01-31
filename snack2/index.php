<!-- PHP Snack 2:
Passare come parametri GET name, mail e age e verificare (cercando i metodi che non
conosciamo nella documentazione) che:
1. name sia più lungo di 3 caratteri,
2. mail contenga un punto e una chiocciola
3. age sia un numero.
Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->


<?php 
   $email = $_GET["email"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email</title>
</head>
<body>

<input type="text" placeholder="Inserisci la tua mail"> 
<p><?php 
  if(empty($email)){
      if(strpos($email, "@") !== false && strpos(email, ".") !==) {
          echo "Accesso riuscito"
      } else {
          echo = "Accesso negato"
      }
  }
?></p>


    
</body>
</html>