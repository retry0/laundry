
CONTENTS OF THIS FILE
---------------------

 * About Laundry 
 * Features


ABOUT KuNaon POS
-------------------------

KuNaon POS is point of sales and business management web based software. It uses the power of the modern web to provide an easy to use & extensible solution suitable for small to medium businesses. It another completely free POS system written during one man’s free time, this system is definitely intended for small cafe and restaurant, especially because it’s a more pared down version of POS than some of the other options on this list.

It's posible to cloud-based, but continues running with limitations when offline. It’s a feature-rich, easy-to-use system. They’ve got all the standard bells and whistles with regards to room management, Menu , Table, and unique features include a dollar for dollar loyalty program that users can customize for their restaurant or cafe.

That was created the intention of helping small business owners stick to their budget, without sacrificing quality in their software. Additionally KuNaon POS seeks to prevent small business owners from getting locked into systems or hardware that are a poor fit for the company. As a result, KuNaon POS can easily run a small cafe or restaurant end-to-end for free. Its features include member management, menu management, handling tips and split payments, and room management. 



KuNaon POS System Requirements
-------------------------------------

The pre-requisites are;

- Apache HTTP Server (recomended)  1.3 or later / Nginx 1.x or later
- MySQL 5.0 or later
- PHP 5.1.0 or later

Operating systems

- Windows
- Linux
- Mac

Databases

- MySQL
- MariaDB

Web Servers

- Apache
- Nginx


INSTALLATION
--------------------------

- Windows

1. Download XAMPP or WAMPP first that include MySQL and Apache Web Server.
2. Then run MySQL and Apache Web Server and open browser to route http://localhost/phpmyadmin.
3. Create database MySQL in phpmyadmin menu.
4. Unzip kunaon-stable-master.zip its own folder and rename it whatever you like.
5. Open browser to route  http://localhost/[application_folder].
6. Fill installation form then, you will quickly run the installation and create database tables. Once done, you will see a success message after the installation is complete

- Linux

in this case,  I used Ubuntu 14.04, 16.04, 17.04

1. Install MySQL , Open Terminal and then run :

- sudo apt-get update
- sudo apt-get install mysql-server mysql-client
- sudo mysql_secure_installation
- sudo mysql_install_db

# if installation was completed. check MySQL version in Console  "mysql --version"

2. Install Apache Web Server

sudo apt-get update
sudo apt-get install apache2
sudo systemctl status apache2

# after apache installation completed please enable .htaccess feeature with following:

sudo nano /etc/apache2/sites-enabled/000-default.conf

# Inside that file, you will find the <VirtualHost *:80> block on line 1. Inside of that block, add the following block:

-------------------------------------------------------------
/etc/apache2/sites-available/default

<Directory /var/www/html>
    Options Indexes FollowSymLinks MultiViews
    AllowOverride All
    Order allow,deny
    allow from all
</Directory>

-------------------------------------------------------------

# Your file should now match the following. Make sure that all blocks are properly indented.

-------------------------------------------------------------

/etc/apache2/sites-available/default

<VirtualHost *:80>
    <Directory /var/www/html>

        . . .

    </Directory>

    . . .
</VirtualHost>

-------------------------------------------------------------

# To put these changes into effect, restart Apache.
# then restart apache, with command "sudo systemctl status apache2" and open you browser to http://localhost

3. Install PHP 5.X / 7.X ( We recomended PHP 7)

sudo apt-get install -y php7.0 libapache2-mod-php7.0 php7.0-cli php7.0-common php7.0-mbstring php7.0-gd php7.0-intl php7.0-xml php7.0-mysql php7.0-mcrypt php7.0-zip

#then check with command "php --version".

4. Install KuNaon POS

# Open MySQL database in terminal with command "mysql  -u root -p"  and create database "create database [you database]".
# Unzip kunaon-stable-master.zip to /var/www/html directory and rename it whatever you like.
# After unzip give grant permission to folder application. with commands "chmod -R 777 /var/www/html/[application_folder]"
# Then restart apache, with command "sudo systemctl status apache2" and open you browser to http://localhost/[application_folder]
# Open browser to route  http://localhost/[application_folder].
# Fill installation form then, you will quickly run the installation and create database tables. Once done, you will see a success message after the installation is complete


- Mac

# Download the standard free MAMP package. There’s also a premium version available in MAMP PRO, but the standard version is more than adequate for your initial needs and contains everything necessary for running KuNaon POS locally.

# After you’ve launched MAMP, there’s a little bit of prep work to be done prior to installing KuNaon POS. Begin with ports. Click on Preferences, select Ports and then select Set Apache & MySQL ports to 80 & 3306. These are standard port settings for these services that you’ll also see on remote servers, so it’s a good idea to use them here.

# Now set your Document Root. This is where your web files reside on your computer and what Apache uses to serve them. By default this will be located in the MAMP Application directory at /Applications/MAMP/htdocs, but you’re free to change it to wherever is most convenient for you. A local Dropbox folder, for example.

# Now let’s create our first database. MAMP comes with phpMyAdmin (a convenient and powerful tool for managing MySQL databases) installed as standard, so we’ll be using that.

# Begin by opening up the Tools menu on the MAMP welcome page and launching phpMyAdmin. Now click on the Databases tab, enter the name of your database in the Create database field and click Create. Use a UTF-8 collation such as utf8_unicode_ci to avoid issues with character encoding down the line.

# Now navigate to the Users tab, click Add user, enter a name and secure password and set the host to local. Then return to the Users tab, select Edit privileges on the user you just created, click Check all and save. We’re assuming here that this database will only be used locally and by yourself.

# Make sure MAMP is running Apache and MySQL and navigate via browser to the KuNaon POS install script in that folder. Use the address format http://localhost/[application_directory]. 

# Navigating to there should kick you into the familiar KuNaon POS 3-Minute Install sequence. Complete this using the database details you created previously and you are now free to develop locally at your leisure.



FEATURES
--------------------------

KuNaon POS seems to be very new on the POS scene, making it better for small cafe and restaurant. It’s going to be interesting to watch this solution grow, though, given its loyalty-focused concept. 


Menu Management
--------------------------
Added, updated and deleted menu & configurations are broadcast to active POS terminals in real time


Room Control
--------------------------
Show your room with tables you care and manage It to active POS.


Branch
--------------------------
Branch management for create your restaurant branch in other location and connected it with VPN. So you can monitoring other branch that connected.


Reporting
--------------------------
Make it easy - users are more likely to report when it’s easy to do and maintain reports in a way that shows emerging problems and patterns over time.


User Role Management
--------------------------
It gives the information we need to use the in the POS. This module permits you to manage users, roles, and groups with high security. The Administrator is the one who can manage User management module, Admin have the right to add, delete, modify, group or add roles



