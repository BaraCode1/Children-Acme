<?php
require_once 'connexion.php';

if (isset($_POST['signup']))
{
    $nomUtilisateur=$_POST['nomUtilisateur'];
    $motDePasse=$_POST['motDePasse'];
    $motDePasse2=$_POST['motDePasse2'];
    
    $query= "insert into inscriptionClient(nomUtilisateur,motDePasse)values('$nomUtilisateur','$motDePasse')";
    
    if($motDePasse!=$motDePasse2)
    {
        echo 'Le mot de passe est different';
    }
    else
        if($motDePasse==$motDePasse2)
        {
             if(mysqli_query($conn,$query))
              {
                echo "Nouveau client ajoute !";
                header("location:client.php");
                die();
              }
          else 
            {
		echo "Error: " . $query . mysqli_error($conn);
            }
        }
    
   
       mysqli_close($conn);
}

echo <<<_END

<html>
    <head>
        <title>Inscription</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/decoInscription.css" rel="stylesheet" type="text/css">
    </head>
    <body>
     <div align="center"><img src="img/logo.png"></div>
      <table class="nMembre" border="0" cellpadding ="2" cellspacing="5">
        <th colspan="2" align="center"><h2>Inscriptions</h2></th>
          <form method="POST" action="inscription.php">
              <tr><td>Nom D'utilisateur</td></tr>
              <tr><td><input type="text" name="nomUtilisateur" placeholder="nom utilisateur" class="input" required autofocus></td></tr>

              <tr><td>Mot de passe</td></tr>
              <tr><td><input type="password" name="motDePasse" placeholder="mot de passe" class="input" required></td></tr>

              <tr><td>Repetez de passe</td></tr>
              <tr><td><input type="password" name="motDePasse2" placeholder="Repetez mot de passe" class="input" required></td></tr>

   <tr>
    <td><button type="submit" name="signup" class="signup">Sign up</button></td>
        <td><button type="button" class="button" class="cancelbtn">Cancel</button></td>
   </tr>

          </form>

     </table>
    </body>
</html>
_END;
?>
