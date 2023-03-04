<?php

// konekcija baze
$conn = mysqli_connect('localhost', 'root', 'ivan19', 'sajt_vesti');

// proveri konekciju
if (!$conn) {
    echo 'Konekcija greška: ' . mysqli_connect_error();
}
