### Commands to install Apache 

sudo apt update

sudo apt install apache2

sudo ufw app list

sudo ufw allow in "Apache"

sudo ufw status

### You can check your IP address with the following command

curl http://icanhazip.com

### Next open http://127.0.0.1 to check the server is running

## Next installing PHP

### issue these commands to your terminal to install PHP

sudo apt install php libapache2-mod-php php-mysql

php -v

sudo systemctl restart apache2

sudo systemctl status apache2

## Next issue these commands to install MySQL

sudo apt install mysql-server

sudo mysql

### change the root password and make it stronger by issueing the following command

ALTER USER 'root'@'localhost' IDENTIFIED WITH mysql_native_password BY 'password';

mysql>exit

sudo mysql_secure_installation

## You can a Virtual Host for your local Website with these commands

sudo mkdir /var/www/your_domain

sudo chown -R $USER:$USER /var/www/your_domain

sudo nano /etc/apache2/sites-available/your_domain.conf

#### Nano will open the your_domain.con file on terminal
#### write this code inside

<VirtualHost *:80>
    ServerName your_domain
    ServerAlias www.your_domain
    ServerAdmin webmaster@localhost
    DocumentRoot /var/www/your_domain
    ErrorLog ${APACHE_LOG_DIR}/error.log
    CustomLog ${APACHE_LOG_DIR}/access.log combined
</VirtualHost>

#### save and close Nano editor

sudo a2ensite your_domain

sudo apache2ctl configtest

sudo systemctl reload apache2

### since the web root /var/www/your_domain is still empty, you can create an index.html there with the following command and code

nano /var/www/your_domain/index.html

##### index.html code (you can write your own code)

<html>
  <head>
    <title>your_domain website</title>
  </head>
  <body>
    <h1>Hello World!</h1>

    <p>This is the landing page of <strong>your_domain</strong>.</p>
  </body>
</html>

#### save and exit Nano

#### type http://127.0.0.1 on your browser and see the output
### Next you can create a MySQL database and connect your PHP file to it to display the items of database.


