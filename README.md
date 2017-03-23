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

Add owncloud to the repository and dowload it:

* `$ sudo su`
* `$ wget -nv https://download.owncloud.org/download/repositories/stable/Debian_8.0/Release.key -O Release.key`
* `$ apt-key add - < Release.key`
* `$ sh -c "echo 'deb http://download.owncloud.org/download/repositories/stable/Debian_8.0/ /' >/etc/apt/sources.list.d/owncloud.list"`
* `$ apt-get update`
* `$ apt-get install owncloud`.
When MySQL requests root password, use 'toor'.

Access to *localhost/owncloud* to configure owncloud.

## Installing [WordPress](https://es.wordpress.org/):

Download the files:

* `$ sudo su`
* `$ cd /var/www`
* `$ wget https://es.wordpress.org/wordpress-4.7.1-es_ES.zip`
* `$ unzip wordpress-4.7.1-es_ES.zip`

Configure apache2 for showing wordpress directory

* `$ sudo su`
* `$ touch /etc/apache2/conf-available/wordpress.conf`
* `$ touch /etc/apache2/conf-enabled/wordpress.conf`

Edit both files and add the following:

```
Alias /wordpress "/var/www/wordpress/"
<Directory "/var/www/wordpress">
  Options +FollowSymLinks
  AllowOverride All
  SetEnv HOME /var/www/wordpress
  SetEnv HTTP_HOME /var/www/wordpress
</Directory>
```

Restart apache2:

* `$sudo service apache2 restart`


Create a databe for wordpress:

* `$ mysql -u root -p`.
Remember that we use 'toor' as a password.
* `> create database wordpress;`

Install wordpress from web browser:

* When wordpress warns that it cannot create *wp-config.php* file, we create it: `sudo nano /var/www/wordpress/wp-config.php`, and copy the displayed code.



