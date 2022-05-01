<?php

/**
 * Return the database connection data
 *
 * @return PDO database connection data
 */
function dbConnect() : PDO{
    $driver = "mysql";
    $host = "localhost";
    $port = 3306;
    $db = "adheprint";
    $user = "root";
    $password = "root";

    return new PDO("$driver:host=$host;port=$port;dbname=$db;charset=utf8", $user, $password);
}

/**
 * Insert data in database
 *
 * @param PDO $db the database connection data
 * @param string $sql the request
 * @param array $params array of params
 * @return string|null return the id of the insert data or null in case of insertion fail
 */
function dbInsert(PDO $db, string $sql, array $params): ?bool {
    $statement = $db->prepare($sql);
    if ($statement) {
        $success = $statement->execute($params);
        if ($success) {
            return true;
        }
    }
    return false;
}

/**
 * Find data
 *
 * @param PDO $db the database connection data
 * @param string $sql the request
 * @param array $params array of params
 * @return array|null return the data or null in case of no data find
 */
function dbFind(PDO $db, string $sql, array $params): ?array {
    $statement = $db->prepare($sql);
    if ($statement){
        $success = $statement->execute($params);
        if ($success){
            $result = $statement->fetch(PDO::FETCH_ASSOC);
            if ($result){
                return $result;
            }
        }
    }
    return null;
}


function dbFindAll(PDO $db, string $sql, array $params): ?array {
    $statement = $db->prepare($sql);
    if ($statement){
        $success = $statement->execute($params);
        if ($success){
            $result = $statement->fetchAll(PDO::FETCH_ASSOC);
            if ($result){
                return $result;
            }
        }
    }
    return null;
}

/**
 * Execute sql script
 *
 * @param PDO $db
 * @param string $sql
 * @param array $params
 * @return int|null
 */
function dbExec(PDO $db, string $sql, array $params) : ?int {
    $statement = $db->prepare($sql);
    if ($statement){
        $success = $statement->execute($params);
        if ($success){
            return $statement->rowCount();
        }
    }
    return null;
}

/**
 * Create a unique ID for an sql insert
 *
 * @param string $quadrigram quadrigram to add at the start of the id
 * @return string|null return the
 */
function dbCreateId(string $quadrigram): ?string {
    if (strlen($quadrigram) == 4){
        $id = md5(uniqid() . "tud4¤uq%a,?&èhf58" . time() . "o@") . uniqid();
        $id = substr($id, 0, 45);
        $id = str_shuffle($id);
        $id = $quadrigram . "-" . $id;
        return $id;
    }
    return "null";
}
?>