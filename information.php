<?php 
require_once 'connexion.php';

if (isset($_POST['insert']))
{
  
     
      $prenom=$_POST['prenom'];
      $nom=$_POST['nom'];
      $ville=$_POST['ville'];
      $province=$_POST['province'] ;
      $codePostal=$_POST['codePostal'];
      $telephone=$_POST['telephone'] ;
      $adresseCourriel=$_POST['adresseCourriel'] ;
      $query="insert into clientele(prenom,nom,ville,province,codePostal,telephone,adresseCourriel) "
              . "values('$prenom','$nom','$ville','$province','$codePostal','$telephone','$adresseCourriel')";
    
     
     if (mysqli_query($conn, $query)) {
		echo "New record created successfully !";
	 } else {
		echo "Error: " . $query . "
" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
    

?>
 
<html>
    <head>
        <title>Under Construction</title>  
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <link href='cssPremiereAnnee.css' type='text/css' rel='stylesheet'>
<style>
.inscrip
{
    border:1px solid#999999;
    font:normal 14px helvetica;
    width:400px;
    margin-left:auto;
    margin-right:auto;
    border-radius:10px; 
    padding-top:40px;
    padding-bottom:40px;
}
button
    {
      float:right;
    }
    
   </style>
    </head>
    <body>
<div></div>
  <div align="center"><h2>Adresse de facturation</h2></div>
  <table class="inscrip" border="0" cellpadding ="2" cellspacing="10">
       <form method='post' action="premiereAnnee.php">
         <tr><td>Prenom</td><td><input type="text" name="prenom" required></td></tr>
         <tr><td>Nom</td><td><input type="text" name="nom" required></td></tr>
          <tr><td>Ville</td><td><input type= "text" name= "ville" required></td></tr>
         <tr><td>Province</td><td><input type="text" name="province" required></td></tr>
      <tr><td>Code Postal</td><td><input type="text" name="codePostal" required></td></tr>
        <tr><td>Téléphone</td><td><input type="text" name="telephone" required></td></tr>
         <tr><td>Adresse courriel</td><td><input type="text" name="adresseCourriel" required></td></tr>
       <tr><td colspan="2"><input type="submit" name ="insert" style="border-radius
           :10px; margin-top:30px; width:100%; height:30px; background-color:#55A0E1;"></td></tr>
         <tr><td colspan="2"><button style="border-radius:10px;width:100%; height:30px; background-color:#55A0E1;"><a href="Payment.php">Suivant</a></button></td></tr>
      </form>
 </table>
    </body>
</html>

 

