<?php 
$basedir = basename(dirname($_SERVER['PHP_SELF']));

require "include/db.php";

if(isset($_GET['logout'])) {
	include "include/logout.php";
}

require "include/rating.php";
require "include/sendvote.php";
require "include/functions.php";

include "view/head.php";
include "view/header.php";
include "view/content.php";
include "view/footer.php"

?>