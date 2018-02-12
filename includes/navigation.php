<!--navigation-->
<div class="side-bar margin-top-1">
<!--search section-->
    <div class="card">
        <div class="card-section">
            <h5>Search</h5>
        </div>
        <div class="card-section">
            <ul class="menu" >
                <li class="search-section">
                    <form action="../" method="post">
                        <input type="search" name="search" placeholder="Search">
                        <button type="submit" name="submit" class="button search-btn"><i class="fas fa-search"></i></button>
                    </form>
                </li>
            </ul>
        </div>
    </div>
<!--end search section-->

<!--categories-->
    <div class="card">

        <?php
            $query = "SELECT * FROM categories LIMIT 3";
            $select_categories_sidebar = mysqli_query($connection, $query);
        ?>

        <div class="card-section">
            <h5>Categories</h5>
        </div>
        <div class="card-section">
            <ul class="no-bullet">
                <?php
                    while($row = mysqli_fetch_assoc($select_categories_sidebar)) {
                        $cat_title = $row['cat_title'];

                        echo "<li><a href='#'>{$cat_title}</a></li>";
                    }
                ?>
            </ul>
        </div>
    </div>
<!--end categories-->

<!--side widget-->
    <div class="card">
        <div class="card-section">
            <?php include 'includes/widget.php'; ?>
        </div>
    </div>
<!--end side widget-->
</div>
<!--end navigation-->

<?php ?>
