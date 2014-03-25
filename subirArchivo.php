<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Metropolitana de Envios</title>
        <link href="estilos/principal.css" rel="stylesheet" type="text/css"/>
        <link href="estilos/estiloMenu.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div id="todo">            
            <?php include("header.php"); ?>
            <div id="content">
                <div id="izquierda">
                    <div class="formulario">
                        <div><label>Partner</label></div>
                        <div><a href="http://www.aaa.com.co/" target="_blank"><img src="imagenes/png/aaa.png"/></a></div>
                        <div><a href="http://www.metrotel.net.co/" target="_blank"><img src="imagenes/png/metrotel.png"/></a></div>
                    </div>
                </div>
                <div id="centro">
                    <div id="informacion">
                        <form action="subearchivo.php" method="post" enctype="multipart/form-data"> 
                            <table border="1">
                                <tr>
                                    <td>Tipo de Documento</td>
                                    <td>
                                        <SELECT NAME="tipoDoc">
                                            <option value="0" selected>-- Seleccione --</option>
                                            <option value="1">Poliza</option>
                                            <option value="2">Solicitud</option>
                                            <option value="3">Guia</option>
                                        </SELECT>                                                    
                                    </td>
                                </tr>
                                <tr>
                                    <td>N° Documento</td>
                                    <td><input type="text" name="numDoc" size="20" maxlength="100"></td>
                                </tr>
                                <tr>
                                    <td>Comentarios</td>
                                    <td><textarea name="comentarios" cols="50" rows="5"></textarea></td>
                                </tr>
                                <tr>
                                    <td colspan="2"><input name="userfile" type="file"></td>
                                </tr>
                                <tr>
                                    <td colspan="2"><input type="submit" value="Guardar"></td>
                                </tr>
                            </table>
                                <input type="hidden" name="MAX_FILE_SIZE" value="200000"> 

                        </form>     

                    </div>
                </div>
            </div>
            <?php include("footer.php"); ?>
        </div>
        
    </body>
</html>
