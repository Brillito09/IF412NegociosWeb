<?php
$msg="";
$txt1="";
if(isset($_POST["btn1"])){
  $txt1=$_POST["txt1"];
  $msg="Buenos Dias $txt1";
}

?>
<!DOCTYPE html>
  <html>
  <head>
    <meta charset="utf-8"/>
    <title>Ejercicio1 PHP</title>
  </head>
  <body>
    <h1>Ejercicio 1 PHP</h1>
    <form action="Eje1.php" method="POST">
      <labe for="text">Nombre</label>
        <input type="text" id="txt1" name="txt1" values="<?php echo $txt1 ?>"/>
      </br>
      <input type="submit" id="btn1" name="btn1" value="Procesae"/>
    </form>
    <div class="msg">
    <?php
     echo $msg;
    ?>
  </div>
  </body>
  </html>
