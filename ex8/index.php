<?php
$page = 'Exercice 8';
include '../header.php';?>
<div class="card-header font-weight-bold bg-info">Est-ce que ce gâteau est-il bon? </div>
<?php
$isOk = NULL;
if($isOk)
{
    echo 'c\'est ok !!';
}
elseif($isOk == NULL)
{
    echo 'c\'est pas bon !!!';
}
?>
</div>
</div> 
<?php include '../footer.php'; ?>