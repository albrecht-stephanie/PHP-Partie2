<?php
$page = 'Exercice 3';
include '../header.php';
$age = 19;
$genre = 'femme';
$result = " ";
if($age >= 18 && $genre == 'homme')
{
    $result = 'Vous êtes un homme et vous êtes majeur';
}
elseif($age < 18 && $genre == 'homme')
{
    $result = 'Vous êtes un homme et vous êtes mineur';
}
elseif($age >= 18 && $genre == 'femme')
{
    $result = 'Vous êtes une femme et vous êtes majeure';
}
elseif($age < 18 && $genre == 'femme')
{
    $result = 'Vous êtes une femme et vous êtes mineure';
}?>
<div class="card-header font-weight-bold bg-info">Homme/Femme et Majeur/Mineur ?</div>
<p><?= $result ?></p>
</div>
</div> 
<?php include '../footer.php'; ?>