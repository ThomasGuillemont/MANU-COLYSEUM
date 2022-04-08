<main class="main">
    <div class="container-fluid mb-5">
        <div class="row justify-content-center">
            <?= $error ?? '' ?>
            <?php
                // users
                foreach ($user as $key => $value) {
                    ?>
                        <div class="col-12 text-center p-1 card" style="width: 15rem;">
                            <div class="card-body">
                                <h5 class="card-title fw-bold"><?= $value -> firstName ?? '' ?> <?= $value -> lastName ?? '' ?></h5>
                                <h6 class="card-subtitle mb-2 text-muted"><?= $value -> birthDate ?? '' ?></h6>
                                <p class="card-text fst-italic">
                                    <?php if ($value -> card == 1) {
                                        echo "Oui ";
                                    } else {
                                        echo "Non ";
                                    } ?>
                                    <?= $value -> cardNumber ?? '' ?></p>
                            </div>
                        </div>
                    <?php
                }
            ?>
        </div>
    </div>
</main>