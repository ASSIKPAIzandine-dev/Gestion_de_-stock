<?php
    // Imports
    use App\Controllers\ProductController;
    // Définition des routes avec AltoRouter
    $router = new AltoRouter();

    $router->map('GET', '/', function () {
        echo "Home Page";
    });

    $produit=new ProductController();
    $router->map('GET','/produits',[$produit,'index']);
    $router->map('GET', '/produits/[i:id]', [$produit,'show']);
    $router->map('POST','/produits/[i:id]/delete',[$produit,'deleteAction']);
    
    $router->map('GET', '/produits/form', [$produit,'createForm']);
    $router->map('POST', '/produits', [$produit,'storeAction']);

     $router->map('GET', '/produits/[i:id]/edit', [$produit,'editForm']);
    $router->map('POST', '/produits/[i:id]/update', [$produit,'updateAction']);


   
     
     


 

    // Le Match des routes
    $match = $router->match();
    if( is_array($match) && is_callable( $match['target'] ) ) {
	    call_user_func_array( $match['target'], $match['params'] );
    } else {
        // no route was matched
        header( $_SERVER["SERVER_PROTOCOL"] . ' 404 Not Found');
    }


?>
      


















