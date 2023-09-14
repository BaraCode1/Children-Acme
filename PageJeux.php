
    <html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
     <script src="JavaPageJeux.js"></script>
    <style>
    img
    {
    width: 150px;
    height: 150px;
    background-size: 3.125em;
    }
    button {
    background-color: #00aeef; 
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    font-size: 14px;
    border-radius: 10px;
    cursor: pointer;
    }
    body
    {
     border : 0.5px solid #f5f5f5;
     background-color: #f8f9fa; 
    }
    </style>
    </head>
    <body class="container">
    <table>
    <th colspan="2" align="center"><h1>Les animaux de la ferme</h1></th>
    <p>Pour joeur au jeux vous devez entrer le nom de l'animal correspondant</p>
    <p>si vous rentrer le nom exact vous allez entendre le cri de lanimal sinon un son indiquant une erreur se fera entendre</p>
    <form action="PageJeux.php">
    <tr>
    <td><img src="img/animaux/chat.png"></td>
    <td><input type="text" id="chatInput"></td>
    <td><button type="button" name="chat" onclick="play()">Soumettre</button></td>
    <audio id="chat" src="sons/chat.wav"></audio>
    <audio id="wrong" src="sons/wrong-answer.mp3"></audio>
    </tr>
    </form>

    <form action="PageJeux.php">
    <tr>
    <td><img src="img/animaux/ane.png"></td>
    <td><input type="text" id="aneInput"></td>
    <td><button type="button" name="ane" onclick="playAne()">Soumettre</button></td>
    <audio id="ane" src="sons/ane.wav"></audio>
    <audio id="wrong" src="sons/wrong-answer.mp3"></audio>
    </tr>
    </form>

    <form action="PageJeux.php">
    <tr>
    <td><img src="img/animaux/canard.png"></td>
    <td><input type="text"id="canardInput"></td>
    <td><button type="button" name="canard" onclick="playCanard()">Soumettre</button></td>
    </tr>
    <audio id="canard" src="sons/canard.mp3"></audio>
    <audio id="wrong" src="sons/wrong-answer.mp3"></audio
    </form>
    <form action="PageJeux.php">
    <tr>
    <td><img src="img/animaux/cheval.png"></td>
    <td><input type="text"id="chevalInput"></td>
    <td><button type="button" name="cheval" onclick="playCheval()">Soumettre</button></td>
    <audio id="cheval" src="sons/cheval.mp3"></audio>
    <audio id="wrong" src="sons/wrong-answer.mp3"></audio
    </tr>
    </form>

    <form action="PageJeux.php">
    <tr>
    <td><img src="img/animaux/chevre.png"></td>
    <td><input type="text"id="chevreInput"></td>
    <td><button type="button" name="chevre" onclick="playChevre()">Soumettre</button></td>
    <audio id="chevre" src="sons/chevre.wav"></audio>
    <audio id="wrong" src="sons/wrong-answer.mp3"></audio
    </tr>
    </form>

    <form action="PageJeux.php">
    <tr>
    <td><img src="img/animaux/cochon.png"></td>
    <td><input type="text" id="cochonInput"></td>
    <td><button type="button" name="cochon" onclick="playCochon()">Soumettre</button></td>
    <audio id="cochon" src="sons/cochon.mp3"></audio>
    <audio id="wrong" src="sons/wrong-answer.mp3"></audio>
    </tr>
    </form>

    <form action="PageJeux.php">
    <tr>
    <td><img src="img/animaux/dinde.png"></td>
    <td><input type="text"id="dindeInput"></td>
    <td><button type="button" name="dinde" onclick="playDinde()">Soumettre</button></td>
    <audio id="dinde" src="sons/dinde.mp3"></audio>
    <audio id="wrong" src="sons/wrong-answer.mp3"></audio>
    </tr>
    </form>

    <form action="PageJeux.php">
    <tr>
    <td><img src="img/animaux/mouton.png"></td>
    <td><input type="text" id="moutonInput"></td>
    <td><button type="button" name="mouton" onclick="playMouton()">Soumettre</button></td>
    <audio id="mouton" src="sons/mouton.mp3"></audio>
    <audio id="wrong" src="sons/wrong-answer.mp3"></audio>
    </tr>
    </form>

    <form action="PageJeux.php">
    <tr>
    <td><img src="img/animaux/poisson.png"></td>
    <td><input type="text" id="poissonInput"></td>
    <td><button type="button" name="poisson" onclick="playPoisson()">Soumettre</button></td
    <audio id="poisson" src="sons/poisson.mp3"></audio>
    <audio id="wrong" src="sons/wrong-answer.mp3"></audio>
    </tr>
    </form>

    <form action="PageJeux.php">
    <tr>
    <td><img src="img/animaux/poussin.png"></td>
    <td><input type="text" id="poussinInput"></td>
    <td><button type="button" name="poussin" onclick="playPoussin()">Soumettre</button></td>
    <audio id="poussin" src="sons/poussin.mp3"></audio>
    <audio id="wrong" src="sons/wrong-answer.mp3"></audio>
    </tr>
    </form>

    <form action="PageJeux.php">
    <tr>
    <td><img src="img/animaux/tortue.png"></td>
    <td><input type="text" id="tortueInput"></td>
    <td><button type="button" name="tortue">Soumettre</button></td>
    </tr>
    </form>

    <form action="PageJeux.php">
    <tr>
    <td><img src="img/animaux/vache.png"></td>
    <td><input type="text" id="vacheInput"></td>
    <td><button type="button" name="vache" onclick="playVache()">Soumettre</button></td>
    <audio id="vache" src="sons/vache.mp3"></audio>
    <audio id="wrong" src="sons/wrong-answer.mp3"></audio>
    </tr>
    </form>
    </table>  
    </body>
    </html>


