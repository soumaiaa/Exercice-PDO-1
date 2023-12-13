<?php 
// ex1
require_once('./database.php');

$request = $database->query('SELECT * FROM clients');

$clients = $request->fetchAll();

var_dump($clients);
// ex2
$request = $database->query('SELECT * FROM showtypes');

$spectacles = $request->fetchAll();

var_dump($spectacles);
// ex3
$request = $database->query('SELECT * FROM clients  LIMIT 20');

$clients = $request->fetchAll();

var_dump($clients);
// ex4
$request = $database->query('SELECT * FROM clients where card = TRUE');

$clients = $request->fetchAll();

var_dump($clients);
// ex5
$request = $database->query('SELECT * FROM clients ORDER BY clients . lastName ASC');

$clients = $request->fetchAll();

var_dump($clients);
// ex6
$request = $database->query('SELECT * FROM clients');

$clients = $request->fetchAll();

var_dump($clients);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <ul>
       <?php
    //    ex1
       foreach($clients as $client){
        echo $client['lastName'] ." ". $client['firstName'];
       }
       echo '<hr>';
       echo '<hr>';
       //ex2
       foreach($spectacles as $spectacle){
        echo $spectacle['type'] ;
       }
       echo '<hr>';
       echo '<hr>';
      //ex3
      foreach($clients as $client){
        echo $clients;
    }
    echo '<hr>';
    echo '<hr>';
    //ex4
    if($clients['card']===1){
        echo $clients;
    }
    // ex5
    foreach($clients as $client){
    if($clients['lastName'[0]]=== "M"){
       echo "Nom :" . $clients['lastName']."<br>"
       . "Prénom :" . $clients['firstName']. "<br>";
 
    }
}
//    ex6
foreach($clients as $client){
    if($clients['card']=== 1){
       echo "Nom :" . $clients['lastName']."<br>"
       . "Prénom :" . $clients['firstName']. "<br>"
       ."Date de naissance :" . $clients['birthDate'] . "<br>"
      . "Carte de fidélité : oui" 
      ."Numéro de carte :". $clients['cardNumber'];

    }elseif ($clients['card']=== 0){
        echo "Nom :" . $clients['lastName']."<br>"
        . "Prénom :" . $clients['firstName']. "<br>"
        ."Date de naissance :" . $clients['birthDate'] . "<br>"
       . "Carte de fidélité : non" 
       ."Numéro de carte :". $clients['cardNumber'];
       }
       
    }
    


       ?>
   </ul> 
</body>
</html>