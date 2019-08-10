<?php
echo date('l F jS, Y - g:ia', time());
try {

    $pdo = new PDO(
        'sqlite:./mydb.sq3',
        null,
        null,
        [PDO::ATTR_PERSISTENT => true]
    );

    $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;


} catch (exception $e) {
    die('Erreur:' . $e->getMessage());
    header("time.php");
}

if (ISSET($_POST['submit'])) {
    $nom = $_POST['name'];
    $author = $_POST['bookName'];
    $req = $pdo->prepare('INSERT INTO student(nom,Author)  VALUES(:nom,:Author)');
    $req->execute(["nom" => $nom, "Author" => $author]);
}
?>
