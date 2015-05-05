# Elo-voting-system
A website for using the Elo-voting-system

#Setting Up
Open up a terminal

Install a LAMP server (Ubuntu 12.04+)<br>
```sudo apt-get install tasksel```
```sudo tasksel install lamp-server```

Navigate to your ```httpdocs``` / ```www``` folder<br>
```cd /var/www```

Then clone this respository <br>
```git clone https://github.com/skarard/Elo-voting-system```

Use you Web Browser to set up the database<br>
http://127.0.0.1/phpmyadmin/

Create a database called poll and use the files in /database to import the databse structure to poll

Edit ```/includes/db.php```<br>
```$servername = "localhost"; // this will ususally be 'localhost', but can sometimes differ```
```$username = "root"; // the username that you created, or were given, to access your database```
```$password = "google123"; // the password that you created, or were given, to access your database```
```$dbname = "poll"; // the name of the database that you are going to use for this project```

Edit ```/includes/base.php```<br>
```$dbhost = "localhost"; // this will ususally be 'localhost', but can sometimes differ```
```$dbname = "poll"; // the name of the database that you are going to use for this project```
```$dbuser = "root"; // the username that you created, or were given, to access your database```
```$dbpass = "google123"; // the password that you created, or were given, to access your database```


Use a Web Browser to navigate to<br>
http://127.0.0.1/Elo-voting-system/
