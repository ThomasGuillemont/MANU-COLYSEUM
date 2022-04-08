<main class="main">
    <div class="container-fluid mb-5">
        <div class="row justify-content-center">
            <?= $error ?? '' ?>
            <?php
                // shows
                foreach ($showsType as $key => $value) {
                    ?>
                        <div class="col-12 text-center p-1 card" style="width: 15rem;">
                            <div class="card-body">
                                <h5 class="card-title fw-bold"><?= $value -> type ?? '' ?></h5>
                                <h6 class="card-subtitle mb-2 text-muted">ID <?=  $value -> id ?? '' ?></h6>
                            </div>
                        </div>
                    <?php
                }
            ?>
        </div>
    </div>
</main>