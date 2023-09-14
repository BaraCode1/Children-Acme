         <?php session_start();
         
         if(isset($_POST['confirmation']))
         {
             $numeroCarte=$_POST['card'];
             $expiration=$_POST['expiryDate'];
             $securityCode=$_POST['securityCode'];
             
             $_SESSION['laCarte']=$numeroCarte;
             $_SESSION['dateExpi']=$expiration;
             $_SESSION['codeSec']=$securityCode;
         }
       
echo<<<_END
  <html>
    <head>
        <title>Payment</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script defer src="enregistrementCarte.js"></script> 

     <style>
           .payment
            {
               border:1px solid#999999;
               font:normal 14px helvetica;
               width:400px;
               margin-left:auto;
               margin-right:auto;
               border-radius:10px; 
               padding-top:40px;
               padding-bottom:40px;
               margin-top:300px;
              
            }
            img
           {
            width:38px;
            height:34px;
            padding: 0px;
           }
  button
      {
       margin-top:20px;
       background-color:#55A0E1;
      }
     </style>
    </head>
      <body>
       <table class="payment">
           <form method="post" action="PageConfirmation.php">
        <tr>
            <td><input type="radio" value="credit card" checked>Credit card</td>
            <td>
            <td><img src="img/visa_logo.png"></td>
            <td><img src="img/mastercard_logo.png"></td>
            <td><img src="img/american.png"></td>
            </td>
         </tr>
        <tr><td><input type="text" placeholder="Card number" value="" name="card"></td></tr>
        <tr><td><input type="text" placeholder="Name on card" value="" name="nameOnCard"></td></tr>
        <tr>
            <td><input type="text" placeholder="Expiration date(MM/YY)"value="" name="expiryDate"></td>
            <td><input type="text" placeholder="Security code" value="" name="securityCode"></td>
        </tr>
        <tr align="right">
           <td></td>
           <td><a href="PageConfirmation.php"><button id="button" type="submit" name="confirmation">Pay now</button></a></td>
       </tr>
       </form>
       </table>
          
     </body>
</html>
_END;
 ?>
