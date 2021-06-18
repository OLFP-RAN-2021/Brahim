<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="transfer_css.css">
    <title>Document</title>
</head>


<body>
    <br><br>

    <div class="cadre">
        <div class="montitre">
            <h1>JeTransfer</h1>
        </div>

        <div class="monformulaire">

            <form action="mail.php" method="post" enctype="multipart/form-data">


        </div>
        <div class="parent-div">

            <button class="file_button">Choisir le fichier</button>
            <input type="file" name="file" id="file" multiple /><br>
        </div>
        <br>
        <label for="email_des"></label><input type="email" id="email_des"  name="courriel"  value="Envoyer à"  size="48" /><br>
        <label for="email_exp"></label><input type="email" id="email_exp"  name="courriel2"      value="Email expéditeur"     size="48"><br>

        <label for="msg"></label><textarea name="user_message" id="msg" rows="10" cols="48">Message</textarea>
        <br><br>
        <input type="submit" class="mon_bouton" value="Transférer" /><br><br><br>
        </form>
    </div>
    </div>
</body>

</html>