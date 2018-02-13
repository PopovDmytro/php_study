<?php

function confirm($result_query) {
    if(!$result_query) {
        die("QUERY FAILED" . mysqli_error($result_query) );
    }
}

function insert_categories($connection) {
    if(isset($_POST['category_add'])){

        $cat_title = $_POST['cat_title'];

        if($cat_title === "" || empty($cat_title)) {
            echo "This field should not be empty";
        } else {
            $query = "INSERT INTO categories(cat_title) ";
            $query .= "VALUE('{$cat_title}') ";

            $create_category_query = mysqli_query($connection, $query);

            if(!$create_category_query) {
                die("QUERY FAILED" . mysqli_error($connection));
            }
        }
    }
}

function delete_category($connection) {
    if(isset($_GET['delete'])){

        $delete_cat_id = $_GET['delete'];
        $query = "DELETE FROM categories ";
        $query .= "WHERE cat_id = '$delete_cat_id' ";
        $delete_query = mysqli_query($connection, $query);
        header('Location: categories.php');
    }
}


function find_all_categories($connection) {
    $query = "SELECT * FROM categories";
    $select_categories_sidebar = mysqli_query($connection, $query);

    while($row = mysqli_fetch_assoc($select_categories_sidebar)) {
        $cat_id = $row['cat_id'];
        $cat_title = $row['cat_title'];

        $tr = "<tr>";
        $tr .= "<td>{$cat_id}</td>";
        $tr .= "<td>{$cat_title}</td>";
        $tr .= "<td><a href='categories.php?delete={$cat_id}'>Delete</a></td>";
        $tr .= "<td><a href='categories.php?edit={$cat_id}'>Edit</a></td>";
        $tr .= "</tr>";
        echo $tr;
    }
}
?>