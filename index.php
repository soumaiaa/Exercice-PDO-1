<?php 
// ex1
require_once('./database.php');

$request = $database->query('SELECT * FROM clients');

$cliens = $request->fetchAll();

// var_dump($clients);
// // ex2
$request = $database->query('SELECT * FROM showtypes');

$spectacles = $request->fetchAll();

// var_dump($spectacles);
// // ex3
$request = $database->query('SELECT * FROM clients  LIMIT 0, 20');

$clientsVins = $request->fetchAll();

// var_dump($clients);
// ex4
$request = $database->query('SELECT * FROM clients INNER JOIN cards ON  cards.cardNumber = clients.cardNumber WHERE cardTypesId=1');

$clints = $request->fetchAll();

// var_dump($clients);

// // ex5
$request = $database->query('SELECT * FROM clients  WHERE lastName LIKE "M%" ORDER BY clients.lastName');

$clintes = $request->fetchAll();

// var_dump($clients);
// ex6
$request = $database->query('SELECT performer, title, date, startTime FROM shows ORDER BY title');

$litles = $request->fetchAll();

// var_dump($litles);
// ex7
$request = $database->query('SELECT * FROM clients LEFT JOIN cards ON  cards.cardNumber = clients.cardNumber');

$clients = $request->fetchAll();

// var_dump($clients);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  
       <?php
    //    ex1
       echo "ex1 <br>";
       foreach($cliens as $clien){
        echo $clien['lastName'] ." ". $clien['firstName'] . "<br>";
       }
       echo '<hr>';
       echo '<hr>';
       //ex2
       echo "ex2 <br>";
       foreach($spectacles as $spectacle){
        echo $spectacle['type']."<br>" ;
       }
       echo '<hr>';
       echo '<hr>';
    //   ex3
       echo "ex3 <br>";
      foreach($clientsVins as $clientsVin){
        echo $clientsVin['lastName'] . "<br>";
       }
    echo '<hr>';
    echo '<hr>';
    //ex4
    echo "ex4 <br>";
    foreach($clints as $clint){
        echo $clint['lastName'] ."<br>";
    }
    echo '<hr>';
    echo '<hr>';
    // ex5
    echo "ex5 <br>";
    foreach($clintes as $clinte){
       echo "Nom :" . $clinte['lastName']."<br>"
       . "Prénom :" . $clinte['firstName']. "<br> <hr>";
    }
    echo '<hr>';
    echo '<hr>';
//    ex6
    echo "ex6 <br>";
    foreach ($litles as $litle){
    echo $litle['title'] . " par " . $litle['performer'] . ", le ". $litle['date'] ." à " . $litle['startTime']."<br> <hr>";
     }
    echo '<hr>';
    echo '<hr>';
    // ex7
    echo "ex7 <br>";
    foreach ($clients as $client){
    if($client['cardTypesId']===1){
        echo "Nom :" . $client['lastName']."<br>"
       . "Prénom :" . $client['firstName']. "<br>"
       ."Date de naissance :" . $client['birthDate'] . "<br>"
      . "Carte de fidélité : oui <br>" 
      ."Numéro de carte :". $client['cardNumber'] ."<hr>";

    }else if($client['cardTypesId']!=1 && $client['cardNumber']!=null){
        echo "Nom :" . $client['lastName']."<br>"
        . "Prénom :" . $client['firstName']. "<br>"
        ."Date de naissance :" . $client['birthDate'] . "<br>"
       . "Carte de fidélité : non <br>" 
       ."Numéro de carte :". $client['cardNumber']. "<hr>";
       } else if( $client['cardNumber']===null){
        echo "Nom :" . $client['lastName']."<br>"
        . "Prénom :" . $client['firstName']. "<br>"
        ."Date de naissance :" . $client['birthDate'] . "<br>"
       . "Carte de fidélité : non <br>" 
       ."Numéro de carte :null <hr>";  
    }
}


       ?>
   
</body>
</html>