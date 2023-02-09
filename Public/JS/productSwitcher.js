$(document).ready(function() {
  
    $('#productType').change(function(){
    
    var responseID = $(this).val();
    
    if (responseID == "DVD"){
        
        $('#dvdDetails').removeClass("dvdAttribute");
        $('#dvdDetails').addClass("show");
        
        } else {
            
            $('#dvdDetails').removeClass("show");
            $('#dvdDetails').addClass("dvdAttribute");
            
            }
    
    if (responseID == "Furniture"){
        
        $('#furnitureDetails').removeClass("furnitureAttribute");
        $('#furnitureDetails').addClass("show");
        
        } else {
            
            $('#furnitureDetails').removeClass("show");
            $('#furnitureDetails').addClass("furnitureAttribute");
            
            }
    if (responseID == "Books"){
        
        $('#booksDetails').removeClass("booksAttribute");
        $('#booksDetails').addClass("show");
        
        } else {
            
            $('#booksDetails').removeClass("show");
            $('#booksDetails').addClass("booksAttribute");
            
        }
});

    
});