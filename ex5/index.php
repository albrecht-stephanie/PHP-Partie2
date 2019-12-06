<?php
$page = 'Exercice 5';
include '../header.php';
$genre = 'femme';?>
<div class="card-header font-weight-bold bg-info">Développeur/se ?</div>
<p>C'est un(e) <?= $genre ?> donc :</p>
<?php
if($genre != 'Homme')
{
    echo 'C\'est une développeuse';
}
else{
    echo 'C\'est un développeur';
}
?>
</div>
</div> 
<?php include '../footer.php'; ?>