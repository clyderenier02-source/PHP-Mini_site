<div class="accueil_card_title">
    <h2>Aperçus des recettes :</h2>
</div>

<div class="accueil_card_recette">
    <?php foreach($recettes as $recette) : ?>
        <div class="accueil_card_recette_sub">
            <img src="<?= $recette["image"] ?>">
            <h2><?= $recette["titre"] ?></h2>
            <p><strong>Temps de cuisson : </strong><?= $recette["temps"] ?></p>
            <p><strong>Difficulté : </strong><?= $recette["difficulte"] ?></p>
            <p><?= "<br>" ?></p>
        </div>
    <?php endforeach; ?>
</div>