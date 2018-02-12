<?php
require 'includes/admin_head.php';

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

                            switch ($source) {

                                case 'add_post';
                                    include 'posts/add_post.php';
                                    break;
                                default:
                                    include 'posts/view_all_posts.php';
                            }
                        } else {
                            $source = '';
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
