<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soma</title>
</head>
<body>
        <form action="" method="get">
            <label for="inputa">A</label>
            <input type="number" id="inputA" name="a">

            <label for="inputb"></label>
            <input type="number" id="inputB" name="b">
            
            <input type="submit" value="Somar">
        </form>
        <?php if((empty($_GET['a'])) && (empty($_GET['b']))) { ?>

        <p> <?php echo "os valores não podem ser nulos!" ?> </p>

         <?php }else {
             echo "soma = ".$_GET['a']+$_GET['b']; 
         } ?>

</body>
</html>