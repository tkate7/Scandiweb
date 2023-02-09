<?php

    namespace Classes\Invalid;

    use Classes\ProductLogic\Validation;

    class Fields extends Validation {
        
        public function sku() {
        
            $field = trim($_POST['sku']);  
            
            if (empty($field)) {
                
                return "Please enter required data";
                
            } else if ($this->checkSkuDuplicate() == FALSE) {
                
                return "SKU already exists";
            }
        }
        
        public function name() {
            
            $field = trim($_POST['name']);
            
            if (empty($field)) {
                
                return "Please enter required data";
            }
        }
        
        public function price () {
            
            $field = trim($_POST['price']);
            
            if (empty($field)) {
                
                return "Please enter required data";
            } else if (!preg_match('/^[0-9]+(\.[0-9]{1,2})?$/', $field)) {
                
                return "Price must be a number";
            }
        }
        
        public function typeSwitcher () {
           
           $field = trim($_POST['selector']);
           
           if (empty($field)) {
               
               return "Please enter the value of the indiciated type";
           }
       }
        
    }
        

