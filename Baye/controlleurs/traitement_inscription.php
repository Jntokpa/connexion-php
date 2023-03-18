<?php
$message = "";
if (isset($_POST['inscription'])) {
    if (!empty($_POST['mail']) and !empty($_POST['pass']) and !empty($_POST['pass_conf'])) {
        $mail = htmlspecialchars($_POST['mail']);
        $pass = htmlspecialchars($_POST['pass']);
        $pass_conf = htmlspecialchars($_POST['pass_conf']);

        if ($pass != $pass_conf) {
            $message = "Les mots de passe ne sont pas identiques" ;
        } else {
            $select_user->execute(array($mail));
            $nbre_user_exist = $select_user->rowCount();
            if ($nbre_user_exist != 0) {
                $message = "Cet email est deja attribué, veuillez en choisir un autre";
            } else {
                $ajout_user->execute(array($mail, $pass));
                $succes = "User ajouté avec succes";
            }
        }
    } else {
        $message = "Veuillez remplir les champs obligatoires *";
    }
}
