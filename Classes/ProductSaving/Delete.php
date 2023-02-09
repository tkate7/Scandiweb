<?php

    namespace Classes\ProductSaving;

    use Classes\Database\Database;

    class Delete extends Database {
        
         public function deleteData () {
            
            if (isset($_POST['mass-delete']) && (isset($_POST['checkbox']))) {
                
                $count = count($_POST['checkbox']);
                
                foreach ($_POST['checkbox'] as $checkbox) {
                   
                    $delete = "DELETE FROM scandiweb WHERE sku = '$checkbox'";
                    $query = $this->connect()->query($delete);

                    $count++;
                    
                    header('LOCATION: ../../View/Index/Index.php?success=Product Deleted Succesfully');
                    
                }
                
            } 
            
        } 
         
    }