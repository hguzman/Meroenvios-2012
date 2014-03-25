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
                    <div>
                        <form action="consultar.php" method="post" class="formulario">                    
                        <div>
                        <table>
                            <tr>
                                <td colspan="2"><div><label>Rastreo de envios</label></div></td>
                            </tr>
                            <tr>
                                <td>Buscar:</td>
                                <td>
                                <SELECT NAME="tipoDoc" id="desplegable">
                                    <option value="0" selected>-- Seleccione --</option>
                                    <option value="1">Poliza</option>
                                    <option value="2">Solicitud</option>
                                    <option value="3">Guia</option>
                                </SELECT>                                                    
                                </td>
                            </tr>
                            <tr>
                                <td>Criterio:</td>
                                <td><input type="text" name="numDoc" size="15" maxlength="100"></td>
                            </tr>
                            <tr>
                                <td colspan="2"><div><input type="submit" value="Buscar"/></div></td>
                            </tr>
                        </table>
                        </div>                            
                        </form> 

                    </div>
                    <div class="formulario">
                        <div><label>Partner</label></div>
                        <div><a href="http://www.aaa.com.co/" target="_blank"><img src="imagenes/png/aaa.png"/></a></div>
                        <div><a href="http://www.metrotel.net.co/" target="_blank"><img src="imagenes/png/metrotel.png"/></a></div>
                        <div><a href="http://www.curaduria1baq.com.co/" target="_blank"><img src="imagenes/png/curadunuevo.png"/></a></div>
                    </div>
                </div>
                <div id="centro">
                    <div id="animacion">
                        <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,29,0" width="550" height="100">
                        <param name="movie" value="imagenes/animaciones/animacionMetroenvios.swf" />
                        <param name="quality" value="high" />
                        <embed src="imagenes/animaciones/animacionMetroenvios.swf" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="550" height="100"></embed>
                        </object>
                    </div>
                    <div id="informacion">
                        <h2>Bienvenidos</h2>
                        <label>METROPOLITANA DE ENVIOS LTDA, es una organización de iniciativa privada y de orden legal, creada mediante escritura publica No 1.554 del 05 de junio de 1998 otorgada en la notaria 7ª de la ciudad de Barranquilla e inscrita en la cámara de comercio de Barranquilla bajo el registro mercantil No 259.763,. La Administración de Impuestos y Aduanas Nacionales expidió el NIT: 802.007.653-0, registrada ante el Ministerio de Comunicaciones con licencia 002274 de Octubre 10 de 2008 y prorrogada con licencia 1591 de 15 de septiembre de 2003. El domicilio principal es en la ciudad de Barranquilla. Dirección actual: Carrera 44 B No 53 B- 19.</label>
                    </div>
                </div>
            </div>
            <?php include("footer.php"); ?>
        </div>
    </body>
</html>
