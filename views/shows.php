<main class="main">
    <div class="container-fluid mb-5">
        <div class="row">
            <div class="col text-center">
                <?php
                    // users
                    foreach ($showsTypes as $showsTypes) {
                        ?>
                            <p class="pt-3"><?= '<b>'. $showsTypes['id'] .'</b> '. $showsTypes['type']; ?></p>
                        <?php
                    }
                ?>
            </div>
        </div>
    </div>
</main>