<!DOCTYPE html>
<html>
    <head>
        <title>Calcular Letra DNI - Servicio Web + PHP + SOAP</title>
        <link rel="stylesheet" type="text/css" href="/estilo.css">
    </head>
<body>
    <h1>Obtener letra DNI</h1>
    <h2>Servicio Web + PHP + SOAP</h2>
    <form action="./index.php" method="post">
    <?php
        print "<input type='number' name='num'>";
        print "<input type='submit' name='enviar' value='Calcular Letra'>";
        print "<p class='error'>$error</p>";
        print "<p style='font-size: 12pt;font-weight: bold;color: #0066CC;'>$resultado</p>";
    ?>
    </form>
    <div id="footer">Creado con <span class="red">♥</span> por: <a href="https://www.raulprietofernandez.net/">Raúl Prieto Fernández</a></div>
</body>
</html>