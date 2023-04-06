<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Export csv</title>
</head>
<body>
    <h2>Exporter un fichier csv</h2>
    <form action="<?php echo site_url("Csv_controller/generate_csv"); ?>" method="post">
        <div>
            <label for="">Nom du fichier</label>
            <input type="text" name="csv">
        </div>
        <input type="submit" value="Exporter">        
    </form>
</body>
</html>