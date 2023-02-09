<html>
    <head>
        <meta charset="utf-8">
        <title>Add Products</title>
        <link rel="stylesheet" type="text/css" href="../../Public/CSS/Styles.css">
        <link rel="icon" type="image/x-icon" href="">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.2/jquery.min.js"></script>
        <h2>Add Products</h2>
    </head>
    <body>
        <form id="product_form" action="" method="POST">
            <div class="buttons">
                <button type="submit" name="save" class="save-btn"><a href=""><b>Save</b></a>
                </button>
                <button type="button" name="cancel" class="cancel-btn"><a href="Index.php"><b>Cancel</b></a>
                </button>
            </div>
            <hr>
            
            <!-- Textfields -->
            
            <div id="fields">
                <div class="textfields">
                    <div class="error">
                        <small><?php echo $sku ?? '' ?></small>
                    </div>
                    <label for="sku" name="sku" type="text" class="label">SKU:</label>
                    <input type="text" id="sku" name="sku" ><br><br>
                    <div class="error">
                        <small><?php echo $name ?? '' ?></small>
                    </div>
                    <label for="name" name="name" type="text" class="label">Name:</label>
                    <input type="text" id="name" name="name" ><br><br>
                    <div class="error">
                        <small><?php echo $price ?? '' ?></small>
                    </div>
                    <label for="price" name="price" type="text" class="label">Price ($):</label>
                    <input type="text" id="price" name="price" ><br><br>
                </div>
            </div> 
            
            <!-- Type Switcher -->
            
            <div id="productTypes"> 
                <div class="error-switcher">
                    <small><?php echo $typeSwitcher ?? '' ?></small>
                </div>
                <label for="product-switcher" name="product-switcher" class="productType">Type Switcher:</label>
                <select name="selector" id="productType">
                    <option></option>
                    <option name="DVD" value="DVD">DVD</option>
                    <option name="furniture" value="Furniture" >Furniture</option>
                    <option name="books" value="Books">Book</option>
                </select>
                <br><br>
                <div id="typeAttributes">
                    
                    <!--DVD-->
                    
                    <div class="dvdAttribute" id="dvdDetails">
                        <div class="errorDvd">
                            <small><?php echo $dvdErr ?? '' ?></small>
                        </div>
                        <label class="dvdLabel">Size (MB):</label>
                        <input type="text" name="dvd" class="dvdInput" id="size">
                        <p>Please provide size</p>
                    </div>
                    
                    <!--Furniture-->
                    
                    <div class="furnitureAttribute" id="furnitureDetails">
                        <div class="errorFurniture">
                            <small><?php echo $furnitureErr ?? '' ?></small>
                        </div>
                        <label class="heightLabel">Height (CM):</label>
                        <input type="text" name="height" class="heightInput" id="height"><br><br>
                        <div class="errorFurniture">
                            <small><?php echo $furnitureErr ?? '' ?></small>
                        </div>
                        <label class="widthLabel">Width (CM):</label>
                        <input type="text" name="width" class="widthInput" id="width"><br><br>
                        <div class="errorFurniture">
                            <small><?php echo $furnitureErr ?? '' ?></small>
                        </div>
                        <label class="lengthLabel">Length (CM):</label>
                        <input type="text" name="length" class="lengthInput" id="length">
                        <p>Please provide dimensions</p>
                    </div>
                    
                    <!--Books-->
                    
                    <div class="booksAttribute" id="booksDetails">
                        <div class="errorBooks">
                            <small><?php echo $booksErr ?? '' ?></small>
                        </div>
                        <label class="booksLabel">Weight (KG):</label>
                        <input type="text" name="books" class="booksInput" id="weight">
                        <p>Please provide weight</p>
                    </div>
                </div>
            </div>
        </form>
        <script src="../../Public/JS/productSwitcher.js"></script>
        </body>
        <footer>
        <hr>
        <p>Scandiweb Test Assignment</p>
        </footer>
</html>