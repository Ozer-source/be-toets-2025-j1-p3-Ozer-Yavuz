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
                        <th scope="col">Merk</th>
                        <th scope="col">Model</th>
                        <th scope="col">Prijs</th>                       
                        <th scope="col">delete</th>                       

                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($data['Sneakers'] as $Sneaker) : ?>
                        <tr>
                            <td><?= $Sneaker->Merk;  ?></td>
                            <td><?= $Sneaker->Model; ?></td>
                            <td><?= $Sneaker->Prijs; ?></td>
                            <td><a href=" <?= URLROOT; ?>/sneakers/delete/<?= $Sneaker->Id; ?> "><button>Delete</button></a></td>
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