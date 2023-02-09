<?php

    namespace Classes\ProductType;

    interface Attributes {
        
        public function invalidInput ();
    }

    class DvdAttribute implements Attributes {
        
        public function invalidInput() {
            
            $field = trim($_POST['dvd']);
            
            if (empty($field)) {
                
                return FALSE;
            }
            
        }
    }

    class FurnitureAttribute implements Attributes {
        
        public function invalidInput() {
            
            $field1 = trim($_POST['height']);
            $field2 = trim($_POST['width']);
            $field3 = trim($_POST['length']);
            
            if (empty($field1) && empty($field2) && empty($field3)) {
                
                return FALSE;
                
            }
        }
    }

    class BooksAttribute implements Attributes {
        
        public function invalidInput() {
            
            $field = trim($_POST['books']);
            
            if (empty($field)) {
                
                return FALSE;
            }
        }
    }

    class ThrowErrorMsg {
        
        public function errorDvd (Attributes $dvdAttribute) {
            
            $field = $dvdAttribute->invalidInput();
            
            if ($field == FALSE) {
                
                return "Please enter a value";
            }
              
        }
        
        public function errorFurniture (Attributes $furnitureAttribute) {
            
            $field = $furnitureAttribute->invalidInput();
            
            if ($field == FALSE) {
                
                return "Please enter a value";
            }
            
        }
        
        public function errorBooks (Attributes $booksAttribute) {
            
            $field = $booksAttribute->invalidInput();
            
            if ($field == FALSE) {
                
                return "Please enter a value";
            }
        }
    }