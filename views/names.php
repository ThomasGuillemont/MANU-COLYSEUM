<main class="main">
    <div class="container-fluid mb-5 mt-6">
        <div class="row justify-content-center">
            <?= $error ?? '' ?>
            <?php
                // users
                foreach ($name as $key => $value) {
                    ?>
                        <div class="col-12 text-center p-1 card" style="width: 15rem;">
                            <div class="card-body">
                                <h5 class="card-title fw-bold"><?= $loyalty[$key] -> firstName ?? '' ?> <?= $loyalty[$key] -> lastName ?? '' ?></h5>
                                <h6 class="card-subtitle mb-2 text-muted">ID <?= $loyalty[$key] -> id ?? '' ?></h6>
                                <p class="card-text"><?= $loyalty[$key] -> cardNumber ?? '' ?></p>
                            </div>
                        </div>
                    <?php
                }
            ?>
        </div>
    </div>
</main>