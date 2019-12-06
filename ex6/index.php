<?php
$page = 'Exercice 6';
include '../header.php';
$age= 78;?>
<div class="card-header font-weight-bold bg-info">Suis-je majeur ou mineur ?</div>
<p>J'ai<?= $age ?>ans</p>
<?php
if($age >= 18)
{
    echo 'Tu es majeur';
}
else
{
    echo 'Tu n\'es pas majeur';
}
?>
</div>
</div> 
<?php include '../footer.php'; ?>