<?php
//$ip = "196.180.172.198";
if (isset($_POST['connexion'])) {
    if (!empty($_POST['mail']) and !empty($_POST['pass'])) {
        $mail = htmlspecialchars($_POST['mail']);
        $pass = htmlspecialchars($_POST['pass']);;

        $select_use->execute(array($mail, $pass));
        $nbre_user_exist = $select_use->rowCount();
        if ($nbre_user_exist == 0) {
            $message = "Erreur sur les parametres de connexion";
        } else {
            $info_user = $select_use->fetch();
            $_SESSION['mail'] = $info_user['mail'];
            $_SESSION['connect'] = True;
            header('Location: vue/index.php');
        }
    } else {
        $message = "Veuillez remplir tous les champs";
    }
} 

