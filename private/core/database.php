<?php

/**
 * Database class
 */
class Database
{
    private function connect()
{
    try {
        $string = DBDRIVER . ":host=" .DBHOST. ";dbname=" . DBNAME;
        $connection = new PDO($string, DBUSER, DBPASSCODE);
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $connection;
    } catch (PDOException $e) {
        error_log($e->getMessage());

        die("We are experiencing technical difficulties. Please try again later.");
    }
}

    public function run($sql, $data = [], $data_type = "object")
    {
        $connection = $this->connect();
        $statement = $connection->prepare($sql);

        if ($statement) {
            $check = $statement->execute($data);
            if($check){
                if($data_type == "object"){
                    $data = $statement->fetchAll(PDO::FETCH_OBJ);
                } else {
                    $data = $statement->fetchAll(PDO::FETCH_ASSOC);
                }

                if(is_array($data) && count($data) > 0){
                    return $data;
                }
            }
        }
        return false;
    }
}
