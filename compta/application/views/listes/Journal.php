<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Journal</title>
</head>
<body>
    <h2>Journal</h2>
    <table border="1">
        <tr>
            <td>Date</td>
            <td>Code journal</td>
            <td>Numero compte</td>
            <td>Compte tiers</td>
            <td>Reference piece</td>
            <td>Libelle</td>
            <td>Montant</td>
            <td>Devise</td>
            <td>Debit</td>
            <td>Credit</td>
        </tr>
        <?php 
            for($i = 0; $i < count($journal); $i++){ ?>
                <tr>
                    <td><?php echo $journal[$i]['date_journal']; ?></td>
                    <td><?php echo $this->allselect_model->name_code_journal($journal[$i]['code_journal_society']); ?></td>
                    <td><?php echo $this->Allselect_model->name_plan_comptable($journal[$i]['numero_compte_society']); ?></td>
                    <td><?php echo $this->Allselect_model->name_plan_tiers($journal[$i]['plan_tiers']); ?></td>
                    <td><?php echo $journal[$i]['reference_piece']; ?></td>
                    <td><?php echo $journal[$i]['libelle_ecriture']; ?></td>
                    <td><?php echo $journal[$i]['Montant']; ?></td>
                    <td><?php echo $journal[$i]['devise']; ?></td>
                    <td><?php echo $journal[$i]['debit']; ?></td>
                    <td><?php echo $journal[$i]['credit']; ?></td>
                </tr>
        <?php }
        ?>
    </table>
    <?php
        $debit_credit = $this->allselect_model->debit_credit();
        if($debit_credit['debit'] > $debit_credit['credit']){
          echo "solde debiter = ".($debit_credit['debit'] - $debit_credit['credit']);
        }
        if($debit_credit['debit'] < $debit_credit['credit']){
          echo "solde crediter = ".($debit_credit['credit'] - $debit_credit['debit']);
        }
        if($debit_credit['debit'] == $debit_credit['credit']){
          echo "journal balance " ; 
        }
    ?>
</body>
</html>