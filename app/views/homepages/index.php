<?php require_once APPROOT . '/views/includes/header.php'; ?>

<!-- Voor het centreren van de container gebruiken we het bootstrap grid -->
<div class="container">
    <div class="row mt-3">

        <div class="col-2"></div>

        <div class="col-8">

            <h3><?php echo $data['title']; ?></h3>

            <a href="<?= URLROOT; ?>/smartphones/index">Overzicht smartphones</a><br>
            <a href="<?= URLROOT; ?>/Sneakers/index">Overzicht Sneakers</a><br>
            <a href="<?= URLROOT; ?>/Laptops/index">Overzicht Laptops</a><br>
            <a href="<?= URLROOT; ?>/Toren/index">Overzicht Toren</a><br>
            <a href="<?= URLROOT; ?>/Speakers/index">Overzicht Speakers</a><br>
            <a href="<?= URLROOT; ?>/Zanger/index">Overzicht Zangers</a>
            <a href="<?= URLROOT; ?>/Ufc/index">Overzicht Ufc</a>


        </div>
        
        <div class="col-2"></div>
        
    </div>

</div>

<?php require_once APPROOT . '/views/includes/footer.php'; ?>