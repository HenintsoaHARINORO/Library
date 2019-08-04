<?php
echo date('l F jS, Y - g:ia',time());
try {
    $pdo_options[PDO::ATTR_ERRMODE]=PDO::ERRMODE_EXCEPTION;

    $pdo = new pdo('mysql:dbname=library;host=localhost', 'root', null,$pdo_options);
    $req=$pdo->prepare('INSERT INTO student( Name ,Author) VALUES(?,?)');
    $req->execute(array($_POST['name'],$_POST['bookName']));
  header('Location:time.php');
}
catch(exception $e)
{
    die('Erreur:' .$e->getMessage());
}


?>