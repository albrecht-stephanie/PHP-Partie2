<?php
$page = 'Exercice 6';
include '../header.php';
$age= 78;
$result = " ";
if($age >= 18)
{
    $result = 'Tu es majeur';
}
else
{
    $result = 'Tu n\'es pas majeur';
}
?>
<div class="card-header font-weight-bold bg-info">Suis-je majeur ou mineur ?</div>
<p>J'ai<?= $age ?>ans</p>
<p><?= $result ?></p>
</div>
</div> 
<?php include '../footer.php'; ?>