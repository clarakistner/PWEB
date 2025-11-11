<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    página html

    <?php
       echo "<br>"."olá mundo<br>";
       $nome="clara";
       echo $nome;
    ?>
    <h2>tipo de dados PHP</h2>
    <?php
        $a = 5;
        $b = 2;
        echo "<p>".$a+$b."<p>";
        $nota = $a+$b;
    ?>
    <p><?php echo $a+$b ?></p>
    <h2>Operador ternário</h2>
    <?php 
    $situacao = $nota >6 ? 'aprovado' : 'reprovado';
    echo $situacao
    ?>
    <h2>WHILE</h2>
    <?php 
        $i = 0;
        while($i<10){
            $i++;
            ?>
            <p> <?php echo $i; ?> </p>
            <?php
        }
       
    ?>
    <?php
    $vetor = array (1, 2, 3, 4, 5);
    for($i = 0; $i < count($vetor) ; $i++){
        echo $vetor[$i]."<br/>";
    }
     foreach($vetor as $elemento){
            echo "elemento: ".$elemento. "<br/>";
        }

    $vetor2 = array ('nome' => 'Clara', 'sobrenome' => 'Kistner', 'cpf' => '000.000.000-01');
    echo "Nome: ".$vetor2['nome']."<br/>";
    echo "Sobrenome: ".$vetor2['sobrenome']."<br/>";
    echo "CPF: ".$vetor2['cpf']."<br/>";
    ?>
    <h2>Variáveis de ambiente em PHP</h2>
    <?php 

    echo "$_GET".$_GET['nome'];
    echo "SERVER: ". var_dump ($_SERVER);
    
    ?>



</body>
</html> 