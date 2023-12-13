<?php

try{

$dsn ='mysql:hots=localhost;dbname=colyseum';

$username ='root';

$password ='';

$database = new PDO($dsn, $username, $password);

}
catch(Exception $message){
    echo "ya un probleme <br>". $message;
}

?>