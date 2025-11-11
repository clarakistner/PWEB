<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
</head>
<body>
    <?php
        $imc = ($_GET['peso']/($_GET['altura']*$_GET['altura']));
        echo $imc;
        if(empty($imc)){
            header("Location:formulario.php?info=Os valores não podem ser nulos");
        }
    ?>
</body>
</html>