<?php
class Product {
    public function __construct($db){
        $this->conn = $db;
    }

    function prodRead(){
        // Selects all products from db
        $query = "SELECT * FROM products";

        // Prepares query statement
        $stmt = $this->conn->prepare($query);

        // Execute query
        $stmt->execute();

        // Return values
        return $stmt;
    }
}

?>