<?php

    namespace Classes\ProductLogic;

    interface ProductType {
        
        public function validate();

    }

    class DVD implements ProductType {
        
        public function validate () {
         
            $field = $_POST['dvd'];
          
            if (!empty($field)) {
            
                return TRUE;
            
            }   
        }
        
      }

    class Furniture implements ProductType {
        
        public function validate () {
        
            $field1 = $_POST['height'];
            $field2 = $_POST['width'];
            $field3 = $_POST['length'];
            
            if (!empty($field1) && !empty($field2) && !empty($field3)) {
                
                return TRUE;
                
            } 
        }
    }

    class Books implements ProductType {
        
        public function validate () {
            
            $field = $_POST['books'];
            
            if (!empty($field)) {
                
                return TRUE;
            }
            
        }
    }

