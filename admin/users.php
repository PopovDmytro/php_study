<?php
require 'includes/admin_head.php';

include 'functions.php';
include 'posts/posts_functions.php';
?>
<main>
    <div class="grid-container">
        <div class="grid-x grid-padding-x">

            <?php require 'sidebar.php'; ?>

            <div class="cell small-9 padding-top-1" id="main-content">
                <hr>
                <div class="grid-x grid-padding-x">
                    <div class="cell small-12">

                        <?php

                        if(isset($_GET['source'])) {
                            $source = $_GET['source'];
                        } else {
                            $source = '';
                        }

                        switch ($source) {

                            case 'add_user';
                                include 'users/add_users.php';
                                break;
                            case 'edit_user';
                                include 'users/edit_user.php';
                                break;
                            default:
                                include 'users/view_all_users.php';
                        }

                        /*if(isset($_GET['edit_user'])) {
                            include 'users/edit_user.php';
                        }*/

                        ?>

                    </div>
                </div>
            </div>

        </div>
    </div>
</main>
<?php
require 'includes/admin_footer.php';
?>
