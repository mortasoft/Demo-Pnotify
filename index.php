<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="pnotify.custom.min.css" rel="stylesheet" type="text/css"/>
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
   
        <h1>Demo de Notificaciones</h1>
        
        <input type="button" id="btn1" name="btn1" value="Mostrar notificacion de error" onclick='mostrarNotificacion("Error","Ocurrio un error")'> </input>
        
        <input type="button" id="btn2" name="btn2" value="Mostrar notificacion de correcto" onclick='mostrarNotificacion("Exito","Informacion almacenada correctamente")'> </input>
        <br><br>
        
        <input type="text" id="txt1" name="txt1" value=""> </input>
        <input type="button" id="btn2" name="btn2" value="Mostrar notificacion" onclick='mostrarNotificacion("Exito",txt1.value)'> </input>
        
        <script src="jquery-2.2.3.min.js" type="text/javascript"></script>
        <script src="pnotify.custom.min.js" type="text/javascript"></script>
        <script src="script.js" type="text/javascript"></script>
        
    </body>
</html>
