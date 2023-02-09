<?php

    namespace Classes\ProductSaving;

    use Classes\Database\Database;

    class Fetch extends Database {
        
        public function getData () {
                        
            $sql = "SELECT * FROM scandiweb";
            $result = $this->connect()->query($sql);
            $numRows = $result->num_rows;
            
            if ($numRows > 0) {
                
                while ($row = $result->fetch_assoc()) {
                    
                    $data[] = $row;
                }
                
                return $data;
                
            }
        }
    }