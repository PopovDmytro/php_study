<?php

require 'includes/db.php';
//
require 'includes/header.php';

?>


<main>

    <div class="grid-container">
        <div class="grid-x grid-padding-x">

            <div class="cell medium-9">

                <?php
                    include 'pages/posts_list.php'
                ?>

            </div>

            <div class="cell medium-3">

                <?php
                    include 'includes/navigation.php';
                ?>
            </div>

        </div>
    </div>

</main>


<?php

require 'includes/footer.php';

?>