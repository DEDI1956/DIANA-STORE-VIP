<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $keluhan = urlencode($_POST['keluhan']);
    $whatsapp = urlencode($_POST['whatsapp']);
    $akun = urlencode($_POST['akun']);

    // Ganti \n dengan %0A agar WhatsApp mengenali baris baru
    $pesan = "Keluhan dari pelanggan:%0A";
    $pesan .= "No WA: $whatsapp%0A";
    $pesan .= "Akun yang bermasalah: $akun%0A";
    $pesan .= "Keluhan: $keluhan";

    $nomorAdmin = "+6285723657734"; // Ganti dengan nomor WhatsApp admin

    // Kirim ke WhatsApp via link
    $url = "https://wa.me/$nomorAdmin?text=$pesan";
    header("Location: $url");
    exit();
}
?>
