# Elo-voting-system
A website for using the Elo-voting-system

#Setting Up
Open up a terminal

Install a LAMP server (Ubuntu 12.04+)<br>
```sudo apt-get install tasksel```<br>
```sudo tasksel install lamp-server```<br>

Navigate to your ```httpdocs``` / ```www``` folder<br>
```cd /var/www```

Then clone this respository <br>
```git clone https://github.com/skarard/Voteelo```

Use you Web Browser to set up the database<br>
http://127.0.0.1/phpmyadmin/

Create a database called poll and use the file in /database to import the database structure to poll

Edit ```/includes/db.php```<br>
```$servername = "localhost"; // this will ususally be 'localhost', but can sometimes differ```<br>
```$username = "root"; // the username that you created, or were given, to access your database```<br>
```$password = "google123"; // the password that you created, or were given, to access your database```<br>
```$dbname = "poll"; // the name of the database that you are going to use for this project```<br>

Edit ```/includes/base.php```<br>
```$dbhost = "localhost"; // this will ususally be 'localhost', but can sometimes differ```<br>
```$dbname = "poll"; // the name of the database that you are going to use for this project```<br>
```$dbuser = "root"; // the username that you created, or were given, to access your database```<br>
```$dbpass = "google123"; // the password that you created, or were given, to access your database```<br>


Use a Web Browser to navigate to<br>
http://127.0.0.1/Voteelo/

Register a new user to start voting
