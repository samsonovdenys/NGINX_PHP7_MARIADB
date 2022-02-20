<?php
//Here is ENRYPOIN for APP
//phpinfo();

// new mysqli(docker-compose_sql_service_name, DEFAULT_USER="root", docker-compose_MYSQL_ROOT_PASSWORD, DB_NAME);
$mysqli = new mysqli('mariadb', 'root', 'rootpass', 'budget_db');

// query
$query = "SELECT spese FROM month_items";

// mysqli function query to make queries. Object returned
$objResult = $mysqli->query($query);

foreach($objResult as $key => $value){
    print_r($value);
    echo "<br>";
}

// Check connection
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
}

