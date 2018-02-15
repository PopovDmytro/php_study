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
                <h1>Posts</h1>
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

                            case 'add_post';
                                include '';
                                break;
                            case 'edit_post';
                                include '';
                                break;
                            default:
                                include 'comments/view_all_comments.php';
                        }

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
