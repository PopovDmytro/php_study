<!--navigation-->
<div class="side-bar margin-top-1">


<!--    Login   -->
    <div class="card">
        <div class="card-section">
            <h5>Search</h5>
        </div>
        <div class="card-section">
            <ul class="menu" >
                <li class="search-section">
                    <form action="includes/login.php" method="post">
                        <label for="">
                            Username
                            <input type="text" name="username" placeholder="Username">
                        </label>
                        <label for="">
                            Password
                            <input type="password" name="password" placeholder="Password">
                        </label>
                        <div class="margin-top-1">
                            <button type="submit" name="login" class="button">Log in</button>
                        </div>
                    </form>
                </li>
            </ul>
        </div>
    </div>


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
//            $query = "SELECT * FROM categories LIMIT 3";
            $query = "SELECT * FROM categories ";
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
                        $cat_id = $row['cat_id'];

                        echo "<li><a href='?category=$cat_id'>{$cat_title}</a></li>";
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
