<?php
$page = 'Exercice 7';
include '../header.php';
$isOk = false;?>
<div class="card-header font-weight-bold bg-info">Est-ce que le test fonctionne ?</div>
<?php
if($isOk ==false)
{
    echo 'c\'est pas bon';
}
else
{
    echo 'c\'est ok';
}
?>
</div>
</div> 
<?php include '../footer.php'; ?>