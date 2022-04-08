<main class="main">
    <div class="container-fluid mb-5">
        <div class="row justify-content-center">
            <?= $error ?? '' ?>
            <?php
                if (empty($name)) {
                    ?>
                    <div class="text-center fw-bold pt-5">Il n'y a personne...</div>
                    <?php
                } else {
                    // users
                    foreach ($name as $key => $value) {
                        ?>
                            <div class="col-12 text-center p-1 card" style="width: 15rem;">
                                <div class="card-body">
                                    <h5 class="card-title fw-bold"><?= $value -> lastName ?? '' ?> <?= $value -> firstName ?? '' ?></h5>
                                </div>
                            </div>
                        <?php
                    }
                }
            ?>
        </div>
    </div>
</main>