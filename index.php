<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DIANA STORE VIP</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #e0f7e0; /* Latar belakang hijau muda */
            text-align: center;
        }
        .container {
            width: 80%;
            margin: auto;
        }
        .card {
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            margin: 10px 0;
        }
        select, button {
            padding: 10px;
            margin: 5px;
            font-size: 16px;
        }
        .order-btn {
            background-color: #28a745;
            color: white;
            border: none;
            cursor: pointer;
        }
        .server-select {
            font-weight: bold;
            color: #007bff;
        }
    </style>
</head>
<body>

    <h1>Selamat Datang di DIANA STORE VIP</h1>

    <div class="container">
        
        <!-- SSH -->
        <div class="card">
            <h2>SSH</h2>
            <label class="server-select">Pilih Server:</label>
            <select id="server-ssh">
                <option value="Indonesia">Server Indonesia</option>
                <option value="Singapura">Server Singapura</option>
                <option value="Amerika">Server Amerika</option>
            </select>
            <p>Harga:</p>
            <button class="order-btn" onclick="order('SSH', '30 Hari', 10000)">Rp10.000 / 30 Hari</button>
            <button class="order-btn" onclick="order('SSH', '15 Hari', 6000)">Rp6.000 / 15 Hari</button>
            <button class="order-btn" onclick="order('SSH', '7 Hari', 3000)">Rp3.000 / 7 Hari</button>
        </div>

        <!-- VMess -->
        <div class="card">
            <h2>VMess</h2>
            <label class="server-select">Pilih Server:</label>
            <select id="server-vmess">
                <option value="Indonesia">Server Indonesia</option>
                <option value="Singapura">Server Singapura</option>
                <option value="Amerika">Server Amerika</option>
            </select>
            <p>Harga:</p>
            <button class="order-btn" onclick="order('VMess', '30 Hari', 10000)">Rp10.000 / 30 Hari</button>
            <button class="order-btn" onclick="order('VMess', '15 Hari', 6000)">Rp6.000 / 15 Hari</button>
            <button class="order-btn" onclick="order('VMess', '7 Hari', 3000)">Rp3.000 / 7 Hari</button>
        </div>

        <!-- VLESS -->
        <div class="card">
            <h2>VLESS</h2>
            <label class="server-select">Pilih Server:</label>
            <select id="server-vless">
                <option value="Indonesia">Server Indonesia</option>
                <option value="Singapura">Server Singapura</option>
                <option value="Amerika">Server Amerika</option>
            </select>
            <p>Harga:</p>
            <button class="order-btn" onclick="order('VLESS', '30 Hari', 10000)">Rp10.000 / 30 Hari</button>
            <button class="order-btn" onclick="order('VLESS', '15 Hari', 6000)">Rp6.000 / 15 Hari</button>
            <button class="order-btn" onclick="order('VLESS', '7 Hari', 3000)">Rp3.000 / 7 Hari</button>
        </div>

        <!-- Trojan -->
        <div class="card">
            <h2>Trojan</h2>
            <label class="server-select">Pilih Server:</label>
            <select id="server-trojan">
                <option value="Indonesia">Server Indonesia</option>
                <option value="Singapura">Server Singapura</option>
                <option value="Amerika">Server Amerika</option>
            </select>
            <p>Harga:</p>
            <button class="order-btn" onclick="order('Trojan', '30 Hari', 10000)">Rp10.000 / 30 Hari</button>
            <button class="order-btn" onclick="order('Trojan', '15 Hari', 6000)">Rp6.000 / 15 Hari</button>
            <button class="order-btn" onclick="order('Trojan', '7 Hari', 3000)">Rp3.000 / 7 Hari</button>
        </div>

    </div>

    <script>
        function order(protokol, durasi, harga) {
            let server = document.getElementById(`server-${protokol.toLowerCase()}`).value;
            let wa = "+6285723657734"; // Nomor WA tujuan
            let pesan = `Halo, saya ingin order ${protokol} dengan durasi ${durasi}, server ${server}, harga Rp${harga}.`;
            let url = `https://wa.me/${wa}?text=${encodeURIComponent(pesan)}`;
            window.location.href = url;
        }
    </script>

<!-- Form Keluhan -->
<h2>Form Keluhan</h2>
<form action="proses_keluhan.php" method="POST">
    <label for="keluhan">Keluhan:</label><br>
    <textarea id="keluhan" name="keluhan" rows="4" required></textarea><br><br>

    <label for="whatsapp">No WhatsApp:</label><br>
    <input type="text" id="whatsapp" name="whatsapp" required><br><br>

    <label for="akun">Akun yang Bermasalah:</label><br>
    <input type="text" id="akun" name="akun" required><br><br>

    <button type="submit">Kirim Keluhan</button>
</form></body>
</html>
