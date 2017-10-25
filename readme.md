# Project 

Web Application

## Installation

sudo apt-get update

sudo apt-get install apache2
sudo apt-get install php libapache2-mod-php php-mysql

#sudo apt-get install phpmyadmin
#Include /etc/phpmyadmin/apache.conf to the /etc/apache2/apache2.conf file

sudo apt-get install mysql-client mysql-server

## Contents
- HTML

- CSS

- JavaScript

- PHP

- mysql
`
mysql -uroot -p
SHOW DATABASES;
USE DB;
SHOW TABLES;
DESCRIBE TB;
CREATE TABLE test VALUES(id INT NOT NULL AUTO_INCREMENT, title varchar(30) NOT NULL, author varchar(20) NOT NULL, context TEXT NOT NULL, PRIMARY KEY(id));
INSERT INTO test VALUES(1, 'HTML', 'jpark', 'Hyper Text Markup Language', '2017-10-25');
SELECT * FROM test;
UPDATE test SET created='2017-10-26' WHERE id=1;
DELETE FROM test WHERE id =1;
DROP TABLE test;
`
