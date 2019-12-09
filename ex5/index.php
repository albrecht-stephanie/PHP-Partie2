<?php
$page = 'Exercice 5';
include '../header.php';
$genre = 'femme';
$result = " ";
if($genre != 'Homme')
{
    $result = 'C\'est une développeuse';
}
else{
    $result = 'C\'est un développeur';
}
?>
<div class="card-header font-weight-bold bg-info">Développeur/se ?</div>
<p>C'est un(e) <?= $genre ?> donc :</p>
<p><?= $result ?></p>
</div>
</div> 
<?php include '../footer.php'; ?>