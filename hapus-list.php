<?php

    include "config.php";  
    iF (isset($_GET['manga_id'])) {
        $mangaid = $_GET['manga_id'];

        $javascriptCode = "
        <script>
            var hapus = confirm('Delete Manga ?');
            if (hapus) {

                var xhr = new XMLHttpRequest();
                xhr.open('GET', 'delete.php?manga_id=' + $mangaid, true);

                xhr.onreadystatechange = function() {

                    if (xhr.readyState === 4) {
                        if (xhr.status === 200) {

                            location.href = 'index.php';
                        } else {

                            alert('Deletion failed.');
                        }
                    }

                };

                xhr.send();

            } else {
                location.href = 'index.php';
            }
        </script>
        ";
        
        echo $javascriptCode;
        
    }

?>