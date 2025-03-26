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
        <!-- <div class="col-1"></div> -->
        <div class="col-12">
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                    <th scope="col">Model</th>
                    <th scope="col">Prijs</th>
                    <th scope="col">Besturingssysteem</th>
                    <th scope="col">Opslag</th>
                    <th scope="col">DatumAangemaakt</th>
                    <th scope="col">Ram</th>
                    <th scope="col">Gewicht</th>
                    </tr>
                </thead>
                <tbody> 
                    <?php foreach ($data['Laptops'] as $LP) : ?>
                        <tr>
                        <td><?= $LP->Model; ?></td>
                        <td><?= $LP->Prijs; ?>€</td>
                        <td><?= $LP->Besturingssysteem; ?></td>
                        <td><?= $LP->Opslag; ?> GB</td> 
                        <td><?= $LP->DatumAangemaakt; ?></td>
                        <td><?= $LP->Ram; ?> GB</td> 
                        <td><?= $LP->Gewicht; ?>KG</td>
                        <td><?= $LP->DatumAangemaakt; ?></td>
                        <td><?= $LP->Gewicht; ?> kg</td> 

                            <td><a href=" <?= URLROOT; ?>/Laptops/delete/<?= $LP->Id; ?> "><button>Delete</button></a></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <a href="<?= URLROOT; ?>">Terug</a> 
        </div>
        <!-- <div class="col-1"></div> -->
    </div>
    <!-- einde tabel smartphones -->

<?php require_once APPROOT . '/views/includes/footer.php'; ?> 