<?php
$page = 'Exercice 1';
$exercice = 1;
include '../header.php';
$age = 17; ?>
<div class="card-header font-weight-bold bg-info">Est-vous majeur ?</div>
<p><?= 'J\'ai ' .$age. ' ans';?></p>
<div class="card-body">
<?php
if ($age <= 18)
{
echo "Vous êtes majeur";
}   
else
{ 
    echo"Vous êtes mineur";
}
?>
</div>
</div>
<?php include '../footer.php'; ?>