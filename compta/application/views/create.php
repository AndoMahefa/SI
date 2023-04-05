<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo site_url("assets/css/create.css") ; ?>">
    <title>ajouter plan comptable</title>
</head>
<body>
    <div class="container">
        <div class="form_head">
            <img src="<?php echo site_url("assets/images/blob.svg") ;  ?>"width="500px"    alt="">
        </div>
        <div class="form_body">
            <h1>Ajouter plan Comptable</h1>
            <form action="InsertionCI/process" method="post">
                <div class="compte">
                    <div class="input">
                      <select class="" name="">
                          <option value="">512</option>
                          <option value="">10</option>
                          <option value="">40</option>
                          <option value="">41</option>
                      </select>
                    </div>
                    <div class="inputT">
                      <input type="number" name="" value="">
                    </div>
                </div>
                <div class="text">
                  <label for="">Intitule </label>
                  <input type="text" name="" value="">
                </div>
                  <div class="champ">
                    <button type="submit">Ajouter</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
