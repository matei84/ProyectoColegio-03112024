<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="procesar.php" method="POST">
        
        <input type="text" id="nombrEstudiante" placeholder="Nombre del estudiante" name="nombre" required>

        <h5>Nota Promedio: </h5>
        <input type="text" placeholder="Nota" name="nota" required>
        
        <input type="submit" value="Enviar">

    </form>
    
</body>
</html>

