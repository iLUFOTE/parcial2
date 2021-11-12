<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $numero = rand(1,4);
        $color = ["green", "blue", "red", "yellow"];
        $numcolor = rand(0,3);
        echo "Numero Generado =" . $numero ."<br>";
        echo "<div style='color:" .$color[$numcolor]."'>color generado</div>";
        
        if ($numero == 1){
    ?>
        <h1 style="color: <?php echo $color [$numcolor];?>">Titulo de la pagina 1</h1>

    <?php } elseif($numero == 2){ ?>
        <h2 style="color: <?php echo $color [$numcolor];?>">Titulo de la pagina 2</h2>

    <?php } elseif($numero == 3){ ?>
        <h3 style="color: <?php echo $color [$numcolor];?>">Titulo de la pagina 3</h3>
        
    <?php } else { ?>

        <h4 style="color: <?php echo $color [$numcolor];?>">Titulo 4 de la pagina</h4>
    <?php } ?>
    
    
</body>
</html>