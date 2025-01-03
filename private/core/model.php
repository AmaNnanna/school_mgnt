<?php

/**
 * Main model
 */
class Model extends Database
{
    function __construct()
    {
        // code...
        if (property_exists($this, 'table')) {
            $this->table = $this->table;
        } else {
            $this->table = strtolower(get_class($this)) . 's';
        }
    }

    public function findAll()
    {
        $query = "select * from $this->table";
        return $this->run($query);
    }

    public function where($column, $value)
    {
        $column = addslashes($column);
        $query = "select * from $this->table where $column = :value";
        return $this->run($query, ['value' => $value]);
    }

    public function insert($record)
    {
        $keys = array_keys($record);
        $columns = implode(',', $keys);
        $values = implode(',:', $keys);

        $query = "insert into $this->table ($columns) values (:$values)";
        return $this->run($query, $record);
    }

    // public function where($column, $value)
    // {
    //     $column = addslashes($column);
    //     $query = "select * from $this->table where $column = :value";
    //     return $this->run($query, ['value' => $value]);
    // }

    // public function where($column, $value)
    // {
    //     $column = addslashes($column);
    //     $query = "select * from $this->table where $column = :value";
    //     return $this->run($query, ['value' => $value]);
    // }
}
