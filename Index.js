const file_system=require('fs');

const http=require('http');

const server=http.createServer((request,response) =>{
	console.log(request.url);
    if(request.url === '/') {
        response.setHeader('Content-Type', 'text/html');
        response.write('<html lang="es">');
        response.write('<head><meta charset="UTF-8" /><meta name="viewport" content="width=device-width, initial-scale=1.0" /> <title>Examen del segundo parcial</title>');
        response.write('<style>body {background-color: #7fddf5;margin: 0;padding: 0;}h1 {text-align: center;width: 50%;margin: auto;margin-top: 30px;}table {border: 3px solid #2804f3;padding: 20px 50px;margin-top: 20px;border-radius: 5px;background-color: #b4f88c;}</style></head>');
      response.write('<body><h1>Registro de incidentes</h1><form action="registrar.php" name="" method="POST"></form><table border="0" align="center"><tr><td>Nombre y Apellido:</td><td><label for="name"></label><input type="text" name="nombre" id="name" required  /></td></tr><tr><td>Lugar del incidente:</td><td><label for="lugar"></label><input type="text" name="lugar" id="lugar" required  /></td></tr><tr>');
        response.write('<td>Tipo de incidente:</td><td><label for="tipo"></label><input type="text" name="tipo" id="tipo"  required /></td></tr><tr><td>&nbsp;</td><td>&nbsp;</td></tr>');
        response.write('<tr><td align="center"><inputtype="submit"name="enviar"id="enviar"value="Registrarse"/></td><td align="center"><input type="reset" name="borrar" id="borrar" value="Restablecer" /></td></tr></table></form>');
        response.write('</body></html>');

    } else {
    	response.statusCode = 404;
    	response.setHeader('Content-Type', 'text/html');
    	response.write('<html>');
    	response.write('<head><meta charset="UTF-8"><meta http-equiv="X-UA-Compatible" content="IE=edge"><meta name="viewport" content="width=device-width, initial-scale=1.0"><title>Página no disponible</title></head><body>');
    	response.write('<h1>Página no disponible</h1>');
    	response.write('</body></html>');
    	response.end();
    }

        
    });
    server.listen(4040);