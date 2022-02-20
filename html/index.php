<?php
//Here is ENRYPOIN for APP
//phpinfo();


// query
$query = "SELECT anno, mese, saldo, stipendio, spese FROM month_items";


// new PDO(docker-compose_sql_service_name, DEFAULT_USER="root", docker-compose_MYSQL_ROOT_PASSWORD);
$pdo = new PDO('mysql:host=mariadb;dbname=budget_db', 'root', 'rootpass');
// PDO function query to make queries. Object returned
$objResultPDO = $pdo->query($query);
foreach ($objResultPDO as $key => $value) {
    print_r('PDO values :');
    echo "<br>";
    print_r($value);
    echo "<br>";
}

// new mysqli(docker-compose_sql_service_name, DEFAULT_USER="root", docker-compose_MYSQL_ROOT_PASSWORD, DB_NAME);
$mysqli = new mysqli('mariadb', 'root', 'rootpass', 'budget_db');
// mysqli function query to make queries. Object returned
$objResultMysqli = $mysqli->query($query);
foreach ($objResultMysqli as $key => $value) {
    print_r('mysqli values :');
    echo "<br>";
    print_r($value);
    echo "<br>";
}



// Check connection
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
}
