# Raspberry Pi as a home server

*Pedro Yébenes Segura* (2017-03-23)

## Install and configured apache2 and php5 

* `$ sudo apt-get install apache2 php5 libapache2-mod-php5`

Code files placement:

* Python files must be in `/home/pi/bin`
* PHP files must be in `/var/www/html`

Apache user (www-data) must not ask for password when executing scripts:

* `$ sudo visudo` and we add at the end of the file `www-data ALL=(ALL) NOPASSWD: ALL`


## Installing [ownCloud](https://owncloud.org/):

* `$ sudo su`
* `$ wget -nv https://download.owncloud.org/download/repositories/Stable/Debian_8.0/Release.key -O Release.key`
* `$ apt-key add - < Release.key`
* `$ sh -c "echo 'deb http://download.owncloud.org/download/repositories/stable/Debian_8.0/ /' >/etc/apt/sources.list.d/owncloud.list"`
* `$ apt-get update`
* `$ apt-get install owncloud`.
When MySQL requests root password, use 'toor'.

## Installing [WordPress](https://es.wordpress.org/):

Download the files:

* `$ sudo su`
* `$ cd /var/www`
* `$ wget https://es.wordpress.org/wordpress-4.7.1-es_ES.zip`
* `$ unzip wordpress-4.7.1-es_ES.zip`

Configure apache2 for showing wordpress directory

* `$ sudo su
* `$ touch /etc/apache2/conf-available/wordpress.conf
* `$ touch /etc/apache2/conf-enable/wordpress.conf

Create a databe for wordpress:

* `$ mysql -u root -p`.
Remember that we use 'toor' as a password.
* `> create database wordpress;`

Install wordpress from web browser:

* When wordpress warns that it cannot create *wp-config.php* file, we create it: `sudo nano /var/www/wordpress/wp-config.php`, and copy the displayed code.



