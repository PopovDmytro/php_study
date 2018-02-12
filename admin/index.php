<?php
require 'includes/admin_head.php';
?>
<main>
    <div class="grid-container">
        <div class="grid-x grid-padding-x">

            <?php
            require 'sidebar.php';
            ?>

            <!--main content-->
            <div class="cell small-9" id="main-content">
                <?php
                include 'main_content.php';
                ?>
            </div>
            <!--end main content-->

        </div>
    </div>
</main>
<?php
require 'includes/admin_footer.php';
?>
