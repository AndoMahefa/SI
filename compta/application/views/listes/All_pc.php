<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Tous les plans comptables</h2>
    <table border="1">
        <tr>
            <td>Numero compte</td>
            <td>Nom compte</td>
        </tr>
    <?php 
        for ($i=0; $i < count($pc); $i++) { ?> 
            <tr>
                <td><?php echo $pc[$i]['numero_compte']; ?></td>
                <td><?php echo $pc[$i]['nom_compte']; ?></td>
            </tr>
        <?php }
    ?>
    </table>
</body>
</html>