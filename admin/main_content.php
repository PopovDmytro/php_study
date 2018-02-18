<div class="cell small-9" id="main-content">

    <div class="row">
        <div class="col-lg-3 col-md-6">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="fa fa-file-text fa-5x"></i>
                        </div>
                        <div class="col-xs-9 text-right">

                            <?php
                                $query = "SELECT * FROM posts";
                                $select_all_posts = mysqli_query($connection, $query);

                                $posts_counts = mysqli_num_rows($select_all_posts);
                            ?>

                            <div class='huge'><?php echo $posts_counts;?></div>
                            <div>Posts</div>
                        </div>
                    </div>
                </div>
                <a href="posts.php?source">
                    <div class="panel-footer">
                        <span class="pull-left">View Details</span>
                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="panel panel-green">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="fa fa-comments fa-5x"></i>
                        </div>
                        <div class="col-xs-9 text-right">
                            <?php
                            $query = "SELECT * FROM comments";
                            $select_all_comments = mysqli_query($connection, $query);

                            $comments_counts = mysqli_num_rows($select_all_comments);
                            ?>

                            <div class='huge'><?php echo $comments_counts;?></div>
                            <div class="">Comments</div>
                        </div>
                    </div>
                </div>
                <a href="comments.php">
                    <div class="panel-footer">
                        <span class="pull-left">View Details</span>
                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="panel panel-yellow">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="fa fa-user fa-5x"></i>
                        </div>
                        <div class="col-xs-9 text-right">
                            <?php
                            $query = "SELECT * FROM users";
                            $select_all_users = mysqli_query($connection, $query);

                            $users_counts = mysqli_num_rows($select_all_users);
                            ?>

                            <div class='huge'><?php echo $users_counts;?></div>
                            <div> Users</div>
                        </div>
                    </div>
                </div>
                <a href="users.php">
                    <div class="panel-footer">
                        <span class="pull-left">View Details</span>
                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="panel panel-red">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="fa fa-list fa-5x"></i>
                        </div>
                        <div class="col-xs-9 text-right">
                            <?php
                            $query = "SELECT * FROM categories";
                            $select_all_cat = mysqli_query($connection, $query);

                            $categories_counts = mysqli_num_rows($select_all_cat);
                            ?>

                            <div class='huge'><?php echo $categories_counts;?></div>
                            <div>Categories</div>
                        </div>
                    </div>
                </div>
                <a href="categories.php">
                    <div class="panel-footer">
                        <span class="pull-left">View Details</span>
                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <hr>
    <div class="row">

        <?php
        $query = "SELECT * FROM posts WHERE post_status = 'draft'";
        $select_all_draft_posts = mysqli_query($connection, $query);
        $posts_draft_counts = mysqli_num_rows($select_all_draft_posts);

        $query = "SELECT * FROM posts WHERE post_status = 'published'";
        $select_all_published_posts = mysqli_query($connection, $query);
        $posts_published_counts = mysqli_num_rows($select_all_published_posts);

        $query = "SELECT * FROM comments WHERE comment_status = 'unapproved'";
        $select_all_un_comments = mysqli_query($connection, $query);
        $un_comments_counts = mysqli_num_rows($select_all_un_comments);

        $query = "SELECT * FROM users WHERE user_role = 'subscriber'";
        $select_all_subscribers = mysqli_query($connection, $query);
        $subscribers_counts = mysqli_num_rows($select_all_subscribers);

        ?>

        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
        <script type="text/javascript">
            google.charts.load('current', {'packages':['bar']});
            google.charts.setOnLoadCallback(drawChart);

            function drawChart() {
                var data = google.visualization.arrayToDataTable([
                    ['Data', 'Count'],

                    <?php
                        $element_text = ['All Posts', 'Published posts','Draft Posts', 'Comments', 'Unapproved comments', 'Users', 'Subscribers', 'Categories'];
                        $element_count = [$posts_counts, $posts_published_counts, $posts_draft_counts, $comments_counts, $un_comments_counts, $users_counts, $subscribers_counts, $categories_counts];

                        for ($i = 0; $i < count($element_text); $i++) {
                            echo "['$element_text[$i]', $element_count[$i]],";
                        }
                    ?>
                ]);

                var options = {
                    chart: {
                        title: '',
                        subtitle: ''
                    }
                };

                var chart = new google.charts.Bar(document.getElementById('columnchart_material'));

                chart.draw(data, google.charts.Bar.convertOptions(options));
            }
        </script>


    </div>
    <div id="columnchart_material" style="width: 100%; height: 500px;"></div>

</div>
<?php ?>