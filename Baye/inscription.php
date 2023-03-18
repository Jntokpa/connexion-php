<?php
session_start();
include_once('modele/connexion.php');
include_once('controlleurs/traitement_inscription.php');
?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.84.0">
  <title>GESTABS | Inscrivez-vous</title>

  <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/sign-in/">
  <link rel="shortcut icon" type="image/png" href="assets/favicon.png"/>

  <!-- Bootstrap core CSS -->
  <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">

  <style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }
  </style>

  <link href="assets/dist/css/signin.css" rel="stylesheet">
</head>

<body class="text-center">

  <main class="form-signin">

  <form method="POST" action="">

    <h1 class="h3 mb-3 fw-normal text-secondary">Inscription</h1>

      <div class="checkbox">
        <label class="text-danger"> <?php if (isset($message)) {
                                      echo $message;
                                    }  ?> </label>
      </div>

      <div class="checkbox">
        <label class="text-succes"> <?php if (isset($succes)) {
                                      echo $succes;
                                    }  ?> </label>
      </div>

      <div class="form-floating">
        <input type="email" class="form-control" id="floatingInput" placeholder="Email" name="mail" value="<?php if (isset($mail)) {
                                        echo $mail;
                                    }  ?>">
        <label for="floatingInput">Email</label>
      </div>
      
      <div class="form-floating">
        <input type="password" class="form-control mb-0" id="floatingInput" placeholder="Mot de passe" name="pass" value="<?php if (isset($pass)) {
                                        echo $pass;
                                    }  ?>">
        <label for="floatingInput">Mot de passe</label>
      </div>

      <div class="form-floating">
        <input type="password" class="form-control" id="floatingPassword" placeholder="Confirmer le mot de passe" name="pass_conf" value="<?php if (isset($pass_conf)) {
                                        echo $pass_conf;
                                    }  ?>">
        <label for="floatingPassword">Confirmer le mot de passe</label>
      </div>

      <button class="w-100 btn btn-lg btn-success" type="submit" name="inscription">INSCRIPTION</button>

      <p class="mt-5 mb-3 text-muted"><a href="index.php" class="text-secondary">Se connecter</a></p>

    </form>

  </main>

</body>

</html>