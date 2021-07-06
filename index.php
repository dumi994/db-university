<?php 
## 1 Definire le costanti per la connessione
define ("DB_SERVERNAME", "localhost");
define ("DB_USERNAME", "root");
define ("DB_PASSWORD", "root");
define ("DB_NAME", "university");
define ("DB_PORT", '3306');

//var_dump(DB_SERVERNAME, DB_USERNAME, DB_PASSWORD, DB_NAME);


## 2 Stabiliamo connessione con il database

$connection = new mysqli(DB_SERVERNAME, DB_USERNAME, DB_PASSWORD, DB_NAME, DB_PORT);
//var_dump($connection);

## 3 verificare la connessione
if ($connection && $connection->connect_error){
    echo "Connessione fallita: " . $connection->connect_error;
    die();
}

## 4 eseguaiamo la query se la connessione è stata stabilita
echo 'Connessione avvenuta con successo';
$sql = "SELECT * FROM projects";
$results = $connection->query($sql);
//var_dump($results);

## 5 vediamo se ci sono risultati e cicliamo al loro interno

if ($results && $results->num_rows > 0){
    //ciclare tra i risultati e mostrarli a schermo
    while($project = $results->fetch_array()){
        ?>
        <h1><?= $project['title'];?></h1>
        <p><?= $project['description'];?></p>

        <?php
    }
}elseif($results){
    echo 'Nessuno risultato';
}else{
    echo 'Errore nella query';
}

## 6 Chiudi la connessione
$connection->close();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>



</body>
</html>