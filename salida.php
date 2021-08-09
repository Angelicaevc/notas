<?php

if(isset($_POST['nombre']) && $_POST['texto'] == true){

        $nombre = $_POST['nombre'];
        $texto = $_POST['texto'];
        
        $crear = fopen($nombre.'.txt', "x"); 
        $Abrir = fopen($nombre.'.txt', "a+"); 
        fwrite($Abrir, $texto); 

}

$resultado="";

$resultado.="<h3>Archivos</h3>";

$dir = scandir(getcwd(), 1); 

$arrlength = count($dir);
for($x = 0; $x < $arrlength; $x++) {
    $str = substr($dir[$x], -4);

    if($dir[$x] != "." && $dir[$x] != ".." ){
    if ($str == ".txt")
    {
        $resultado.= " <strong>Archivo de texto: </strong><i>".$dir[$x]."</i><br>";
    } elseif ($str == ".php"){
        $resultado.= " <strong>Archivo PHP: </strong><i>".$dir[$x]."</i><br>";
    }elseif ($str == "html"){
        $resultado.= " <strong>Archivo HTML: </strong><i>".$dir[$x]."</i><br>";
    }
    else{
        $resultado.= " <strong>Carpeta: </strong><i>".$dir[$x]."</i><br>";
    }
    }
}

echo $resultado;

?>