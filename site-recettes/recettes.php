<?php
$page = 'recettes';
require_once "includes/header.php";
require_once "data/recettes.php"; 
?>

<div class="accueil_card_recette">
    <?php foreach($recettes as $recette) : ?>
        <div class="accueil_card_recette_sub">
            <div class="accueil_card_recette_img">
                <img src="<?= $recette["image"] ?>">
            </div>
            <div class="accueil_card_recette_description">
                <h2><?= $recette["titre"] ?></h2>
                <p><strong>Temps de cuisson : </strong><?= $recette["temps"] ?></p>
                <p><strong>Difficulté : </strong><?= $recette["difficulte"] ?></p>
                <p><?= "<br>" ?></p>
                <p><strong>Ingredients : </strong></p>
                
                <?php foreach($recette["ingredients"] as $ingredient) : ?>
                    <p><?= $ingredient ?></p>
                <?php endforeach ?>
            </div>
        </div>
    <?php endforeach; ?>
</div>