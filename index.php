<?php

require 'includes/db.php';
include 'admin/functions.php';
//
require 'includes/header.php';

?>


<main>

    <div class="grid-container">
        <div class="grid-x grid-padding-x">

            <div class="cell medium-9">

                <?php

                if(isset($_GET['p_id'])){
                    include 'pages/detail_post.php';
                } elseif(isset($_GET['category'])) {
                    include 'pages/category.php';
                } else {
                    include 'pages/posts_list.php';
                }

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