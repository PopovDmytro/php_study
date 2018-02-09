<?php require '../header.php' ?>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center pt-2 pb-2">Working with files</h1>
                <hr />

                <h4>Opening Write</h4>
                <?php
                    $file = "example.txt";

                    if( $handle = fopen($file, 'w') ) { // 'w' - rewrite see doc PHP

                        fwrite($handle, "And again !");//

                        fclose($handle);

                    } else {
                        echo "The app was not able to write on the file";
                    }

                    if( $handle = fopen($file, 'a') ) { // 'a' - write after
                        fwrite($handle, "\nwrite some more text !!!");//
                    }
                ?>
                <h4>Read</h4>
                <?php
                $file = "example.txt";

                if( $handle = fopen($file, 'rb') ) { // 'w' - rewrite see doc PHP

//                    echo $content = fread($handle, filesize($file));
                    echo "<br>";
                    echo fread($handle, 5);

                    fclose($handle);

                } else {
                    echo "The app was not able to write on the file";
                }

                ?>
                <h4>Read</h4>
                <?php

                if($handle = fopen('test.txt', 'w')) {
                    fclose($handle);
                } else {
//                    delete file test.txt
                    unlink('test.txt');
                }

                ?>

            </div>
        </div>
    </div>



    </main>
    <footer class="footer text-center">
<?php require '../footer.php'; ?>