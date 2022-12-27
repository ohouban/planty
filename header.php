<!DOCTYPE html>
<html lang="fr-FR">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <title>Planty</title>
  <?php wp_head() ?>
</head>

<body>
  <!DOCTYPE html>
  <html lang="fr-FR">

  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>Planty</title>
    <?php wp_head() ?>
  </head>

  <body>
    <header>
      <nav class="navbar navbar-expand-lg p-0">
        <div class="container-fluid pr-0">
          <a class="navbar-brand" href="http://planty.local/accueil">
            <img src="http://planty.local/wp-content/uploads/2022/12/Logo.png" width="180" alt="logo planty">
          </a>
          <div class="collapse navbar-collapse menu" id="navbarSupportedContent">
            <?php wp_nav_menu([
            'theme_location' => 'header',
            'container' => false,
            'menu_class' => 'navbar-nav ml-auto'
          ]) ?>
            <li>
              <a class="btnNav" style="color:white;" href="http://planty.local/precommande">Commander</a>
            </li>
          </div>
        </div>
      </nav>
    </header>