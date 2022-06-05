# What is Onchain Surveys

Onchain Surveys will allow users to create public surveys to collect opinions from the blockchain communities to let the community make decisions and provide sentiment in a decentralized manner.

# Server Requirements

PHP version 5.6 or newer is recommended.

It should work on 5.4.8 as well, but we strongly advise you NOT to run such old versions of PHP, because of potential security and performance issues, as well as missing features.  


(Optional?) onchainsurveys  
You can give your own project name instead of "onchainsurveys" if you want.  


# Install 
```
sudo apt update
sudo apt install apache2 -y
sudo ufw allow in "Apache"
sudo apt install mysql-server -y

sudo apt install php libapache2-mod-php php-mysql -y
```


Clone repo. Next, assign ownership of the directory with the $USER environment variable, which references the current logged user.
```
cd /var/www/
sudo git clone https://github.com/mehmetaltinok/onchainsurveys.git
sudo chown $USER:$USER -R onchainsurveys
sudo nano /etc/apache2/sites-available/onchainsurveys.conf
```
Paste in the following configuration block, which is similar to the default, but updated for our new directory and domain name.
```
<VirtualHost *:80>
    ServerAdmin webmaster@localhost
    ServerName your_domain
    ServerAlias www.your_domain
    DocumentRoot /var/www/onchainsurveys
    ErrorLog ${APACHE_LOG_DIR}/error.log
    CustomLog ${APACHE_LOG_DIR}/access.log combined
</VirtualHost>
<Directory /var/www/onchainsurveys>
    Options Indexes FollowSymLinks
    AllowOverride All
    Require all granted
</Directory>

```
Let’s enable the file with the a2ensite tool.
```
sudo a2ensite onchainsurveys.conf
sudo a2dissite 000-default.conf
sudo systemctl reload apache2
```

Enable mod_rewrite for Apache 2.2
```
sudo a2enmod rewrite
sudo /etc/init.d/apache2 restart
```




```
mysql -u root -p

CREATE DATABASE onchainsurveys;
exit
```



## Installation  
Please see the [installation section](https://codeigniter.com/userguide3/installation/index.html) of the CodeIgniter User Guide.  


## Config  
  
Open the application/config/config.php  
` $config['base_url'] = 'http://example.com/'; `
Or
` $config['base_url'] = 'http://your_server_ip/'; `
 

Open the application/config/database.php 
```
'hostname' => 'localhost',  
'username' => 'root', // your database username  
'password' => '', 	 // your database password  
'database' => 'onchainsurveys', // your database name  
'dbdriver' => 'mysqli',  
```
 
## Database import 
`php index.php migrate`



open your browser  
http://localhost/onchainsurveys  
or  
http://localhost/your_proje_file_name  

example file name onchainsurveys  
 
### cypress test
```
npm install cypress
npm install cypress --save-dev

npx cypress open
```

## Login 
```
username :admin  
password : 12345678  
```



