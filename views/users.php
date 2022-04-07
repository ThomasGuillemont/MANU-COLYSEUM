<main class="main">
    <div class="container-fluid mb-5 mt-6">
        <div class="row justify-content-center">
            <?= $error ?? '' ?>
            <?php
                // users
                foreach ($user as $key => $value) {
                    ?>
                        <div class="col-12 text-center p-1 card" style="width: 15rem;">
                            <div class="card-body">
                                <h5 class="card-title fw-bold"><?= $user[$key] -> firstName ?? '' ?> <?=  $user[$key] -> lastName ?? '' ?></h5>
                                <h6 class="card-subtitle mb-2 text-muted">ID <?= $user[$key] -> id ?? '' ?></h6>
                                <p class="card-text"><?= $user[$key] -> birthDate ?? '' ?></p>
                            </div>
                        </div>
                    <?php
                }
            ?>
        </div>
    </div>
</main>