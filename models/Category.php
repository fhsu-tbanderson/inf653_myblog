<?php
    class Category
    {
        // DB Connection
        private $conn;
        private $table = 'categories';

        // Constructor with DB
        public function __construct($db)
        {
            $this->conn = $db;

        }

        // Get Categories
        public function read()
        {
            // Create query
            $query = "
            SELECT 
                id,
                name
                
            FROM {$this->table}
            ORDER BY
                created_at DESC";


            // Prepare statement
            $stmt = $this->conn->prepare($query);

            // Execute query
            $stmt->execute();

            return $stmt;

        }

    }