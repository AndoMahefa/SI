<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $error_message = $this->session->flashdata('error');
        if (!empty($error_message)) {
            echo '<div class="alert alert-danger"><h1>' . $error_message . '</h1></div>';
        } 
    ?>
    <h2>Insertion d'une devise</h2>
    <form action="<?php echo site_url("Welcome/insertion_devise") ?>" method="post">
        <div>
            <label for="">Nom devise</label>
            <input type="text" name="nom_devise">
        </div>
        <div>
            <label for="">Taux</label>
            <input type="text" name="taux">
        </div>
        <div>
            <input type="submit" value="Valider">
        </div>
    </form>
</body>
</html>