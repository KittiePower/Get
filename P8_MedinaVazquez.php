<!DOCTYPE html>
<HTML LANG="es">
    <head>
        <META charset="UTF-8">
        <title> Metodo Get </title>
    </head>
    <body>
        <font color=#ABEBC6 size=5>Metodo Get</font>
        <br><br>

        <form method="get" action="P8_MedinaVazquez.php">
            <p>Nombre: <input type="text" name="nom" size="20"></p>
            <p>Escuela: <input type="text" name="esc" size="20"></p>
            <p>Turno: <input type="text" name="turno" size="20"></p>
            <p>Grupo: <input type="text" name="gr" size="20"></p>
            <p>Matricula: <input type="text" name="mat" size="20"></p>
            <p><input type="submit" value="Enviar" name="b1"></p>
        <font color=8693C6 size=4>
            <?php
                $nombre = @$_GET['nom'];
                $escuela = @$_GET['esc'];
                $turno = @$_GET['turno'];
                $grupo = @$_GET['gr'];
                $matricula = @$_GET['mat'];
                echo "Su nombre es $nombre<br>
                Asite a la escuela $escuela<br>
                Va en el turno $turno<br>
                va en el grupo $grupo<br>
                Su matricula es $matricula";
            
            ?>
            

        </font>
    </body>
</html>