<?php
$numero1=0;
$numero2=0;
$iteraciones=10;
$msg="";

if(isset($_POST["btnPrc"])){
    $numero1= intval($_POST["numero1"]);
    $numero2= intval($_POST["numero2"]);
    $newValue= $numero1;
    for($i=1; $i<$numero2; $i++){
        $newValue *= $numero1;
    }
    $msg="El valor: $numero1 a la potencia $numero2 es igual a $newValue";
}
if(isset($_POST["btnRev"])){
    $numero1= intval($_POST["numero1"]);
    $iteraciones=intval($_POST["iteraciones"]);
    $contador=1;
    while($iteraciones>0){
        $msg .= "$contador). Producto:". ($numero1*$iteraciones). "</br>";
        $contador ++;
        $iteraciones --;
    }
}
if(isset($_POST["btnFac"])){
    
}
?>
<!DOCTYPE html>
    <html>
        <head>
            <title>Ejercicio 2</title>
            <meta charset="utf-8">
        </head>
        <body>
            <h1>Ejercicio 2 PHP</h1>
            <form action="Ejercicio2.php" method="post">
                <label for="numero1">Numero 1</label>
                <input type="text" id="numero1" name="numero1" value="<?php echo $numero1;?>"/>
                </br>
                <label for="numero2">Numero 2</label>
                <input type="text" id="numero2" name="numero2" value="<?php echo $numero2;?>"/>
                </br>
                <label for="iteraciones">Numero de iteraciones</label>
                <select name="interaciones" id="iteraciones">
                    <option value="10">10</option>
                    <option value="20">20</option>
                    <option value="50">50</option>
                </select>
                </br>
                <input type="submit" name="btnPrc" value="Procesar" id="btnPrc"/>
                <input type="submit" name="btnRev" value="Reversar" id="btnRev"/>
                <input type="submit" name="btnFac" value="Factorial" id="btnFac"/>
            </form>
            <div>
                <?php echo $msg; ?>
            </div>
        </body>
    </html>