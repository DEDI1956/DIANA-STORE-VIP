<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $pesan = urlencode($_POST["pesan"]);
    $protokol = urlencode($_POST["protokol"]);
    $jangka_waktu = urlencode($_POST["jangka_waktu"]);
    $no_wa_pembeli = urlencode($_POST["no_wa"]);

    // Nomor WhatsApp tujuan (punyamu)
    $no_wa_tujuan = "085723657734";

    // Format pesan
    $text = "Pesan: $pesan%0AProtokol: $protokol%0AJangka Waktu: $jangka_waktu%0ANo WA: $no_wa_pembeli";

    // Redirect ke WhatsApp
    header("Location: https://wa.me/$no_wa_tujuan?text=$text");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Form Order</title>
</head>
<body>
    <form action="order.php" method="post">
        <label>Pesan:</label>
        <input type="text" name="pesan" required><br>

        <label>Protokol:</label>
        <select name="protokol" required>
            <option value="SSH">SSH</option>
            <option value="VMess">VMess</option>
            <option value="VLESS">VLESS</option>
            <option value="Trojan">Trojan</option>
        </select><br>

        <label>Jangka Waktu:</label>
        <select name="jangka_waktu" required>
            <option value="7 Hari">7 Hari</option>
            <option value="15 Hari">15 Hari</option>
            <option value="30 Hari">30 Hari</option>
        </select><br>

        <label>No WhatsApp:</label>
        <input type="text" name="no_wa" required><br>

        <button type="submit">Kirim ke WhatsApp</button>
    </form>
</body>
</html>
