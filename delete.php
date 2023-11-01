<?php
include "config.php";

if (isset($_GET['manga_id'])) {
    $mangaid = $_GET['manga_id'];

    // Use prepared statements to prevent SQL injection
    $stmt = $config->prepare("DELETE FROM tb_katalog WHERE manga_id = ?");
    $stmt->bind_param("i", $mangaid); // Assuming manga_id is an integer
    $stmt->execute();

    if ($stmt->affected_rows > 0) {
        // Deletion was successful
        http_response_code(200);
    } else {
        // Deletion failed
        http_response_code(500);
        echo "Deletion failed: " . $stmt->error;
    }

    $stmt->close();

}

$sql_reset_auto_increment = "ALTER TABLE tb_katalog AUTO_INCREMENT = 1";
$result_reset = $config->query($sql_reset_auto_increment);

?>
