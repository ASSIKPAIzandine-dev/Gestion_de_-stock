<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>vue index</title>
   
     <style> <?php require __DIR__."/../../public/accedes/style/index.css"  ?> </style>

</head>
<body class="bodi" >
   <div id="lienAjout">
    <a href="/produits/form"><button id ="ajout">Ajouter un produit</button></a>
  </div>

    <div class="tables">
       <h1 id="titre" >SYSTÈME DE GESTION DU STOCK </h1>
       <table border="1" id="matable" >
           <thead id="entete" >
                <tr>
                    <th>Libelle</th>
                    <th>Prix</th>
                    <th>Stock</th>
                    <th>description</th>
                    <th>Action</th>
                </tr>
           </thead>
            <tbody id="corps" >
                 <?php foreach($produits as $produit): ?>

                  <tr>

                    <td> <?= $produit["libelle"] ;?> </td>
                    <td> <?= $produit["prix"] ; ?> </td>
                     <td> <?= $produit["stock"] ; ?> </td>
                      <td> <?= $produit["descriptions"] ; ?> </td>

                      <td>
                         
                      <div class="btn">

                      <form action="/produits/<?= $produit['id']?>/delete" method="post"> <button type="submit" id="delete" >DELETE</button> </form> 
                       <a href="/produits/<?= $produit["id"]?>/edit"><button id="update" >UPDATE</button> </a>
                       <a href="/produits/<?= $produit["id"] ?> "> <button id= "show" > SHOW</button> </a>
                         
                      </div>
                    
                      </td>

                    </tr>

               <?php endforeach; ?>

            </tbody>
      </table>



    </div>
         
</body>
</html>