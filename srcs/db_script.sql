CREATE DATABASE wordpress;
CREATE USER wordpress@localhost IDENTIFIED BY '';
GRANT ALL PRIVILEGES ON wordpress.* TO 'wordpress'@'localhost';
FLUSH PRIVILEGES;