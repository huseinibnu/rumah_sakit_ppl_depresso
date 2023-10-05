<?php
if (!defined('INDEX')) die("");

$halaman = array(
    "pasien", "pasien_tambah", "pasien_insert", "pasien_edit", "pasien_update",
    "pasien_hapus"
);
if (isset($_GET['hal']))
    $hal = $_GET['hal'];
else
    $hal = "dashboard";

foreach ($halaman as $h) {
    if ($hal == $h) {
        include 'content/' . $h . '.php';
        break;
    }
}