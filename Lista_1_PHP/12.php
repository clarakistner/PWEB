<?php
    function gerarNumeros(){
    
    if(isset($_POST["num"])){
        $num_user = $_POST["num"];
        $numeros = array_fill(0, $num_user, 0);
        
        $maior = $numeros[0];
        $menor = $numeros[0];
        $soma = 0;

        for($i = 0; $i < $num_user; $i++){
            $numeros[$i] = $i + 1;
            $soma = $soma + $numeros[$i];

        }
        
        $maior = max($numeros);
        $menor = min($numeros);

        echo "Soma dos números: " . $soma . "<br>";
        echo "Maior número: " . $maior . "<br>";
        echo "Menor número: " . $menor . "<br>";

    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array</title>
</head>
<body>
    <form action="" method="POST">
        <label for="num">Digite um número:</label><br></br>
        <input type="number" name="num">
        <input type="submit">
    </form>
    <?php gerarNumeros(); ?>
</body>
</html>