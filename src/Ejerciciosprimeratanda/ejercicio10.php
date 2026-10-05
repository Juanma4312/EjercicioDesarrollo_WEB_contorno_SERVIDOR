<?php
function generarNumeros(int $nivel): array
{
    $numeros = [];

    for ($i = 0; $i < $nivel; $i++) {
        $numero[] = rand(1, 4);
    }

    return $numeros;
}

$nivel = $_POST['nivel'] ?? 0;
$nivel++;
$num = $_POST['check_num'] ?? '';
$inNum = $_POST['in_num'] ??  '';

//compruebo si ha perdido o si sigue jugando

if (!empty($num) && !empty($inNum)) {
    //Falla los numeros?
    if($num !== $inNum){
        header("Location:ejercicio10_loose.php ?nivel=<$nivel");
    }
}

$nivel++

?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .hidden {
            display: none;
        }
    </style>
    <script>
        function ocultarNumeros() {
            setTimeout(
                function() {
                    document.getElementById('numeros').classList.add('hidden');
                    document.getElementById('formulario').classList.remove('hidden');;
                },
                3000
            );
        }
    </script>
</head>

<body onload="ocultarNumeros()">
    <h1>Simón dice</h1>


    <div id="numeros">
        <?php
        $num = implode(",", generarNumeros($nivel));
        echo  $num;
        ?>
    </div>

    <div id="formulario" class="hidden">

        <form action="" method="post">
            <label for="in_nums">Introduzca los numeros en orden.</label>
            //no me muestra los numeros
            <input type="text" name="in_num">
            <input type="hidden" name="nivel" value=<?= $nivel ?>>
            <input type="hidden" name="check_num" value=<?= $num ?>>
            <button type="submit">Jugar</button>
        </form>


    </div>


</body>

</html>