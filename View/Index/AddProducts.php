<?php 

    require_once "../../Autoloader/Autoload/Autoload.php";
    require_once "../../Classes/ProductLogic/Products.php";
    require_once "../../Classes/Invalid/Errors.php";
    require_once "../../Classes/ProductType/Attributes.php";


    if (isset($_POST['save'])) {

        $validateForm = new Classes\ProductLogic\Validation;
        $validateForm->validateForm();  
 
        $dvd = new Classes\ProductLogic\DVD;
        $furniture = new Classes\ProductLogic\Furniture;
        $books = new Classes\ProductLogic\Books;

        $insertDvd = new Classes\ProductLogic\Validation;
        $insertDvd->insertDvd($dvd);

        $insertFurniture = new Classes\ProductLogic\Validation;
        $insertFurniture->insertFurniture($furniture);

        $insertBooks = new Classes\ProductLogic\Validation;
        $insertBooks->insertBooks($books);
        
        $select = new Classes\ProductSaving\Fetch;
        $select->getData();
        
        $checkSkuDuplicate = new Classes\ProductLogic\Validation;
        $checkSkuDuplicate->checkSkuDuplicate();
        
        $skuError = new Classes\Invalid\Fields;
        $sku = $skuError->sku();
        
        $nameError = new Classes\Invalid\Fields;
        $name = $nameError->name();
        
        $priceError = new Classes\Invalid\Fields;
        $price = $priceError->price();
        
        $typeSwitcherError = new Classes\Invalid\Fields;
        $typeSwitcher = $typeSwitcherError->typeSwitcher();
        
        $dvdAttribute = new Classes\ProductType\DvdAttribute;
        $furnitureAttribute = new Classes\ProductType\FurnitureAttribute;
        $booksAttribute = new Classes\ProductType\BooksAttribute;
        
        $throwErrorMsg1 = new Classes\ProductType\ThrowErrorMsg;
        $dvdErr = $throwErrorMsg1->errorDvd($dvdAttribute);
        
        $throwErrorMsg2 = new Classes\ProductType\ThrowErrorMsg;
        $furnitureErr = $throwErrorMsg2->errorFurniture($furnitureAttribute);
        
        $throwErrorMsg3 = new Classes\ProductType\ThrowErrorMsg;
        $booksErr = $throwErrorMsg3->errorBooks($booksAttribute);

    }

    include_once "../Main/Add_product_page.php";