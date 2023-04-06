<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo site_url("assets/css/affiche.css") ; ?>">
    <title>Affiche</title>
  </head>
  <body>
      <a href="<?php echo site_url("Welcome"); ?>">Ajouter un plan comptable</a><br><br>
      <a href="<?php echo site_url("Welcome/devise"); ?>">Ajouter une devise</a><br><br>
      <a href="<?php echo site_url("Welcome/plan_tiers"); ?>">Ajouter un plan tiers</a><br><br>
      <a href="<?php echo site_url("Home_controller/show_pc"); ?>">Tous les plans comptables</a><br><br>
      <a href="<?php echo site_url("Home_controller/show_journal"); ?>">Journal</a><br><br>
      <a href="<?php echo site_url("Csv_controller/import_csv") ?>">Importer un fichier csv</a><br><br>
      <a href="<?php echo site_url("Csv_controller/export_csv") ?>">Exporter un fichier csv</a><br><br>
      <a href="<?php echo site_url("Home_controller/add_ecriture");?>">Ajouter ecriture</a>
  </body>
</html>
