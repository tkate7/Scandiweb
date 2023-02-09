<div class="container">
    <div class="fetchedData">
        <table class="listedProducts">
            <input type="checkbox" class="delete-checkbox" name="checkbox[]" value = "<?php echo $data ['sku']; ?>" method="POST">
            <tr>
                <td><small><?php echo $data['sku'] ?? '' ?></small></td>
            </tr>
            <tr>
                <td><small><?php echo $data['name'] ?? '' ?></small><td>
            </tr>
            <tr>

                <td><small><?php echo "$" . $data['price'] ?? '' ?></small></td>
            </tr>
             <tr>
                <td><small>
                    <?php
                        if ($data['dvd'] != 0) {
                            
                            echo "Size: " . "<br>" . $data['dvd'];
                        }
                    
                        if ($data['height'] && $data['width'] && $data['length'] != 0) {
                            
                            echo "Dimensions: " . "<br>" . $data['height'] . " x " . $data['width'] . " x " . $data['length'];
                            
                        }

                        if ($data['books'] != 0) {
                            
                            echo "Weight: "  . "<br>" . $data['books'];
                        }
                    ?>
                </small></td>
            </tr>
        </table> 
    </div>
</div>