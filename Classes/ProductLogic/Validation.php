<?php

    namespace Classes\ProductLogic;

    use Classes\Database\Database;

    class Validation extends Database {

        public function insertDvd (ProductType $dvd) {

            $field = $dvd->validate();
            
            if ($field && $this->validateForm() && $this->checkSkuDuplicate() == TRUE) {
                
                $sku = $_POST['sku'];
                $name = $_POST['name'];
                $price = $_POST['price'];
                $type = $_POST['selector'];
                $dvd = $_POST['dvd'];
                $height = $_POST['height'];
                $width = $_POST['width'];
                $length = $_POST['length'];
                $books = $_POST['books'];
                
                $sql = "INSERT INTO scandiweb (sku, name, price, type, dvd, height, width, length, books) VALUES ('$sku', '$name', '$price', '$type', '$dvd', '$height', '$width', '$length', '$books')";
                
                $insert = $this->connect();
                mysqli_query($insert, $sql);
                
                header ('LOCATION: ../../View/Index/Index.php?success=Product Added Succesfully');
            }  
        }

         public function insertFurniture (ProductType $furniture) {

            $field = $furniture->validate();
            
            if ($field && $this->validateForm() && $this->checkSkuDuplicate() == TRUE) {
                
                $sku = $_POST['sku'];
                $name = $_POST['name'];
                $price = $_POST['price'];
                $type = $_POST['selector'];
                $dvd = $_POST['dvd'];
                $height = $_POST['height'];
                $width = $_POST['width'];
                $length = $_POST['length'];
                $books = $_POST['books'];
                
                $sql = "INSERT INTO scandiweb (sku, name, price, type, dvd, height, width, length, books) VALUES ('$sku', '$name', '$price', '$type', '$dvd', '$height', '$width', '$length', '$books')";
                
                $insert = $this->connect();
                mysqli_query($insert, $sql);
                
                header ('LOCATION: ../../View/Index/Index.php?success=Product Added Succesfully');
                
            } 
        }

        public function insertBooks (ProductType $books) {

            $field = $books->validate();
            
            if ($field && $this->validateForm() && $this->checkSkuDuplicate() == TRUE) {
                
                $sku = $_POST['sku'];
                $name = $_POST['name'];
                $price = $_POST['price'];
                $type = $_POST['selector'];
                $dvd = $_POST['dvd'];
                $height = $_POST['height'];
                $width = $_POST['width'];
                $length = $_POST['length'];
                $books = $_POST['books'];
                
                $sql = "INSERT INTO scandiweb (sku, name, price, type, dvd, height, width, length, books) VALUES ('$sku', '$name', '$price', '$type', '$dvd', '$height', '$width', '$length', '$books')";
                
                $insert = $this->connect();
                mysqli_query($insert, $sql);
                
                header ('LOCATION: ../../View/Index/Index.php?success=Product Added Succesfully');
                
            }
    
        }

        public function validateForm () {

            $skuField = trim($_POST['sku']);
            $nameField = trim($_POST['name']);
            $priceField = trim(preg_match('/^[0-9]+(\.[0-9]{1,2})?$/', $_POST['price']));
            $typeSwitcher = trim($_POST['selector']);

            if (!empty($skuField && $nameField && $priceField && $typeSwitcher)) {

                return TRUE;
                
            }
        }
        
        public function checkSkuDuplicate () {

            $checkSku = $_POST['sku'];
            $checkRecord = "SELECT sku FROM scandiweb WHERE sku = '$checkSku'";
            $checkResult = $this->connect()->query($checkRecord);
            $checkNumRows = $checkResult->num_rows;

            if ($checkNumRows == 0) {

                $checkRow = $checkResult->fetch_assoc();

                return TRUE;

            } 
        }
    }