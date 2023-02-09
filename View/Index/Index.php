<?php

require_once "../../Autoloader/Autoload/Autoload.php";

$conn = new Classes\Database\Database;
$conn->connect();

$massDelete = new Classes\ProductSaving\Delete;
$massDelete->deleteData();

include_once "../Main/Product_list_page.php";