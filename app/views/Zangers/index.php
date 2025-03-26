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
                        <th scope="col">Naam</th>
                        <th scope="col">Nettowaarde</th>
                        <th scope="col">Land</th>
                        <th scope="col">Mobiel</th>
                        <th scope="col">Leeftijd</th>
                        <th scope="col">Delete</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($data['Zanger'] as $ZA) : ?>
                        <tr>
                            <td><?= $ZA->Naam; ?></td>
                            <td><?= $ZA->Nettowaarde; ?>€</td>
                            <td><?= $ZA->Land; ?></td>
                            <td><?= $ZA->Mobiel; ?></td>
                            <td><?= $ZA->Leeftijd; ?> jaar</td>
                            <td><a href="<?= URLROOT; ?>/Zanger/delete/<?= $ZA->Id; ?>"><button>Delete</button></a></td>
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