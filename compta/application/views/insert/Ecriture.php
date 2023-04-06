<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ecriture</title>
</head>
<body>
    <h2>Insertion ecriture</h2>
    <form action="<?php echo site_url("Add_ecriture"); ?>" method="post">
        <div>
            <label for="">Code journal</label>
            <select name="code_journal" id="">
                <?php
                    $tablo = array() ;
                    $tablo = $this->allselect_model->code_journal() ;
                    for($i = 0 ; $i<count($tablo) ; $i++ ) { ?>
                        <option value="<?php echo $tablo[$i]['idcode_journal_society'] ?>" ><?php echo $tablo[$i]['code_journal'] ?></option>
                    <?php }
                ?>
            </select>
        </div>
        <div>
            <label for="">numero de compte</label>
            <select name="num_compte" id="">
                <?php
                    $plan_compta = array() ;
                    $plan_compta = $this->allselect_model->plan_com() ;
                    for($u = 0 ; $u<count($plan_compta) ; $u++){ ?>
                        <option value="<?php echo $plan_compta[$u]['id_plan_comptable_society'] ; ?>"><?php echo $plan_compta[$u]['numero_compte'] ; ?></option>
                    <?php }
                ?>
            </select>
        </div>
        <div>
            <label for="">Plan tiers</label>
            <select name="plan_tiers" id="">
                <?php
                    $tiers = array() ;
                    $tiers = $this->allselect_model->plan_tiers(1) ;
                    for($i = 0 ; $i<count($tiers) ; $i++){ ?>
                        <option value="<?php echo $tiers[$i]['id_plan_tiers'] ?>"><?php echo $tiers[$i]['nom_tiers'] ?></option>
                    <?php }
                ?>
            </select>
        </div>
        <div>
            <label for="">Reference piece</label>
            <input type="text" name="ref_piece">
        </div>
        <div>
            <label for="">Libelle</label>
            <input type="text" name="libelle">
        </div>
        <div>
            <label for="">date</label>
            <input type="date" name="date_journal">
        </div>
        <div>
            <label for="">Montant</label>
            <input type="number" name="montant">
        </div>
        <div>
            <label for="">Devise</label>
            <select name="devise" id="">
                <option value=""></option>
                <option value="1">Ariary</option>
                <option value="2">Euro</option>
                <option value="3">Dollars</option>
                <option value="4">Yen</option>
            </select>
        </div>
        <div>
            <input type="checkbox" name="debit">
            <label for="">Debit</label>
            <input type="checkbox" name="credit">
            <label for="">Credit</label>
        </div>
        <input type="submit" value="Enregistrer">
    </form>
</body>
</html>