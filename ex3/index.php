<?php
$page = 'Exercice 3';
include '../header.php';
$age = 19;
$genre = 'femme';?>
<div class="card-header font-weight-bold bg-info">Homme/Femme et Majeur/Mineur ?</div>
<?php
if($age >= 18 AND $genre == 'homme')
{
    echo 'Vous êtes un homme et vous êtes majeur';
}
elseif($age < 18 AND $genre == 'homme')
{
    echo 'Vous êtes un homme et vous êtes mineur';
}
elseif($age >= 18 AND $genre == 'femme')
{
    echo 'Vous êtes un femme et vous êtes majeur';
}
elseif($age < 18 AND $genre == 'femme')
{
    echo 'Vous êtes un femme et vous êtes mineur';
}?>
</div>
</div> 
<?php include '../footer.php'; ?>