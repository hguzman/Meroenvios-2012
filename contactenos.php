<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Metropolitana de Envios</title>
        <link href="estilos/principal.css" rel="stylesheet" type="text/css"/>
        <link href="estilos/estiloMenu.css" rel="stylesheet" type="text/css"/>
    <script type="text/javascript"
      src="http://maps.googleapis.com/maps/api/js?key=AIzaSyD4fndGEL4Jv6UEVI-yUW0Pv9NVvI75N9c&sensor=true">
    </script>
    <script type="text/javascript">
      function initialize() {
        var mapOptions = {
          center: new google.maps.LatLng(10.987008333333332, -74.791225),
          zoom: 12,
          mapTypeId: google.maps.MapTypeId.ROADMAP
        };
        var map = new google.maps.Map(document.getElementById("map_canvas"),
            mapOptions);
        var coordenadas = new google.maps.LatLng(10.987008333333332, -74.791225);
        //Establecemos las coordenadas del punto
        var marker = new google.maps.Marker({ //opciones
            position: coordenadas,
            //Decimos que la posición es la de la variable 'coordenadas'
            map: map,
            //Nombre del mapa
            title:"Metro Envios"
            //Titulo (visible cuando colocamos el ratón sobre el punto)
        });
            var message = "Metro Envios Ltda<br/>Dirección: Carrera 44 B No 53 B- 19<br>Teléfono: 3703040 Celular: 3135091937<br/>Email: <a href='mailto:sgarcia@metropolitanadeenvios.com'>sgarcia@metropolitanadeenvios.com</a>";
        var infowindow = new google.maps.InfoWindow(
            { content: message,
                size: new google.maps.Size(50,50)
            });
        google.maps.event.addListener(marker, 'click', function() {
             infowindow.open(map,marker);
        });        
      }
    </script>
    </head>
    <body onload="initialize()">
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
                        <div id="map_canvas" style="width:550px; height:300px"></div>
<!--                        <table border="1">
                            <tr>
                                <td colspan="2" align="center">
                                    <h2>Datos De contacto</h2>
                                </td>
                            </tr>
                            <tr>
                                <td>Dirección:</td>
                                <td>Carrera 44 B No 53 B- 19</td>
                            </tr>
                            <tr>
                                <td>Telefono:</td>
                                <td>3703040</td>
                            </tr>
                            <tr>
                                <td>Celular:</td>
                                <td>3135091937</td>
                            </tr>
                            <tr>
                                <td colspan="2" align="center">
                                    Emil
                                </td>
                            </tr>
                            <tr>
                                <td>Silvana Schlegel</td>
                                <td>sgarcia@metropolitanadeenvios.com</td>
                            </tr>
                            <tr>
                                <td>Marcela Rodelo</td>
                                <td>mrodelo@metropolitanadeenvios.com</td>
                            </tr>

                        </table>-->
                    </div>
                </div>
            </div>
            <?php include("footer.php"); ?>
        </div>
    </body>
</html>
