<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/impar.css">
    <title>IMPAR</title>
</head>
<body>
    <div>
        <h1>Cuadrados Impar</h1>
        <table>
            <tr>
                <?php
                    echo "<td>".$_GET['numero']."</td>";
                    echo "<td>".$_GET['cuadrado']."</td>";
                    echo "<td>Impar</td>";
                ?>
            </tr>
        </table>
    </div>
</body>
</html>