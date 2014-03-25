<?php

$server="##";
$usurio="";
$contrasena="";

//conecto con la base de datos
	$db=mysql_connect($server,$usurio,$contrasena);
//selecciono la BBDD 
	mysql_select_db("",$db);


//tomo el valor de un elemento de tipo texto del formulario 
$tipoDocumento = $_POST["tipoDoc"]; 
$numDocumento = $_POST["numDoc"]; 
$comenta = $_POST["comentarios"]; 
$ruta="";
$uploads_dir = 'imagenes/comprobantes';

if ($tipoDocumento!="0" && $numDocumento!="" && $comenta!=""){

    //datos del arhivo 
    $nombre_archivo = $_FILES['userfile']['name']; 
    $tipo_archivo = $_FILES['userfile']['type']; 
    $tamano_archivo = $_FILES['userfile']['size']; 
    //compruebo si las características del archivo son las que deseo 

    if (!((strpos($tipo_archivo, "gif") || strpos($tipo_archivo, "jpeg")) && ($tamano_archivo < 200000))) { 
            echo "La extensión o el tamaño de los archivos no es correcta. <br><br><table><tr><td><li>Se permiten archivos .gif o .jpg<br><li>se permiten archivos de 100 Kb máximo.</td></tr></table>"; 
    }else{ 
            if (move_uploaded_file($_FILES['userfile']['tmp_name'], "$uploads_dir/$nombre_archivo")){ 
            echo "El archivo ha sido cargado correctamente.<br/><br/>"; 
            echo "<a href='subirArchivo.php'>REGRESAR</a>"; 
            $ruta='/imagenes/comprobantes/'.$nombre_archivo;
            }else{ 
            echo "Ocurrió algún error al subir el fichero. No pudo guardarse."; 
            $ruta="/algoentro";
            } 
    }     
   $sql="INSERT INTO envios (tipo_numero, numero, comentarios, ruta) VALUE (".$tipoDocumento.",".$numDocumento.",'".$comenta."','".$ruta."');";
   mysql_query($sql,$db);   
   echo "Registro Insertado";    
}else{
    echo "Faltan datos";
}
?>
