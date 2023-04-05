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
    <h2>Insertion plan tiers</h2>
    <form action="<?php echo site_url("Welcome/insertion_plan_tiers") ?>" method="post">
        <div>
            <label for="">Numero de compte</label>
            <select name="numero_compte_societe">
                <option value="40000">Fournisseur</option>
                <option value="41000">Client</option>
            </select>
        </div>
        <div>
            <label for="">Numero tiers</label>
            <input type="text" name="num_tiers">
        </div>
        <div>
            <label for="">Nom tiers</label>
            <input type="text" name="nom_tiers">
        </div>
        <div>
            <input type="submit" value="Ajouter">
        </div>
    </form>
</body>
</html>