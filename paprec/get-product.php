<?php

require_once  "../inc/db.php";


$params = [];

$db = dbConnect();
$sql = "SELECT * FROM products";
$statement = $db->prepare($sql);
if($statement !== false) {
    $success = $statement->execute($params);
    if($success) {
        $rows = $statement->fetchAll(PDO::FETCH_ASSOC);
        $json = json_encode($rows); // transforme le tableau en JSON
        //header("Content-Type: application/json");
        echo $json;
    } else {
        echo "test";
        http_response_code(500);
    }
} else {
    echo "test2";
    http_response_code(500);
}
?>