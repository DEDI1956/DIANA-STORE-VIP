<?php
session_start();

var_dump($_SESSION);
var_dump($_POST);
exit;;

// Cek apakah user adalah seller
$is_seller = isset($_SESSION["seller_id"]);
$seller_saldo = $_SESSION["saldo"] ?? 0;

// Tentukan harga paket berdasarkan status seller
$harga_30_hari = $is_seller ? 5000 : 10000;
$harga_15_hari = $is_seller ? null : 6000;
$harga_7_hari = $is_seller ? null : 3000;

// Pastikan ada data dari form
if (!isset($_POST["paket"])) {
    die("Paket tidak dipilih!");
}

// Seller hanya boleh membeli paket 30 hari
if ($is_seller && $_POST["paket"] != "30_hari") {
    die("Seller hanya bisa membeli paket 30 hari!");
}

// Tentukan harga paket yang dipilih
$harga_paket = match ($_POST["paket"]) {
    "30_hari" => $harga_30_hari,
    "15_hari" => $harga_15_hari,
    "7_hari" => $harga_7_hari,
    default => die("Paket tidak valid!")
};

// Jika paket yang dipilih tidak memiliki harga (null), tampilkan error
if ($harga_paket === null) {
    die("Paket tidak tersedia untuk status Anda.");
}

// Cek saldo seller sebelum pembelian
if ($is_seller && $seller_saldo < $harga_paket) {
    die("Saldo tidak cukup! Silakan top up.");
}

// Jika seller, kurangi saldo setelah pembelian
if ($is_seller) {
    $_SESSION["saldo"] -= $harga_paket;
    echo "Pembelian berhasil! Sisa saldo: " . $_SESSION["saldo"];
} else {
    echo "Pembelian berhasil!";
}
?>
