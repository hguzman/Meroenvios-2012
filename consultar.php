<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <script src="/js-global/FancyZoom.js" type="text/javascript"></script>
        <script src="/js-global/FancyZoomHTML.js" type="text/javascript"></script>
        <title>Metropolitana de Envios</title>
        <link href="estilos/principal.css" rel="stylesheet" type="text/css"/>
        <link href="estilos/estiloMenu.css" rel="stylesheet" type="text/css"/>
    </head>
    <body onload="setupZoom()">
        <div id="todo">            
            <?php include("header.php"); ?>
            <div id="content">
                <div id="izquierda">
                    <div class="formulario">
                        <div><label>Partner</label></div>
                        <div><a href="http://www.aaa.com.co/" target="_blank"><img src="imagenes/png/aaa.png"/></a></div>
                        <div><a href="http://www.metrotel.net.co/" target="_blank"><img src="imagenes/png/metrotel.png"/></a></div>
                        <div><a href="http://www.curaduria1baq.com.co/" target="_blank"><img src="imagenes/png/curadunuevo.png"/></a></div>
                    </div>
                </div>
                <div id="centro">
                    <div id="informacion">
                        <table border="1" cellspacing=1 cellpadding=2 style="font-size: 8pt">
                        <tr>
                            <td colspan="6"><font face="verdana"><b>Consulta de Envios</b></font></td>
                        </tr>
                        <tr>
                        <td><font face="verdana"><b>Id</b></font></td>
                        <td><font face="verdana"><b>Tipo</b></font></td>
                        <td><font face="verdana"><b>Número</b></font></td>
                        <td><font face="verdana"><b>Fecha Carga</b></font></td>
                        <td><font face="verdana"><b>Comentarios</b></font></td>
                        <td><font face="verdana"><b>Imagen</b></font></td>
                        </tr>
                        <?php
                        $server="";
                        $usurio="";
                        $contrasena="";

                        //conecto con la base de datos
                                $db=mysql_connect($server,$usurio,$contrasena);
                        //selecciono la BBDD 
                                mysql_select_db("",$db);

                        $tipoDocumento = $_POST["tipoDoc"]; 
                        $numDocumento = $_POST["numDoc"]; 

                                $consulta="select * from envios WHERE tipo_numero=".$tipoDocumento." AND numero=".$numDocumento.";";
                                $rssalida=mysql_query($consulta,$db);
                                $numero = 0;
                //                $fila=mysql_fetch_assoc($rssalida);
                        while($row = mysql_fetch_array($rssalida))
                        {
                            echo "<tr><td width=\"10%\"><font face=\"verdana\">" . 
                                    $row["id_registro"] . "</font></td>";
                            echo "<td width=\"10%\"><font face=\"verdana\">" . 
                                    $row["tipo_numero"] . "</font></td>";
                            echo "<td width=\"25%\"><font face=\"verdana\">" . 
                                    $row["numero"] . "</font></td>";
                            echo "<td width=\"25%\"><font face=\"verdana\">" . 
                                    $row["fecha"] . "</font></td>";
                            echo "<td width=\"25%\"><font face=\"verdana\">" . 
                                    $row["comentarios"]. "</font></td>";    
                            echo "<td width='25%'><a href='".(file_exists($_SERVER{'DOCUMENT_ROOT'}.$row["ruta"])? $row["ruta"]:"/imagenes/jpg/sinimagenMetroenvios.jpg")."'><img src='/imagenes/png/lupa.png' width='24' height='24' border='0' alt=''/></a></td></tr>";    
                            $numero++;
                        }
                        echo "<tr><td colspan=\"15\"><font face=\"verdana\"><b>Número: " . $numero . 
                            "</b></font></td></tr>";

                        mysql_free_result($rssalida);
                        mysql_close($db);

                //        echo $fila["id_registro"]."<br/>";        
                //        echo $fila["tipo_numero"]."<br/>";        
                //        echo $fila["numero"]."<br/>";        
                //        echo $fila["comentarios"]."<br/>";        
                //        echo $fila["ruta"]."<br/>";        
                //        echo "<a href='".$fila["ruta"]."'><img src='".$fila["ruta"]."' width='161' height='123' border='0' alt=''/></a>";
                        ?>
                        </table>      
                        <br/>
                        <br/>
                        <a href="index.php">Regresar</a>
                    </div>
                </div>                
            </div>
            <?php include("footer.php"); ?>            
        </div>                
    </body>    
</html>
