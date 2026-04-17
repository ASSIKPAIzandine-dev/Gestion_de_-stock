<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>page detaille</title>
    <style> <?php require __DIR__."/../../public/accedes/style/show.css"  ?> </style>
</head>
<body>
    <div class="show">
    <h1 class="maSpan" >details sur un produit </h1>
    
    <!-- <table border="1">
       <thead>
           <tr>
            <th>Libelle</th>
            <th>prix</th>
            <th>stock</th>
            <th>description</th>

           </tr>
        </thead>
         <tbody>
            <tr>
                <td> <?= $produit["libelle"] ; ?></td>
                <td><?= $produit["prix"] ; ?></td>
                <td><?= $produit["stock"] ; ?></td>
                <td><?= $produit["descriptions"] ; ?></td>
            </tr>
         </tbody>


    </table> -->
    
    <span class="maSpan" id="libe" >Libellé: <?= $produit["libelle"] ; ?>  </span> <br>
    <span class="maSpan" id="pr">Prix:<?= $produit["prix"] ; ?> FCFA </span> <br>
    <span class="maSpan" id="stoc"> Stock:   <?= $produit["stock"] ; ?></span> <br>
    <span class="maSpan" id="des">descriptions:  <?= $produit["descriptions"] ; ?></span> <br>
   </div>















</body>
</html>