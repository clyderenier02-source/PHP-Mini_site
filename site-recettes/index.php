<?php
require_once "includes/header.php";
?>

<section class="accueil">
    <div class="accueil_presentation">
        <h1>Bienvenue sur Les Délices Maison</h1>
        <p>Ce site vous propose des recettes simples et gourmandes, faciles à réaliser à la maison.</p>
    </div>
    
    <div class="accueil_card">
        <div class="accueil_card_title">
            <h2>Aperçus des recettes :</h2>
        </div>

        <?php include "recettes.php"; ?>
    </div>
</section>
<?php
require_once "includes/footer.php";