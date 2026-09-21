<?php 

$num1 = "";
$num2 = "";
$operacao = "";

if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        $num1 = floatval($_POST['num1']);
        $num2 = floatval($_POST['num2']);
        $operacao = ($_POST['operacao'] ?? "");
    }

?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>Calculadora</title>
</head>
<body>
    <h1>Calculadora</h1>
    <form action="" method="POST">
    <h4>Digite dois números</h4>

    <label for="num1"></label>
    <input type="number" name="num1" id="num1" placeholder="Digite um número" value="<?= $num1 ?? "" ?>">

    <label for="num2"></label>
    <input type="number" name="num2" id="num2" placeholder="Digite outro número" value="<?= $num2 ?? ""?>">

    <h4>Escolha uma operação</h4>

    <label for="operacao">Adição</label>
    <input type="radio" name="operacao" id="adicao" value="adicao" <?= $operacao === 'adicao' ? 'checked' : "" ?> require>

    <label for="operacao">Subtração</label>
    <input type="radio" name="operacao" id="subtracao" value="subtracao" <?= $operacao === 'subtracao' ? 'checked' : "" ?>require>

    <label for="operacao">Multiplicação</label>
    <input type="radio" name="operacao" id="multiplicacao" value="multiplicacao" <?= $operacao === 'multiplicacao' ? 'checked' : "" ?>require>

    <label for="operacao">Divisão</label>
    <input type="radio" name="operacao" id="divisao" value="divisao" <?= $operacao === 'divisao' ? 'checked' : "" ?>require>

    <button id="enviar" type="submit">Enviar</button>
    </form>


<?php 

if(empty($num1))
    {
        echo "";
    }elseif(empty($num2))
    {
        echo "";
    }elseif(empty($num1) && (empty($num2)))
    {
        echo "";
    }else
    {
        echo "<p>O 1° número: $num1 <br> O 2° número: $num2</p>";
    }

    switch ($operacao) {
        case 'adicao':
           echo "<p>O resultado da adição é: <strong>".($num1 + $num2)."</strong></p>";
            break;
        
        case 'subtracao':
            echo "<p>O resultado da subtração é: <strong>".($num1 - $num2)."</strong></p>";
            break;

        case 'multiplicacao':
            echo "<p>O resultado da multiplicação é: <strong>".($num1 * $num2)."</strong></p>";
            break;

        case 'divisao':
            echo "<p>O resultado da divisão é: <strong>" . number_format($num1 / $num2, 2, ",", ".") . "</strong></p>";
            break;

        default:
            echo "<p>Escolha uma das Operações</p>";
            break;
            
    }

?>
</body>
</html>