<?php
namespace System\Core;

use PDO;
use PDOException;

class Database {
    private $pdo;
    private $table;
    private $whereConditions = [];
    private $params = []; // Define $params as a class property

    public function __construct() {
        $config = require __DIR__ . '/../../config/config.php';
        $dsn = "mysql:host={$config['db']['host']};dbname={$config['db']['database']};port={$config['db']['port']}";
        try {
            $this->pdo = new PDO($dsn, $config['db']['username'], $config['db']['password']);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("Database connection failed: " . $e->getMessage());
        }
    }

 
    public function table($table) {
        $this->table = $table;
        return $this;
    }

    
    public function where($column, $value) {
        $this->whereConditions[] = "{$column} = :{$column}";
        $this->params[":{$column}"] = $value;
        return $this;
    }

    public function all() {
        $sql = "SELECT * FROM {$this->table}";
        if (!empty($this->whereConditions)) {
            $whereString = implode(' AND ', $this->whereConditions);
            $sql .= " WHERE {$whereString}";
        }
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute($this->params);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function find($id) {
        $this->where('id', $id);
        $stmt = $this->pdo->prepare("SELECT * FROM {$this->table} WHERE {$this->whereConditions[0]}");
        $stmt->execute($this->params);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function first() {
        $stmt = $this->pdo->query("SELECT * FROM {$this->table} LIMIT 1");
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

   
    public function update($data) {
        $setClauses = [];
        foreach ($data as $key => $value) {
            $setClauses[] = "{$key} = :{$key}";
            $this->params[":{$key}"] = $value;
        }
        $setString = implode(', ', $setClauses);

        $sql = "UPDATE {$this->table} SET {$setString}";
        if (!empty($this->whereConditions)) {
            $whereString = implode(' AND ', $this->whereConditions);
            $sql .= " WHERE {$whereString}";
        }
        
        $stmt = $this->pdo->prepare($sql);
        return $stmt->execute($this->params);
    }

   
    public function insert($data) {
        $columns = implode(', ', array_keys($data));
        $placeholders = ':' . implode(', :', array_keys($data));
        
        $stmt = $this->pdo->prepare("INSERT INTO {$this->table} ({$columns}) VALUES ({$placeholders})");
        return $stmt->execute($data);
    }


    public function delete() {
        $sql = "DELETE FROM {$this->table}";
        if (!empty($this->whereConditions)) {
            $whereString = implode(' AND ', $this->whereConditions);
            $sql .= " WHERE {$whereString}";
        }
        
        $stmt = $this->pdo->prepare($sql);
        return $stmt->execute($this->params);
    }
}
