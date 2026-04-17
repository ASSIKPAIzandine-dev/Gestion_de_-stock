<?php
namespace App\Controllers;
use App\Models\Product;


class ProductController extends Controller implements CRUD{

    public function index(){
                  //echo "page index";
                 $produits = Product::all();
                // var_dump($produits);
                 $this->render("products/index.php",['produits' => $produits]);  
    }
    public function createForm(){
                   $this->render("products/add.php");  

    }
    public function storeAction(){
                     //echo "storeaction";
                     $libelle=htmlspecialchars($_POST["libelle"]);
                     //echo $libelle;
                     $prix=htmlspecialchars($_POST["prix"]);
                     //echo $prix;
                     $stock=htmlspecialchars($_POST["stock"]);
                     //echo $stock;
                     $description=htmlspecialchars($_POST["description"]);
                     //echo $description;
                     //echo strlen($libelle);
                     $messages_erreur="";
                 
                     if (strlen($libelle)<3){
                         $erreurLibelle ="le libelle doit étre renseigné et doit avoir aux moins 3 caractères";
                         $messages_erreur=$messages_erreur.$erreurLibelle."<br>";
                       
                   }
                   if($prix<=0 ){
                      $erreurPrix="le prix ne doit pas etre negatif et ni vide !!";
                      $messages_erreur=$messages_erreur.$erreurPrix."<br>";
                      
                   }
                   if($stock<=0){
                    $erreurStock="le stock ne doit pas etre negatif et ni vide !! ";
                    $messages_erreur=$messages_erreur.$erreurStock."<br>";
                    //echo $messages_erreur;
                   }
                 
                   if(empty($messages_erreur)){
                     //echo "aucune erreur trouvée";
                     $produit=compact("libelle","prix","stock","description");
                     //rint_r($produit);
							Product::save($produit);
							header("Location:/produits");

                   }
                   else{
                        header("Location:/produits/form?message=$messages_erreur");
                   }

            
    }
    public function show($id){
                 $produit=Product::find($id);
                 //print_r($produit);
                  $this->render("products/show.php",['produit' => $produit]);  


    }
    public function editForm($id){
					$produit=Product::find($id);
	 				$this->render("products/editForm.php",['produit'=>$produit]);
	
    }
    public function updateAction($id){
				// echo "page updateAction";
			   	          $libelle=htmlspecialchars($_POST["libelle"]);
                     	 $prix=htmlspecialchars($_POST["prix"]);
                     	 $stock=htmlspecialchars($_POST["stock"]);
                         $description=htmlspecialchars($_POST["description"]);
                        
				 

				if (strlen($libelle)<3){
                         	$erreurLibelle ="le libelle doit étre renseigné et doit avoir aux moins 3 caractères";
                         	$messages_erreur=$messages_erreur.$erreurLibelle."<br>"; 
					 //echo $messages_erreur;
                   }
            if($prix<=0 ){
                      		$erreurPrix="le prix ne doit pas etre negatif et ni vide !!";
                      		$messages_erreur=$messages_erreur.$erreurPrix."<br>";
				   }
				if($stock<=0){
                   		 $erreurStock="le stock ne doit pas etre negatif et ni vide !! ";
                   		 $messages_erreur=$messages_erreur.$erreurStock."<br>";
                   		 //echo $messages_erreur;
                   	}
            
				if(empty($messages_erreur)){
                     				//echo "aucune erreur trouvée";
                     				$produit=compact("id","libelle","prix","stock","description");
                                 //print_r($produit);
                                 Product::update($produit);          
						 	            header("Location:/produits");

                     }
                   	else{
                    	     header("Location:/produits/$id/edit?message=$messages_erreur");
                     	}
    }
    public function deleteAction($id){
      // echo "page delete";
       $find=Product::find($id);
       if($find!==false){
          Product::delete($id);
          header("Location:/produits");
       }
       else{
             echo "le produit n 'existe pas!!";
       }
   
   }


    
}







































