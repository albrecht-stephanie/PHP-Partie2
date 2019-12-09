<?php
$page = 'Exercice 7';
include '../header.php';
$isOk = false;
$result = " ";
if(!$isOk)
{
    $result = 'C\'est pas bon';
}
else
{
    $result = 'C\'est ok';
}
?>
<div class="card-header font-weight-bold bg-info">Est-ce que le test fonctionne ?</div>
<p><?= $result ?></p>
</div>
</div> 
<?php include '../footer.php'; ?>