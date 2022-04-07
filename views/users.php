<main class="main">
    <div class="container-fluid mb-5">
        <div class="row">
            <div class="col text-center">
                <?php
                    // users
                    foreach ($users as $users) {
                        ?>
                            <p class="pt-3"><?= '<b>'. $users['id'] .'</b> '. $users['firstName'] .' '. $users['lastName'] .' - '. $users['birthDate']; ?></p>
                        <?php
                    }
                ?>
            </div>
        </div>
    </div>
</main>