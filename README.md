# VulnerableWebApp

This is a vulnerable web application made with PHP.


### REQUIREMENTS
```
apt-get install php7.4 php7.4-mysql
```

### INSTALLATION & LAUNCHING OF THE APPLICATION

```
git clone https://github.com/OmarAouaj/VulnerableWebApp.git
```

On mysql console:
```
CREATE DATABASE vulnwebapp;
CREATE USER 'dbuser'@'localhost' IDENTIFIED BY 'dbuser';
GRANT ALL PRIVILEGES ON vulnwebapp.* TO 'dbuser'@'localhost';
```

Then import **vulnwebappdb.sql** to mysql:
```
mysql -u root -p vulnewebapp < vulnwebappdb.sql
```

To launch the application:
```
cd VulnerableWebApp
php -S 0.0.0.0:80 -t .
```
