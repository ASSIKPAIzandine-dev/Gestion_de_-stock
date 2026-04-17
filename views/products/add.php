<?php
    $erreur_recuperer=$_GET["message"];
   // echo $erreur_recuperer;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page ajouter</title>
       <style> <?php require __DIR__."/../../public/accedes/style/add.css"  ?> </style>
</head>
<body>
       
        <div class="formulaire">
            <fieldset id="contour" >
            <h1>formulaire d'enregistrement</h1>
             <form action="/produits" method="post">
                <span style="color:red" ><?= $erreur_recuperer ;?>  </span>
                
                <label for="libel">Libelle</label> <br>
                <input type="text" id="libel" name="libelle" class="inputs" ><br>
                    <label for="prix">Prix</label> <br>
                    <input type="number" id="prix" name="prix" class="inputs"  ><br>
                        <label for="stock">Stock</label> <br>
                        <input type="number" id="stock" name="stock" class="inputs"  ><br>
                            <label for="description">Description</label> <br>
                             
                            <textarea type="text" name="description" id="description" class="inputs"  ></textarea> <br>
                           <button type="submit" id="bouton" >Envoyer</button>
             </form>
                 
          
                 
        </fieldset>
        </div>

</body>
</html>