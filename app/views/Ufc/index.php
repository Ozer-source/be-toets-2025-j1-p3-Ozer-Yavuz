<?php require_once APPROOT . '/views/includes/header.php'; ?>

<div class="container mt-3">

    <div class="row">
        <div class="col-3"></div>
        <div class="col-6">
            <h3 class="text-warning"><?= $data['title']; ?></h3>
        </div>
        <div class="col-3"></div>
    </div>


   
    <div class="row">
        <div class="col-12">
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th scope="col">Naam</th>
                        <th scope="col">Ranglijstnummer</th>  
                        <th scope="col">Lengte</th>
                        <th scope="col">Gewicht</th>
                        <th scope="col">Leeftijd</th>
                        <th scope="col">Winst Door Knockout</th>                

                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($data['Ufc'] as $UFC) : ?>
                        <tr>

                            <td><?= $UFC->Naam;  ?></td>
                            <td><?= $UFC->Ranglijstnummer; ?></td>
                            <td><?= $UFC->Lengte; ?></td>
                            <td><?= $UFC->Gewicht; ?></td>
                            <td><?= $UFC->Leeftijd; ?></td>
                            <td><?= $UFC->Ko; ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <a href="<?= URLROOT; ?>">←</a> 
        </div>
    </div>

<?php require_once APPROOT . '/views/includes/footer.php'; ?> 