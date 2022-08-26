<?php


//Get Heroku ClearDB connection information
$cleardb_url = parse_url(getenv("CLEARDB_DATABASE_URL"));
$cleardb_server = $cleardb_url["host"];
$cleardb_username = $cleardb_url["user"];
$cleardb_password = $cleardb_url["pass"];
$cleardb_db = substr($cleardb_url["path"], 1);
$active_group = 'default';
$query_builder = TRUE;
// Connect to DB
$conn = mysqli_connect($cleardb_server, $cleardb_username, $cleardb_password, $cleardb_db);

ob_start();
// include header.php file
    include("header.php");
?>

<?php
    // include banner area
    include("template/_banner-area.php");

    // include top sale
    include("template/_top-sale.php");

    //include special price
    include("template/_special-price.php");

    //new phones
    include("template/_new-phones.php");

    //blogs
    include("template/_blogs.php");
?>

<?php
// include footer.php file
    include("footer.php");
?>