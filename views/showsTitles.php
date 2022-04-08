<main class="main">
    <div class="container-fluid mb-5">
        <div class="row justify-content-center">
            <?= $error ?? '' ?>
            <?php
                // shows
                foreach ($showTitle as $key => $value) {
                    $date = new DateTime($value -> date);
                    $dateFormat = $date -> format('d-m-Y');
                    ?>
                        <div class="col-12 text-center p-1 card" style="width: 20rem;">
                            <div class="card-body">
                                <h5 class="card-title fw-bold"><?= $value -> title ?? '' ?></h5>
                                <h6 class="card-subtitle mb-2 text-muted">Le <?= $dateFormat ?? '' ?> à <?= $value -> startTime ?? '' ?></h6>
                                <p class="card-text fst-italic">Spectacle par <b><?= $value -> performer ?? '' ?></b></p>
                            </div>
                        </div>
                    <?php
                }
            ?>
        </div>
    </div>
</main>