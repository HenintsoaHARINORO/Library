<?php
echo date('l F jS, Y - g:ia',time());
try {

$pdo = new PDO(
    'sqlite:./mydb.sq3',
    null,
    null,
    [PDO::ATTR_PERSISTENT=> true]
);

    $pdo_options[PDO::ATTR_ERRMODE]=PDO::ERRMODE_EXCEPTION;


    }
catch(exception $e)
{
    die('Erreur:' .$e->getMessage());
}

if(ISSET($_POST['submit'])){
    $nom=$_POST['name'];
    $author=$_POST['bookName'];
    $req=$pdo->prepare('INSERT INTO student1(nom,Author)  VALUES(:nom,:Author)');
    $req->execute(["nom"=>$nom,"Author"=>$author]);
}
?>



<html>
<title></title>
<head>
    <link rel="stylesheet" href="./bootstrap-4.3.1-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./bootstrap-4.3.1-dist/js/bootstrap.min.js">
</head>
<body>
<form action="content.php" method="post">
<input type="text" id="name">
<input type="text" id="bookName">
    <button type="submit">Submit</button>
</form>
</body>
</html>
