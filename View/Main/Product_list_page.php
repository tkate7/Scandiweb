<html>
    <head>
        <meta charset="utf-8">
        <title>Products List</title>
        <link rel="stylesheet" type="text/css" href="../../Public/CSS/Styles.css">
         <link rel="icon" type="image/x-icon" href="">
         <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.2/jquery.min.js"></script>
        <h2>Products List</h2>
    </head>
    <body>  
        <form id="form" action="<?php $_SERVER["PHP_SELF"]; ?>" method="POST">
            <div class="buttons">
                <button type="button" value="add" name="add" id="add-product-btn" method="post"><a href="../Index/AddProducts.php"><b>ADD</b></a>
                </button>
                <button type="submit" value="mass-delete" name="mass-delete" id="delete-product-btn" method="POST" action=""><a href='#'><b>MASS DELETE</b></a></button>
            </div>
            <hr>
            <?php
                $showResults = new Classes\ProductSaving\Show;
                $showResults->showData();
            ?>
        </form> 
    </body>
    <footer>
        <hr>
        <p>Scandiweb Test Assignment</p>
    </footer>
</html>