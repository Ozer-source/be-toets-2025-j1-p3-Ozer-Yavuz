<?php require_once APPROOT . '/views/includes/header.php'; ?>

<div class="container mt-3">

    <div class="row">
        <div class="col-1"></div>
        <div class="col-10">
            <h3><?= $data['title']; ?></h3>
        </div>
        <div class="col-1"></div>
    </div>


   
    <!-- begin tabel smartphones -->
    <div class="row">
        <div class="col-1"></div>
        <div class="col-10">
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>Naam</th>
                        <th>Batterijduur</th>
                        <th>Waterbestendigheid</th>
                        <th>Connectiviteit</th>                    
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($data['Speaker'] as $SP) : ?>
                        <tr>
                            <td><?= $SP->Naam; ?></td>
                            <td><?= $SP->Batterijduur; ?></td>
                            <td><?= $SP->Waterbestendigheid; ?></td>
                            <td><?= $SP->Connectiviteit; ?></td>
                            <td><a href=" <?= URLROOT; ?>/Speakers/delete/<?= $SP->Id; ?> "><button>Delete</button></a></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <a href="<?= URLROOT; ?>">Terug</a>
        </div>
        <div class="col-1"></div>
    </div>
    <!-- einde tabel smartphones -->

<?php require_once APPROOT . '/views/includes/footer.php'; ?> 