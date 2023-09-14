<?php session_start();

require_once 'connexion.php'; 

if(isset($_POST['envoye']))
{  
    $_SESSION['count']=0;
    $utilisateur=$_POST['utilisateur'];
    $motDepasseU=$_POST['motDePasse'];
    $utilisateur= stripcslashes($utilisateur);
    $motDepasseU= stripcslashes($motDepasseU);
    //$utilisateur= mysqli_real_escape_string($utilisateur);
    //$motDepasseU= mysqli_real_escape_string($motDepasseU);
    
    $query="select * from inscriptionclient where nomUtilisateur='$utilisateur' and motDePasse='$motDepasseU'";
    $result=mysqli_query($conn, $query);
    
    if(isset($_SESSION['count']))
    {
         if($result)
    {
        $row= mysqli_fetch_array($result);
         
        $_SESSION['nomUtilisateur']=$row['nomUtilisateur'];
        
          if($row['nomUtilisateur']==$utilisateur && $row['motDePasse']==$motDepasseU)
            {
              header("location:PageParent.php");
              mysqli_close($conn);
            }
            else
             {
                 echo 'Le nom dutilisateur ou le mot de passe est incorrect il vous reste :'.$_SESSION['count'];
                 
      
            }
       
    }
        
    }
   
    
}
    
           
       
      
             
            
      
      
        
    
echo<<<_END


<html>
    <head>
        <title>Client</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>

.inscriptions
    {
     border:1px solid#999999;
     font:normal 14px helvetica;
     background-color:#fff;
     width:400px;
     margin-left:auto;
     margin-right:auto;
     box-sizing:border-box;
     height:300px;
     border-radius:10px;
     position:relative;
     margin-top:10px;
     
    }
.input
    {
     border-radius:5px;
     width: 100%;
     padding: 12px 20px;
     margin: 8px 0;
     border: 1px solid #ccc;
     box-sizing: border-box;
    }
.button
    {
 width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
    }

</style>
    </head>
    <body>
<div align="center"><img src="img/logo.png"></div>
<table class="inscriptions" border="0" cellpadding ="2" cellspacing="5">
<th  colspan="2" align="center"><h2>Log in</h2></th>
       <form method='POST' action="client.php"><pre>       
       <tr>
           <td><label for="nomUtilisateur">Nom d'utilisateur</label></td>
        </tr>
             <tr>
               <td>
                 <input type="text" name="utilisateur" id="nomUtilisateur" placeholder="nom utilisateur" class="input">
                 </td>
              </tr>
       <tr>
           <td><label for="motDePasse">Mot de passe</label></td>
       </tr>
        <tr>
           <td><input type="password" name="motDePasse" id="motDePasse" placeholder=" mot de passe" class="input"></td>
               
       </tr>
       <tr ><td colspan="2" align="center"><button type="submit" name ="envoye" class="button">Log in</button></td></tr>
        <tr><td><a href="inscription.php">s'inscrire ?</td></a></tr>
     </pre></form>
  </table>
    </body>
</html>
_END;
?>
