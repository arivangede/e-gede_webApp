<?php
require '../../fungsi/functions.php';

if (isset($_POST["topik"])) {

    $id_topik = $_POST["topik"];
    $query = "SELECT * FROM sub_topik WHERE idtopik = $id_topik";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) {
        echo "<option value=''>Tampilkan Semua</option>";
        while ($row = mysqli_fetch_assoc($result)) {
            $id = $row['id'];
            $sub_topik = $row['sub_topik'];
            echo "<option value='$id'>$sub_topik</option>";
        }
    } else {
        echo "<option value=''>Tampilkan Semua</option>";
    }
}
