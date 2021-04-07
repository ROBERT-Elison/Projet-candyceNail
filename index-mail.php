<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://kit.fontawesome.com/a3be9883af.js" crossorigin="anonymous"></script>
    <title>Formulaire</title>
</head>

<body>
<div class="contenu">
        <div class="titre">
            <h1>Dis moi quand veux-tu prendre rendez-vous ?</h1>
        </div>
        <!-- form envoie du mail se connect au fichier email-script.php tu en a besoin pas le form entier juste ca-->
        <form action="email-script.php" method="post">
            <div class="form">
                <!-- demande de nom -->
                <input autofocus type="text" name="name" id="name" class="input-field" placeholder="Nom" pattern="[a-zA-Z]{4,10}" required>
            </div>
            <div class="form">
                <!-- demande de nom -->
                <input autofocus type="text" name="prenom" id="prenom" class="input-field" placeholder="Prenom" pattern="[a-zA-Z]{4,10}" required>
            </div>

            <div class="form">
                <!-- demande de Mail-->
                <input type="email" name="fromEmail" id="fromEmail" class="input-field" required placeholder="Email" pattern="[a-zA-Z0-9._-]+@[a-zA-Z0-9._-]+.[a-zA-Z.]{2,15}" size="20" required>
            </div>

            <div class="form">
            <!--demande du numero de telephone-->
            <input type="number" name="telephone" id="telephone" class="input-field" required placeholder="numéro" pattern="[a-zA-Z0-9._-]+@[a-zA-Z0-9._-]+.[a-zA-Z.]{2,15}" size="30" required>
            </div>

            <div class="form">
            <!-- choix de la date de reservation-->
            <input type="date" name="date_reservation" id="date_reservation">
            </div>
            <div class="form">
            <!--demande heure reservation-->
            <input type="time" name="heure_reservation" id="heure_reservation" value="12:00" id="Heure de reservation">
            </div>
            <!-- bouton pour envoie du mail tu en a besoin-->
            <button id="submit" name="sendMailBtn" type="submit">Reserver!</button>
        </form>
    </div>


</body>
 
</html>