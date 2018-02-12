<?php
require 'includes/admin_head.php';

include 'functions.php';
?>
<main>
    <div class="grid-container">
        <div class="grid-x grid-padding-x">

            <?php require 'sidebar.php'; ?>

            <div class="cell small-9 padding-top-1" id="main-content">
                <h1>Categories</h1>
                <hr>
                <div class="grid-x grid-padding-x">
                    <div class="cell small-6">

                        <?php insert_categories($connection); ?>

                        <form action="" method="post">
                            <div class="grid-container">
                                <h5>Category title</h5>
                                <label>
                                    <input type="text" placeholder="cat title" name="cat_title">
                                </label>
                                <div class="">
                                    <button type="submit" name="category_add" class="success button">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!---->
                    <div class="cell small-6">
                        <table class="hover">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Category title</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    find_all_categories($connection);
                                    delete_category($connection);
                                ?>
                            </tbody>
                        </table>
                    </div>
                    <!---->
                    <div class="cell small-6">
                        <?php
//                          update and include
                            if(isset($_GET['edit'])) {
                                $cat_id = $_GET['edit'];
                                include "includes/edit_category.php";
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
