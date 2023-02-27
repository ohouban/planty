<!DOCTYPE html>
<html lang="fr-FR">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <title>Planty</title>
  <?php wp_head() ?>
</head>
  <body>
    <header>
      <nav class="navbar navbar-expand-lg navbar-expand-sm p-0">
      <div class="container-fluid pe-0">
          <a class="navbar-brand" href="http://planty.local/accueil">
            <img src="http://planty.local/wp-content/uploads/2022/12/Logo.png" width="180" alt="logo planty">
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
          </button>
        
          <div class="collapse navbar-collapse justify-content-end menu" id="collapsibleNavbar">
            <ul class="navbar-nav ml-auto mb-lg-0">
              <?php wp_nav_menu([
                'theme_location' => 'header',
                'container' => false,
                'menu_class' => 'navbar-nav'
              ]) ?>
        
              <a class="btnNav" style="color:white;" href="http://planty.local/precommande">Commander</a>
            
            </ul> 
          </div>
        </div>
      </nav>
    </header>