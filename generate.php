<?php
header('Content-Type: application/json');

// Generate akun VPN gratis (contoh format)
$akun = [
    "config" => "vless://random-string@server:443?encryption=none&security=tls&type=ws#AkunGratis",
    "expired" => date("Y-m-d H:i:s", strtotime("+1 hour")) // Berlaku 1 jam
];

echo json_encode($akun);
?>
