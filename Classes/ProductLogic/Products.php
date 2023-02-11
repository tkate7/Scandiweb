<?php

    namespace Classes\ProductLogic;

    interface ProductType {
        
        public function validate();

    }

    class DVD implements ProductType {
        
        public function validate () {
         
            $field = trim($_POST['dvd']);
          
            if (!empty(preg_match ('/^[0-9]+(\.[0-9]{1,2})?$/', $field))) {
            
                return TRUE;
            
            }    
        }
        
      }

    class Furniture implements ProductType {
        
        public function validate () {
        
            $field1 = trim(preg_match ('/^[0-9]+(\.[0-9]{1,2})?$/', $_POST['height']));
            $field2 = trim(preg_match('/^[0-9]+(\.[0-9]{1,2})?$/', $_POST['width']));
            $field3 = trim(preg_match('/^[0-9]+(\.[0-9]{1,2})?$/', $_POST['length']));
            
            if (!empty($field1) && !empty($field2) && !empty($field3)) {
                
                return TRUE;
                
            } 
        }
    }

    class Books implements ProductType {
        
        public function validate () {
            
            $field = trim(preg_match('/^[0-9]+(\.[0-9]{1,2})?$/', $_POST['books']));
            
            if (!empty($field)) {
                
                return TRUE;
            }
            
        }
    }
