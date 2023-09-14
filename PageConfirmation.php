    <!DOCTYPE html>
    <html>
        <head>
            <title>Confirmation</title>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <style>
                .inscrip {
                    border: 1px solid #999999;
                    font: normal 14px helvetica;
                    width: 400px;
                    margin-left: auto;
                    margin-right: auto;
                    border-radius: 10px;
                    padding-top: 40px;
                    padding-bottom: 40px;
                }

                button {
                    margin-left: 120px;
                    margin-top: 20px;
                }
            </style>

            <script>
                function myFunction() {
                    alert('Merci pour votre achat');
                    if (confirm('Vous voulez vous jouer au jeux?') == true) {
                        location.replace("PageJeux.php");
                    } else {
                        
                        location.replace("index.php");
                    }
                }
            </script>
        </head>
        <body>
            <?php
            session_start();
            require_once 'connexion.php';

           
                 $utilisateurIdentifie = $_SESSION['nomUtilisateur'];

                $query = "SELECT * FROM clientele WHERE prenom='$utilisateurIdentifie'";
                $result = mysqli_query($conn, $query);
                if ($result) {
                    echo '<div align="center"><h1>Confirmation</h1></div>';
                    echo '<table class="inscrip" border="0" cellpadding="2" cellspacing="10">';
                    while ($row = mysqli_fetch_array($result)) {
                        echo "<tr>";
                        echo "<td>" . 'Prenom : ' . $row['prenom'] . '</td>';
                        echo "</tr>";
                        echo "<tr>";
                        echo "<td>" . 'Nom : ' . $row['nom'] . '</td>';
                        echo "</tr>";
                        echo "<tr>";
                        echo "<td>" . 'Ville : ' . $row['ville'] . '</td>';
                        echo "</tr>";
                        echo "<tr>";
                        echo "<td>" . 'Province : ' . $row['province'] . '</td>';
                        echo "</tr>";
                        echo "<tr>";
                        echo "<td>" . 'Code Postal : ' . $row['codePostal'] . '</td>';
                        echo "</tr>";
                        echo "<tr>";
                        echo '<td>' . 'Telephone : ' . $row['telephone'] . '</td></br>';
                        echo "</tr>";
                        echo "<tr>";
                        echo '<td>' . 'Adresse Courriel : ' . $row['adresseCourriel'] . '</td>';
                        echo "</tr>";
                    }
                    echo '</table>';
                    echo '</div>';
               }
               
                   
           
                  
            
            
           //if(isset($_SESSION['laCarte']))
            
            {
                   $crd = $_SESSION['laCarte'];
                   $expira = $_SESSION['dateExpi'];
                   $security = $_SESSION['codeSec'];

                    echo '<div align="center"><h1>Information payment</h1></div>';
                    echo '<table class="inscrip" border="0" cellpadding="2" cellspacing="10">';
                    echo "<tr>";
                    echo "<td>" . 'Numero carte : ' . $crd . '</td>';
                    echo "</tr>";
                    echo "<tr>";
                    echo "<td>" . 'Date d/expiration : ' . $expira . '</td>';
                    echo "</tr>";
                    echo "<tr>";
                    echo "<td>" . 'Code de securite : ' . $security . '</td>';
                    echo "</tr>";
                    echo '<tr><td><button onclick="myFunction()">Joueur</button></td></tr>';
                    echo '</table>';
            }    
                   
                 


            ?>
        </body>
    </html>
