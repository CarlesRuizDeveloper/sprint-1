<?php
    $name = $_POST['name'];
    $mail = $_POST['mail'];
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wellcome</title>
</head>
<body>
    <?php
        echo "Wellcome ".$name."<br>";
        echo "Email: ". $mail;
    ?>
</body>
</html>