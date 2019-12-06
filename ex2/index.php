<?php
$page = 'Exercice 2';
$exercice = 2;
include '../header.php';
$isEasy = false;?>
<div class="card-header font-weight-bold bg-info">Apprendre une langue étrangère ?</div>
<?php
if ($isEasy == true)
{
    echo "C'est facile!!";
}
elseif ($isEasy == false)
{
    echo "C'est difficile !!!";
}
?>
</div>
</div> 
<?php include '../footer.php'; ?>