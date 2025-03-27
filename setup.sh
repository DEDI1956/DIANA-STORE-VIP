#!/bin/bash

# Contoh Script Otomatisasi untuk Apache & Domain
if [ -z "$1" ]; then
  echo "Usage: $0 <domain>"
  echo "Contoh: $0 namadomain.com"
  exit 1
fi

DOMAIN=$1

echo "============================="
echo "  Mulai Setup untuk $DOMAIN"
echo "============================="

# Update & Install Apache
apt update -y && apt upgrade -y
apt install -y apache2

# Buat folder untuk domain dan clone project
mkdir -p /var/www/$DOMAIN
cd /var/www/$DOMAIN
git clone https://DEDI1956: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@github.com/DEDI1956/DIANA-STORE-VIP.git .

# Buat Virtual Host Apache untuk domain
cat <<EOF >/etc/apache2/sites-available/$DOMAIN.conf
<VirtualHost *:80>
    ServerName $DOMAIN
    ServerAlias www.$DOMAIN
    DocumentRoot /var/www/$DOMAIN

    <Directory /var/www/$DOMAIN>
        AllowOverride All
        Require all granted
    </Directory>

    ErrorLog \${APACHE_LOG_DIR}/$DOMAIN-error.log
    CustomLog \${APACHE_LOG_DIR}/$DOMAIN-access.log combined
</VirtualHost>
EOF

# Aktifkan Virtual Host dan reload Apache
a2ensite $DOMAIN.conf
systemctl reload apache2

echo "=========================================="
echo "Setup selesai! Arahkan DNS $DOMAIN ke IP VPS ini."
echo "=========================================="
