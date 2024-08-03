![Static Badge](https://img.shields.io/badge/apache-server-red?logo=Apache&link=https%3A%2F%2Fhttpd.apache.org%2F)
![Static Badge](https://img.shields.io/badge/mariadb-brown?logo=MariaDB&link=https%3A%2F%2Fmariadb.org%2F)
![Static Badge](https://img.shields.io/badge/termux-application-green?link=https%3A%2F%2Ff-droid.org%2Fen%2Fpackages%2Fcom.termux%2F)
![Static Badge](https://img.shields.io/badge/php-apache-purple?logo=Php&logoColor=white&link=https%3A%2F%2Fwww.php.net%2Fmanual%2Fen%2Fbook.apache.php)
![Static Badge](https://img.shields.io/badge/phpmyadmin-v.5.2.1-violet?logo=phpmyadmin&logoColor=white&link=https%3A%2F%2Fwww.php.net%2Fmanual%2Fen%2Fbook.apache.php)

# Termux PHP Server

![asset](images/asset.jpg)

This repository provides a set of configuration files and a script to set up a PHP, Apache, and MySQL server in Termux.

## Files Included

- `config.inc.php`: Configuration file for database connection.
- `httpd-vhosts.conf`: Configuration file for setting up virtual hosts in Apache.
- `httpd.conf`: Main configuration file for Apache.
- `index.php`: Basic PHP script to test the server setup.
- `setup-server.sh`: Shell script to automate the setup process.

## Requirements

> Termux App
- download [Termux](https://termux.en.uptodown.com/android/download) here.

## Usage

1. install git `pkg install git -y`
2. clone the script `git clone https://github.com/christiangarcia0311/termux-php-server`
3. go to the folder directory `cd termux-php-server`
4. Make the script executable by running `sh setup-server.sh`

## Run and Access Server

> Initialize and start mysql

`mysqld --skip-grant-tables`

> Start apache server

`apachectl start`

## Run and Start MySQL

> start mysql

`mysql -u $(whoami)`

## Stop Server

> Terminate running mysql 

`killall mysqld`

> Stop apache server

`apachectl stop`

## Server Domain

> localhost in web browser

`localhost:8080`

> phpmyadmin in web browser

`0.0.0.0:8080`

## Author

![Static Badge](https://img.shields.io/badge/Christian-Garcia-orange?link=https%3A%2F%2Fgithub.com%2Fchristiangarcia0311)

## Contact

For issues, please open an issue on GitHub.



