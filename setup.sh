#!/bin/bash

# Update sistem
apt update && apt upgrade -y

# Install paket yang diperlukan
apt install -y apache2 php git unzip

# Clone project dari GitHub
cd /var/www/html
git clone https://github.com/DEDI1956/DIANA-STORE-VIP.git .

# Atur permission
chown -R www-data:www-data /var/www/html
chmod -R 755 /var/www/html

# Restart Apache
systemctl restart apache2

echo "Setup selesai! Website sudah bisa diakses."
