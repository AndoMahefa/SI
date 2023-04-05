<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Insertion plan comptable</h2>
    <?php 
        $error_message = $this->session->flashdata('error');
        if (!empty($error_message)) {
            echo '<div class="alert alert-danger"><h1>' . $error_message . '</h1></div>';
        } 
    ?>
    <form action="<?php echo site_url("Welcome/insertion_pc") ?>" method="post">
        <div>
            <label for="">Numero de compte</label>
            <input type="text" name="num_compte">
        </div>
        <div>
            <label for="">Nom de compte</label>
            <input type="text" name="nom_compte">
        </div>
        <div>
            <input type="submit" value="Enregistrer">
        </div>
    </form>
</body>
</html>