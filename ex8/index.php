<?php
$page = 'Exercice 8';
include '../header.php';
$result = " ";
if($isOk)
{
    $result = 'C\'est ok !!';
}
else
{
    $result = 'C\'est pas bon !!!';
}
?>
<div class="card-header font-weight-bold bg-info">Est-ce que ce gâteau est-il bon? </div>
<p><?= $result ?></p>
</div>
</div> 
<?php include '../footer.php'; ?>