<?php
echo date('l F jS, Y - g:ia',time());
try {
    $pdo_options[PDO::ATTR_ERRMODE]=PDO::ERRMODE_EXCEPTION;

    $pdo = new pdo('mysql:dbname=library;host=localhost', 'root', null,$pdo_options);

    }
catch(exception $e)
{
    die('Erreur:' .$e->getMessage());
}


?>



<html>
<body>
<form action="content.php" method="post">
<input type="text" id="name">
<input type="text" id="bookName">
    <button type="submit">Submit</button>
</form>
</body>
</html>
