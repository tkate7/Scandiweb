<?php

    namespace Classes\ProductSaving;

    use Classes\ProductSaving\Fetch;

    class Show extends Fetch {
        
        public function showData () {
          
            $datas = $this->getData();
            
            if ($datas) {

             foreach ($datas as  $data) {

                include "Content.php";

            }

                } else {

                    return FALSE;

                }
            
            }
        
        }
