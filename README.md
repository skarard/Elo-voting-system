# Elo-voting-system
A website for using the Elo-voting-system

#Setting Up
Open up a terminal

Install a LAMP server (Ubuntu 12.04+)
sudo apt-get install tasksel
sudo tasksel install lamp-server

Navigate to your httpdocs / www folder
cd /var/www

Then clone this respository 
git clone https://github.com/skarard/Elo-voting-system

Use you Web Browser to set up the database
http://127.0.0.1/phpmyadmin/

Create a database called poll and use the files in /database to import the databse structure to poll

Edit /includes/db.php
$servername = "localhost"; // most likely correct
$username = "root"; // most likely correct
$password = "google123"; // CHANGE ME to the password you log in to phpmyadmin with
$dbname = "poll"; // most likely correct


Use a Web Browser to navigate to
http://127.0.0.1/Elo-voting-system/
