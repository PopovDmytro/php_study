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
                if(isset($_GET['profile'])) {
                    include 'includes/profile.php';
                } else {
                    echo "<h1>welcome to admin: <small>{$_SESSION['username']}</small></h1>";

                    include 'main_content.php';
                }


                ?>
            </div>
            <!--end main content-->

        </div>
    </div>
</main>
<?php
require 'includes/admin_footer.php';
?>
