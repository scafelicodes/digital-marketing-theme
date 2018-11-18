<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
  <head>

    <!-- Required meta tags -->
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="stylesheet" href="<?php bloginfo('template_url') ?>/fontawesome/css/all.css">    


    <link rel="stylesheet" href="<?php bloginfo('template_url') ?>/style.css">

    <title><?php if(is_home()) { echo bloginfo("name"); echo " - "; echo bloginfo("description"); } else { echo wp_title(" - ", false, right); } ?></title>

    <?php wp_head(); ?>
  </head>
  <body>

  <nav class="navbar navbar-expand-lg top-bar navbar-static-top sps sps--abv">
      <div class="container">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarCollapse1" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      <a class="navbar-brand mx-auto logo-header" href="<?php bloginfo('home') ?>">Scafeli</a>
        <div class="collapse navbar-collapse" id="navbarCollapse1">
          <ul class="navbar-nav ml-auto">
          <li class="nav-item"> <a class="nav-link" href="<?php bloginfo( 'url' ); ?>/sobre">Empresa</a> </li>
          <li class="nav-item"> <a class="nav-link" href="<?php bloginfo( 'url' ); ?>/cursos">Clientes</a> </li>
          <li class="nav-item"> <a class="nav-link" href="<?php bloginfo( 'url' ); ?>/cursos">Cases de Sucesso</a> </li>
          <li class="nav-item"> <a class="nav-link" href="<?php bloginfo( 'url' ); ?>/blog">Blog</a> </li> 
          <li class="nav-item"> <a class="nav-link" href="<?php bloginfo( 'url' ); ?>/blog">Materiais Ricos</a> </li> 
          <li class="nav-item"> <a class="nav-link" href="<?php bloginfo( 'url' ); ?>/contato">Contato</a> </li>
          <li class="nav-item"> <a class="nav-link" href="<?php bloginfo( 'url' ); ?>/contato">Orçamento  </a> </li>
          </ul>
        </div>
      </div>
  </nav>



  <?php if ( is_single()){ ?>


<section class="menu-blog">

<div class="container">
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Eu quero aprender
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">          
          <a class="dropdown-item" href="<?php bloginfo( 'url' ); ?>/gestao-escolar">Redes Sociais</a>
          <a class="dropdown-item" href="<?php bloginfo( 'url' ); ?>/marketing-educacional">Produção de Conteúdo</a>
          <a class="dropdown-item" href="<?php bloginfo( 'url' ); ?>/gestao-escolar">Automação de Marketing</a>
          <a class="dropdown-item" href="<?php bloginfo( 'url' ); ?>/tecnologias-educacionais">Estratégias em Marketing Digital</a>
        </div>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="<?php bloginfo( 'url' ); ?>/contato">Materiais Gratuitos</a>
      </li>
      
    </ul>
  </div>
</nav>
</div>

</section>

<?php 
  } ?>