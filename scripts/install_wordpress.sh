sudo apt update -y
sudo apt install apache2 ghostscript libapache2-mod-php mysql-server php php-bcmath php-curl php-imagick php-intl php-json php-mbstring php-mysql php-xml php-zip wget unzip -y

sudo systemctl enable apache2
sudo systemctl start apache2
sudo systemctl enable mysql
sudo systemctl start mysql

sudo mkdir -p /srv/www
sudo chown www-data: /srv/www
curl https://wordpress.org/latest.tar.gz | sudo -u www-data tar zx -C /srv/www

sudo mysql -u root -e 'CREATE DATABASE wordpress;'
sudo mysql -u root -e 'CREATE USER wordpress@localhost IDENTIFIED BY "admin123";'
sudo mysql -u root -e 'GRANT SELECT,INSERT,UPDATE,DELETE,CREATE,DROP,ALTER ON wordpress.* TO wordpress@localhost;'
sudo mysql -u root -e 'FLUSH PRIVILEGES;'

sudo cp /vagrant/wp-config.php /srv/www/wordpress/wp-config.php
sudo chown www-data:www-data /srv/www/wordpress/wp-config.php 

curl -s api.wordpress.org | sudo -u www-data tee -a /srv/www/wordpress/wp-config.php > /dev/null

sudo -u www-data sed -i 's/database_name_here/wordpress/' /srv/www/wordpress/wp-config.php
sudo -u www-data sed -i 's/username_here/wordpress/' /srv/www/wordpress/wp-config.php
sudo -u www-data sed -i 's/password_here/admin123/' /srv/www/wordpress/wp-config.php

sudo cp /vagrant/wordpress.conf /etc/apache2/sites-available/wordpress.conf
sudo a2ensite wordpress.conf
sudo a2enmod rewrite
sudo a2dissite 000-default.conf
sudo systemctl reload apache2
