<?php
$message=$_GET["message"];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>page Edite</title>
     <style> <?php require __DIR__."/../../public/accedes/style/editForm.css"  ?> </style>

</head>
<body>
      
      
        <div class="formulaire">   
             <fieldset id="contour" >
                 <h1>modifier votre produit</h1>  
             <form action="/produits/<?= $produit['id']?>/update" method="post">  
                <span style="color:red" ><?= $message ?></span>           
                <label for="libel">Libelle</label> <br>
                <input type="text" id="libel" name="libelle" class="inputs" value="<?= $produit['libelle'] ?>" ><br>
                    <label for="prix">Prix</label> <br>
                    <input type="number" id="prix" name="prix" class="inputs" value="<?= $produit['prix'] ?>" ><br>
                        <label for="stock">Stock</label> <br>
                        <input type="number" id="stock" name="stock" class="inputs" value="<?= $produit['stock'] ?>" ><br>
                            
                        <label for="description">Description</label> <br>
                        <textarea  type="text" name="description" id="description" class="inputs"><?= $produit['descriptions']?> </textarea> <br> 
                           
                   
                           <button type="submit" id="bouton">Envoyer</button>
             </form>
                      
        </fieldset>
        </div>

      











</body>
</html>