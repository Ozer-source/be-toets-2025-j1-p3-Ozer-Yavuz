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
                        <th scope="col">Naam</th>
                        <th scope="col">Locatie</th>
                        <th scope="col">Hoogte</th>                       
                        <th scope="col">AantalVerdiepingen</th>
                        <th scope="col">JaarVoltooid</th>                       

                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($data['Toren'] as $TR) : ?>
                        <tr>

                            <td><?= $TR->Naam;  ?></td>
                            <td><?= $TR->Locatie; ?></td>
                            <td><?= $TR->Hoogte; ?></td>
                            <td><?= $TR->AantalVerdiepingen; ?></td>
                            <td><?= $TR->JaarVoltooid; ?></td>
                            <td><a href=" <?= URLROOT; ?>/Toren/delete/<?= $TR->Id; ?> "><button>Delete</button></a></td>
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