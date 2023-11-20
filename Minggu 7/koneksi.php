<?php
    $conn = new mysqli('localhost', 'root', '', 'data_mhs');

    if (!$conn) {
        echo "MySQL Tidak Terhubung";
    }
?>