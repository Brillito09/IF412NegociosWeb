<?php

//Ejempo de arreglos en php

    $arreglo= array(1,2,3,4,"Texto", false);
    print_r($arreglo);
    
    echo "<br/>";
    
    $arreglo2= array("nombre" =>"Brigith", "Apellido"=>"Zaldivar", "edad"=>20);
    print_r($arreglo2);
    echo "<br/>";
    $arreglo2[]="Este no tiene llave";
    $arreglo2["Titulo"]="Sr.";
    print_r($arreglo2);
    echo "</br>";
    
    $personas= array();
    
    $personas[]=$arreglo2;
    $personas[]=$arreglo;
    print_r($personas);
    
    echo "</br>";
    
    foreach($personas as $key=> $value){
        echo "$key ->";
        if (is_array($value)){
            foreach($value as $key2=>$value2)
            {
                echo "</br>....... $key2 -> $value2";
            }
        }else{
            echo $value;
        }
        print_r($value);
        echo "</br>";
    }
    
?>