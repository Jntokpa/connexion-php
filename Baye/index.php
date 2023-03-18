<?php
session_start();

include_once('modele/connexion.php');
include_once('controlleurs/traitement_login.php');
?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.84.0">
  <title>GESTABS | Connectez-vous</title>

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

  <!-- Custom styles for this template -->
  <link href="assets/dist/css/signin.css" rel="stylesheet">
</head>

<body class="text-center">

  <main class="form-signin">
    <form method="POST" action="">
      <h1 class="h3 mb-3 fw-normal text-secondary">Se connecter</h1>

      <div class="form-floating">
        <input type="email" class="form-control" id="floatingInput" placeholder="Email" name="mail">
        <label for="floatingInput">Email</label>
      </div>
      <div class="form-floating">
        <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="pass">
        <label for="floatingPassword">Mot de passe</label>
      </div>

      <div class="checkbox mb-3">
        <label class="text-danger"> <?php if (isset($message)) {
                                      echo $message;
                                    }  ?> </label>
      </div>
      <button class="w-100 btn btn-lg btn-success" type="submit" name="connexion">CONNEXION</button>
      <p class="mt-5 mb-3 text-muted"><a href="inscription.php" class="text-secondary">Pas de compte? S'inscrire</a></p>
    </form>
  </main>

</body>

</html>