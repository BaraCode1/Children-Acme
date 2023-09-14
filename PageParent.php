<?php session_start();

$client;
if(isset($_SESSION['nomUtilisateur']))
{
    $client=$_SESSION['nomUtilisateur'];
    
    echo 'Bienvenue a la page Parent '.$client;
}

?>

<html>
    <head>
        <title>Page Parent</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <link href="css/PageParencss.css" type="text/css" rel="stylesheet">
        <script src="cart.js"></script>

    </head>
    <body class="container">
      <header id="mainPage">
        <table class="tableImage">
         <tr>
          <td><div align="center">Les animaux de la ferme</div>
              <div><img src="img/animauxDeLaFerme.png" class ="image1")></div>
              <div align="center" class="priceTag">$4.99 <button id="prix" onclick="myFunction()">add to card</button></div></td>
          <td><div align="center">Branche de tuyaux</div>
              <div><img src="img/brancheDeTuyaux.png" class ="image1"></div>
             <div align="center" class="priceTag"><button onclick="myFunction2()">add to card</button></div></td>
          <td><div align="center">Etoile Orange</div>
              <div><img src="img/etoileOrange.png" class ="image1"></div>
              <div align="center" class="priceTag"><button onclick="myFunction3()">add to card</button></div></td>
         </tr>
          <tr>
             <td><div align="center"><div>Mot Croise</div><img src="img/motCroise.png" class ="image1"></div></td>
             <td><div align="center"><div>Petite Sorciere</div><img src="img/petiteSorciere.png" class ="image1"></div></td>
             <td><div align="center"><div>Poisson Amoureux</div><img src="img/poisson-amoureux.png" class ="image1"></div></td>
          </tr>           
       </table>  

        <div align="center"><h1>-----Cart-----</h1></div>



        <table id="itemSelected">
          <tr>
           <th>Articles</th>
            <th>Montant</th>
          </tr>
           <tr>
           <td>
               <p id="produit1"></p>  
               <p id="produit2"></p>
               <p id="produit3"></p>
            </td>
            <td>
                <p id="p1"></p>
                <p id="p2"></p> 
                <p id="p3"></p>
          </td>
           </tr>
        </table>
           <div class="total-price">
         <table>
            <tr>
              <td>Subtotal</td>
              <td><p id="sub"></p></td>
            </tr>
             <tr>
              <td>Tax</td>
              <td><p id="tax"></p></td>
             </tr>
               <tr>
              <td>Total</td>
              <td><p id="total"></p></td>
              </tr>
             <tr><td><a href="information.php"><button>Confirmer</button></a></td></tr>
         </table>
          </div>
      
     </header>
    </body>
</html>



