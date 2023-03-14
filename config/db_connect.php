<?php

// konekcija baze
$conn = mysqli_connect('localhost', 'user', 'pass', 'ime_baze');

// proveri konekciju
if (!$conn) {
    echo 'Konekcija greška: ' . mysqli_connect_error();
}
